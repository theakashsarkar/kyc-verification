<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class KYCController extends Controller
{
    public function showForm()
    {
        return view('kyc.form');   
    }

    public function submit(Request $request) 
    {
        dd($request->all());
        // return "submit";
    }

    public function status() 
    {
        return view('kyc.status');
    }
}
