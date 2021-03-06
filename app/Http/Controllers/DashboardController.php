<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        // $posts[] = ['Title','date'];
        // foreach($user->posts as $key => $value){
        //     $posts[++$key] = [$value->tile]
        // }
        return view('Dashboard')->with('posts',$user->posts);
    }
}
