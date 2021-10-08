<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\OrderBooked;
use Auth;

class IndexController extends Controller
{
    public function orderBook() {
        Auth::user()->notify(new OrderBooked(['order booked']));
    }
}
