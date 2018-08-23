<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
  function login()
{
    // $senhaMd5 = md5($senha);
    // $email = $email;
    //
    // DB::table('usuarios')
    //         ->where('email', '=', $email)
    //         ->andWhere('email', '=', $senhaMd5)
    //         ->get();

  return view('login');
}
}
