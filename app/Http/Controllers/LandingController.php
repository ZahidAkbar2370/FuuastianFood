<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
  
class LandingController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function cart()
    {
        return view('cart');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
          
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->product_name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product removed successfully');
        }
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function saveCheckout(Request $request)
    {
        $carts = session()->get('cart');
// $request->name;
        $invoice = time();
        $random = mt_rand(1000000, 9999999);
        foreach ($carts as $key => $cart) {
            Order::create([
                "invoice" =>  $invoice + $random,
                "customer_name" =>  $request->customer_name,
                "contact_no" =>  $request->contact_no,
                "location" =>  $request->location,
                "product_name" =>  $cart['name'],
                "product_quantity" =>  $cart['quantity'],
                "product_price" =>  $cart['price'],
                "product_image" =>  $cart['image'],
                "total_price" =>  $cart['quantity'] * $cart['price'],
                "status" =>  "pending",
            ]);
        }
        
        session()->flush();

        return redirect('cart');
      
    }
}