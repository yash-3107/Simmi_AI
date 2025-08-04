<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SidebarController extends Controller
{
    public function app_studio(){
        return view('sidebars.sidebar-app');
    }
    public function agent_studio(){
        return view('sidebars.sidebar-agent');
    }
    public function sidebar_home(){
        return view('sidebars.sidebar-home');
    }
}
