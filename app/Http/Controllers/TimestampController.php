<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Timestamp;
use App\User;
use Illuminate\Support\Facades\Auth;

class TimestampController extends Controller
{ 
  public function __construct()
  {
    $this->middleware('auth', [
        'only' =>['create', 'show']
    ]);
  }
  
  public function index()
  {
      
      $timestamps = Timestamp::all();
   
      return view('index', 
      ['timestamps' => $timestamps]); 
  }

  public function create()
  {

    return view('new');

  }
  public function punch_in()
  {
    $user = Auth::user();
    $punchin = new Timestamp;
    $punchin->user_id = Auth::id();
    $punchin->punch_in = Carbon::now();
    $punchin->save();
  
    return redirect('/timestamps');
  }
  public function punch_out()
  {
    $user = Auth::user();
    $punchout = Timestamp::where('user_id', $user->id)->latest()->first();
    $punchout->punch_out =  Carbon::now();
    $punchout->save();

    return redirect('/timestamps');
  }
  public function show($id)
  {
    $user = User::find($id);
    return view('show', ['user' => $user]);
  }
}
