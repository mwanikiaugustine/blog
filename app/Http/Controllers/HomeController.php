<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    /**
     * Show the application departments.
     *
     * @return \Illuminate\Http\Response
     */
    public function showDepartment()
    {
        $departments=[
            "SDC"=>"Software Development Department",
            'Admin'           => 'Administration Department',
            'Network'         => 'Networks and Infrastructure Department',
        ];
        return view('department')->With('departments',$departments);
    }
     public function addDepartmentForm()
    {  
        return view('departmentAdd');
    }
}
