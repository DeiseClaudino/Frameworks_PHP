<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Request;


class LoginController extends Controller
{
  function login(LoginRequest $loginRequest)
{
  if ($loginRequest == $loginRequest) {
    return view('listaLivros');
  }


  return view('login');
}
}
