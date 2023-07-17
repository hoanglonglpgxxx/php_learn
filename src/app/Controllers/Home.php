<?php

namespace App\Controllers;

use App\View;

class Home
{
        public function index() : View {
            phpInfo();
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