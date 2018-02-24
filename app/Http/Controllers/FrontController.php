<?php

namespace App\Http\Controllers;
use App;
use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
class FrontController extends Controller
{
    public function getIndex()
    {
      $locale = Input::get('la');
      App::setLocale($locale);
    //   return view('home', array('books' => $books));
      $members = Member::all();
      
      return view('home', array('members' => $members));
    }
}
                