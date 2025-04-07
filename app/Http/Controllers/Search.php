<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Search extends Controller
{
    public function checkSearch(Request $request) {

    }

    public function search_client(Request $request)
    {
        $valedate = Validator::make($request->all(), [
            "search" => 'required|string|max:50',
        ], [
            'search.required' => 'عذرا: يجب إدخال اسم العميل.',
            'search.max' => 'عذرا: يجب ألا يتجاوز الاسم 50 حرفًا.',
        ]);
    
        if ($valedate->fails()) {
            return redirect()->route('clients_table')
                ->withErrors($valedate)
                ->withInput();
        }

        $search = $request->input('search');

        $clients = \App\Models\Client::where('name', 'LIKE', '%' . e($search) . '%')->get();

        if ($clients->isEmpty()) {
            return redirect()->route('clients_table')
                ->with('error', 'لا توجد نتائج للبحث');
        }

        return redirect()->route('clients_table')
            ->with('result_search', $clients);
    }


    public function search_employee(Request $request)
    {
        $search = $request->input('search');
        $employees = \App\Models\Employee::where('name', 'LIKE', "%$search%")->get();
        return view('Action.employee', ['employees' => $employees]);
    }
    public function search_item(Request $request)
    {
        $search = $request->input('search');
        $items = \App\Models\Item::where('name', 'LIKE', "%$search%")->get();
        return view('Action.item', ['items' => $items]);
    }
    public function search_order(Request $request)
    {
        $search = $request->input('search');
        $orders = \App\Models\Order::where('name', 'LIKE', "%$search%")->get();
        return view('Action.order', ['orders' => $orders]);
    }
    public function search_order_item(Request $request)
    {
        $search = $request->input('search');
        $orders = \App\Models\Order::where('name', 'LIKE', "%$search%")->get();
        return view('Action.order', ['orders' => $orders]);
    }
    public function search_order_client(Request $request)
    {
        $search = $request->input('search');
        $orders = \App\Models\Order::where('name', 'LIKE', "%$search%")->get();
        return view('Action.order', ['orders' => $orders]);
    }
    public function search_order_employee(Request $request)
    {
        $search = $request->input('search');
        $orders = \App\Models\Order::where('name', 'LIKE', "%$search%")->get();
        return view('Action.order', ['orders' => $orders]);
    }
    public function search_order_date(Request $request)
    {
        $search = $request->input('search');
        $orders = \App\Models\Order::where('name', 'LIKE', "%$search%")->get();
        return view('Action.order', ['orders' => $orders]);
    }
    public function search_order_status(Request $request)
    {
        $search = $request->input('search');
        $orders = \App\Models\Order::where('name', 'LIKE', "%$search%")->get();
        return view('Action.order', ['orders' => $orders]);
    }
    public function search_order_total(Request $request)
    {
        $search = $request->input('search');
        $orders = \App\Models\Order::where('name', 'LIKE', "%$search%")->get();
        return view('Action.order', ['orders' => $orders]);
    }
    public function search_order_paid(Request $request)
    {
        $search = $request->input('search');
        $orders = \App\Models\Order::where('name', 'LIKE', "%$search%")->get();
        return view('Action.order', ['orders' => $orders]);
    }
}
