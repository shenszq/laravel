<?php

namespace App\Http\Controllers\Home;

//use Illuminate\Http\Request;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class UserController extends Controller
{
    public function index(){
      $name = Request::input('data');
      return Request::path();
    }

}
