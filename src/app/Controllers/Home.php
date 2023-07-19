<?php

namespace App\Controllers;

use App\View;
use PDO;
class Home
{
        public function index() : View {
            try {
                $db = new PDO('mysql:host=db;dbname=my_db','root','root',[
                    //set default fetch mode
//                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,

                ]);
                $email = 'test3@gmail.com';
                $name = 'Test3';
                $isActive = 1;
                $createdAt = date('Y-m-d H-i-s',strtotime('02/02/2020 9:00PM'));
                $query = 'INSERT INTO users(email,full_name, is_active, created_at, updated_at) values(:email, :name, :active, :date, :date)';

                $stmt = $db->prepare($query);

                $stmt->bindValue(':name', $name);
                $stmt->bindValue(':email', $email);
//                $stmt->bindValue(':active', $isActive, PDO::PARAM_BOOL);
                $stmt->bindParam(':active', $isActive, PDO::PARAM_BOOL);
                $stmt->bindValue(':date', $createdAt);

                $stmt->execute([
                    'name' => $name,
                    'email'=> $email,
                    'active'=> $isActive,
                    'date' => $createdAt
                ]);
                $id = $db->lastInsertId();
                $user = $db->query('SELECT * FROM users WHERE id = ' .$id)->fetch();
                print_r($user);
// foreach ($stmt->fetchAll() as $user) {
//                    printArr($user);
//                }
            }catch(\PDOException $e){
                throw new \PDOException($e->getMessage(), (int) $e->getCode());
            }
            return  View::make('index', ['foo' => 'bar', 'fooao' => 'barasd']);
        }

        public function upload() {
            $filePath = STORAGE_PATH . '/' . $_FILES['receipt']['name'];
            move_uploaded_file($_FILES['receipt']['tmp_name'],$filePath);

           /* echo '<pre>';
            var_dump(pathinfo($filePath));
            echo '</pre>';*/
            header('Location: /');
            exit;
        }

        public function download() {
            header('Content-Type: application/pdf');
            header('Content-Diposition: attachment;filename="myfile.pdf"');

            readfile(STORAGE_PATH. '/receipt 6-20-20312.pdf');
        }
}