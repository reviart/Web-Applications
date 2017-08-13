<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use App\Order;

class AdminOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
       $this->middleware('auth:admin');
    }

    public function index()
    {
      $orders = Order::all();
      return view('admin.order', compact('orders'));
    }

    public function success(){
      $orders = Order::all();
      return view('admin.orders.order-success', compact('orders'));
    }

    public function progress(){
      $orders = Order::all();
      return view('admin.orders.order-progress', compact('orders'));
    }

    public function failed(){
      $orders = Order::all();
      return view('admin.orders.order-failed', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /*Order::create($request->all());
      return redirect('/orders')->with('alert', 'Success make an order, please stay with us!');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      /*$orders = Order::findOrFail($id);
      return view('user.order.edit', compact('orders'));*/
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      /*
      $orders = Order::findOrFail($id);
      $orders->update($request->all());
      return redirect('/orders')->with('alert', 'Success edit data!');
      */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      /*
      $orders = Order::findOrFail($id);
      $orders->delete();
      return redirect('/orders')->with('alert', 'Success delete data!');
      */
    }
}
