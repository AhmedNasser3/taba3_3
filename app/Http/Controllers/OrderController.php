<?php

namespace App\Http\Controllers;

use App\Models\PrintService;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = PrintService::where('printer_id', auth()->check() ? auth()->user()->id : '')->get();
        return view('frontend.pages.includes.cart',compact('orders'));
    }
}
