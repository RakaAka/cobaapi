<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\shopping_api;

class ShoppingController extends Controller
{
    //
    public function index(){
        return response()->json(shopping_api::all(), 'sukses');
    }

    public function create(){

        return response()->json('Sukses');
    }

    public function dptkanid(){

    }
}
