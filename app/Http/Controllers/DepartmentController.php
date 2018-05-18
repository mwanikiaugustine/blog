<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Department;
class DepartmentController extends Controller
{
    public function index()
    {
        $departments= Department::all();
//        $departments=[
//            "SDC"=>"Software Development Department",
//            'Admin'           => 'Administration Department',
//            'Network'         => 'Networks and Infrastructure Department',
//        ];
        return view('department.index',['departments'=>$departments]);
    }
    public function show(Department $id)
    {
        return view('department.show',['departments'=>$id]);
    }
    public function create()
    {
        return view('department.create');
    }
    public function store()
    {
        $department=new Department();
        $department->d_name=  request('department');
        $department->d_description=  request('description');
        
        $department->save();
        return redirect('department');
    }
}
