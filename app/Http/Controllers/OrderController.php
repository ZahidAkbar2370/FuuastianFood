<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use DB;

class OrderController extends Controller
{
    public function viewOrder()

    {
        $orders = Order::where("status","pending")->orderBy("id", "DESC")->get();
        return view('Admin.Order.view_orders')
                ->with('orders',$orders);
    }

    public function viewOrderHistory()

    {
        $orders = Order::orderBy("id", "DESC")->get();
        return view('Admin.Order.view_orders')
                ->with('orders',$orders);
    }

    public function destroyOrder($id)

    {

        $destroyOrder = Order::find($id)->delete();
        return redirect()->back();

    }

    public function deleverd($id)

    {
        DB::update("update orders SET status='deleverd' where id = '$id'");
        return redirect()->back();
    }
}
