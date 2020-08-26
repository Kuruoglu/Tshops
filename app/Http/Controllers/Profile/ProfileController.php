<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index($id)
    {
//        $user = User::where('id', $id)->get();
        $orders = Order::where('status_id', 1)->get();
////        dd($user);
        return view('organizer.index', compact('orders'));
    }
}
