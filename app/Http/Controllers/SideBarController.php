<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SideBarController extends Controller
{
    public function saveState(){

    //if no session then save as colaped
    if (Session::has('sidebarState')) {
        Session::remove('sidebarState');
    } else {
        //colapse sidebar
        Session::put('sidebarState', 'sidebar-collapse');
    }
}
}
