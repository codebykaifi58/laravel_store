<?php

namespace App\Http\Controllers\backApp;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dash() {
        return view('backView.dashback');
    }

    public function products() {
        return view('backView.products');
    }

    public function addProduct() {
        return view('backView.addProduct');
    }

    public function addCategory() {
        return view('backView.addCategory');
    }

    public function orders() {
        return view('backView.orders');
    }

    public function customers() {
        return view('backView.customers');
    }
}
