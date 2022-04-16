<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function addProduct(Request $request)

    {

        if($request->hasFile('image') && $request->image->isValid()){
            $extension = $request->image->extension();
            $filename = time()."_.".$extension;
            $request->image->move(public_path('Uploads'), $filename);
        }else{
            $filename = 'no-image.png';
        }

        Product::create([
            'product_name' => $request->product_name,
            'price' => $request->price,
            'image' => $filename,
            'description' => $request->description
        ]);

        return redirect()->back();
    }

    public function viewProduct()

    {
        $products = Product::all();
        return view('Admin.Product.view_products')
                ->with('products',$products);
    }

    public function destroyproduct($id)
    {
        $destroy = Product::find($id)->delete();

        return redirect()->back();
    }

    public function editproduct($id)

    {
        $editproduct = Product::find($id);

        return view('Admin.Product.edit_product')
                    ->with('editproduct' , $editproduct);
    }

    public function updateproduct(Request $req)

    {
        $updateproduct = Product::find($req->id);
        if($req->hasFile('image')){
            $extension = $req->image->extension();
            $filename = time()."_.".$extension;
            $req->image->move(public_path('Uploads'), $filename);
            $updateproduct->image = $filename;

        }

        $updateproduct->product_name = $req->product_name; 
        $updateproduct->price = $req->price; 
        $updateproduct->description = $req->description; 
        $updateproduct->update();
        return redirect('view-products');
    }
}
