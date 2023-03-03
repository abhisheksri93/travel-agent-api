<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
       return view('login');
    }

     public function booking(){
      return view('booking');
   }

   public function payments(){
      return view('payment');
   }

   public function addBooking(){
      return view('addBooking');
   }
   public function dashboard(){
      return view('dashboard');
   }

   public function user(){
      return view('user');
   }

   public function bookinginformation(){
      return view('bookinginformation');
   }

   public function transferResult(){
      return view('transferResult');
   }
}
