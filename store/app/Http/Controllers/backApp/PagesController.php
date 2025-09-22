<?php

namespace App\Http\Controllers\backApp;
use App\Models\AddCategory;
use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dash() {
        return view('backView.layoutback.dashback');
    }

    public function products() {
        $products = Product::with('categoryRelation')->get();
        return view('backView.products', compact('products'));
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
public function addproductstore(Request $request) {
    $request->validate([
        'name' => 'required',
        'category' => 'required',
        'price' => 'required',
        'quantity' => 'required',
        'image' => 'required|image',  // add image validation
        'discription' => 'required',
    ]);

    $imagepath = null;
    if ($request->hasFile('image')) {
        $imagepath = $request->file('image')->store('product', 'public');
    }

    Product::create([
        'name' => $request->name,
        'category' => $request->category,
        'price' => $request->price,
        'quantity' => $request->quantity,
        'image' => $imagepath,  // save the stored image path here
        'discription' => $request->discription,
    ]);

    return redirect()->back()->with('success', 'Product added successfully.');
}

}
