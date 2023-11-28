<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function register(Request $request){
      $asParada = $request->validate([
        'Name' => 'required',
        'Email' => 'required',
        'Password' => 'required'
      ]);
      return 'okay';
    }
}
