<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index.index');
    }

    public function showMenu(Request $request)
    {
 //       if ($request->id)
        //return view('index/menu.han-thuyen');
        return view('index/menu.saigon-centre');
    }

    public function showFranchise(Request $request)
    {
        return view('index/franchise');
    }

    public function showReservations(Request $request)
    {
        return view('index/reservations');
    }

    public function showContact(Request $request)
    {
        return view('index/contact-us');
    }
}
