<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class chrisController extends Controller {


 public function index()
 {

 return view('chris2');

 }

public function test() { echo 'test'; }
}