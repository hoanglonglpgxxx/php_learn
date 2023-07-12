<?php

namespace App\Controllers;

use App\View;

class Invoice
{
    public function index() : View {
        return  View::make('invoices/index');
    }

    public function create() : View {
        return  View::make('invoices/create');
    }

    public function store() {
        $invoice = new Invoice();
        $amount = $_POST['amount'];
        var_dump($amount);
    }
}