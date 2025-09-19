<?php

namespace App\Http\Controllers\backApp;
use App\Models\AddCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dash() {
        return view('backView.layoutback.dashback');
    }

    public function products() {
        return view('backView.products');
    }

    public function addProduct() {
        $MyCategory=AddCategory::All();
        return view('backView.addProduct' , compact('MyCategory'));
    } 

    public function addCategory() {
        $MyCategory=AddCategory::All();
        return view('backView.addCategory', compact('MyCategory'));
    }

    public function orders() {
        return view('backView.orders');
    }

    public function customers() {
        return view('backView.customers');
    }
    public function addCategorystore(request $request){
        $request->validate([
            'CategoryAdd' => 'required',
        ]);
        AddCategory::Create([
            'name' => $request->CategoryAdd
        ]);
        return redirect()->back()->with('succes','your Category added Succesfully..');
    }
}
