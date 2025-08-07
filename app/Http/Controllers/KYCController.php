<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreKYCRequest;
use Illuminate\Http\Request;


class KYCController extends Controller
{
    public function showForm()
    {
        return view('kyc.form');   
    }

    public function submit(StoreKYCRequest $request) 
    {
        dd($request);
        // return "submit";
    }

    public function status() 
    {
        return view('kyc.status');
    }
}
