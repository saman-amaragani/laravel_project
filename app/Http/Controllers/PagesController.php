<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
 {
    public function index(){
        $title = 'Welcome To Laravel!';
       //return view ('pages.services' , compact('title));
       return view ('pages.index')->with ('title',$title);
   }
    public  function about(){
        $title = 'About US';
    
        return view ('pages.about')->with ('title',$title);
    
    }
    // public  function services(){
    //     $title = 'Services page';
    //     return view ('pages.services')->with ('title',$title);
    
    // }
    public  function services(){
        $data = array (
            'title' => 'Services',
            'services' => ['Web Design', 'Programming' , 'SEO']
        );
        return view ('pages.services')->with($data) ;
    }
}
