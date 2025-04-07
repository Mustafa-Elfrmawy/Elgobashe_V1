<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class GetData extends Controller
{
    public function getOrders()
    {
        $orders = \App\Models\Order::all();
        $clients = \App\Models\Client::all();
        $items = \App\Models\Item::all();

        $orders->transform(function ($order) {
            $order->formatted_date = Carbon::parse($order->created_at)->locale('ar')->isoFormat('dddd، YYYY-MM-DD');
            return $order;
        });

        return view('orders_table', [
            'orders' => $orders,
            'clients' => $clients,
            'items' => $items
        ]);
    }

    public function getClients()
    {
        $clients = \App\Models\Client::all();
        $clients->transform(function ($client) {
            $client->formatted_date = Carbon::parse($client->created_at)->locale('ar')->isoFormat('dddd، YYYY-MM-DD');
            return $client;
        });
        return view('clients_table', [
            'clients' => $clients
        ]);
    }

    public function getItems()
    {
        $items = \App\Models\Item::all();
        return view('items_table', [
            'items' => $items
        ]);
    }

    public function getDepartment()
    {
        $department = \App\Models\Department::all();
        return view('Action.employee', [
            'department' => $department
        ]);
    }
}