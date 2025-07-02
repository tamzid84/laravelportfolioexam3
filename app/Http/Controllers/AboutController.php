<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $mySkills= [
            [
                'title' =>'HTML5',
                'progress' =>'95%'
            ],
            
            [
                'title' =>'CSS3',
                'progress' =>'90%'
            ],
            [
                'title' =>'JavaScript',
                'progress' =>'85%'
            ],
            
            [
                'title' =>'Bootstrap',
                'progress' =>'95%'
            ],
            [
                'title' =>'React',
                'progress' =>'80%'
            ],
            
            [
                'title' =>'Node.Js',
                'progress' =>'75%'
            ],
        ];
        
        
        return view('about',compact('mySkills'));
    }
}
