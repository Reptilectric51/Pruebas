<?php
 
namespace App\Http\Controllers;
 
use App\Product;
use Illuminate\Http\Request;
 
class ProductController extends Controller
{    
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required|min:0',
        ]);
    }
}