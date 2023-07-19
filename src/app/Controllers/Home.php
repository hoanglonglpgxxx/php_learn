<?php

namespace App\Controllers;

use App\Models\Invoice;
use App\Models\SignUp;
use App\Models\User;
use App\View;
use \PDO;

class Home
{
    public function index(): View
    {
        $db = \App\App::db();
        /*$email = 'test3@gmail.com';
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
        //                }*/

        $email = 'test14@a.com';
        $name = 'testTran';
        $amount = 2524;
        $userModel = new User();
        $invoiceModel = new Invoice();
        $invoiceId = (new SignUp($userModel, $invoiceModel))->register(
            [
                'email' => $email,
                'name' => $name
            ],
            [
                'amount' => $amount
            ]
        );

        return View::make('index', ['invoice' => $invoiceModel->find($invoiceId)]);
    }

//        public function upload() {
//            $filePath = STORAGE_PATH . '/' . $_FILES['receipt']['name'];
//            move_uploaded_file($_FILES['receipt']['tmp_name'],$filePath);
//
//            header('Location: /');
//            exit;
//        }
//
//        public function download() {
//            header('Content-Type: application/pdf');
//            header('Content-Diposition: attachment;filename="myfile.pdf"');
//
//            readfile(STORAGE_PATH. '/receipt 6-20-20312.pdf');
//        }
}