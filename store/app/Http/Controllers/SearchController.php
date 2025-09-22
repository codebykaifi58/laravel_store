<?php

namespace App\Http\Controllers;

use App\Models\Product; // Assuming you have a Product model
use App\Models\AddCategory; // If you want to match categories as well
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
         $query = $request->input('q');
    
    if (empty($query)) {
        return response()->json([
            'categories' => AddCategory::all()
        ]);
    }

    $words = explode(' ', $query);

    // Search for products matching at least two or three words
    $products = Product::where(function ($queryBuilder) use ($words) {
        foreach ($words as $word) {
            $queryBuilder->where('name', 'like', '%' . $word . '%');
        }
    })
    ->orWhere(function ($queryBuilder) use ($words) {
        foreach ($words as $word) {
            $queryBuilder->where('description', 'like', '%' . $word . '%');
        }
    })
    ->get();

    // Categories that match the query
    $categories = AddCategory::where('name', 'like', '%' . $query . '%')->get();
    
if ($request->ajax()) {
        return response()->json([
            'categories' => $categories,
            'products' => $products
        ]);
    }

    // For non-AJAX requests, return a view with search results
    return view('frontView.search', compact('products', 'categories'));
}
}
