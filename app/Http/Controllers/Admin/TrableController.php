<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrableController extends Controller
{
    public function index()
    {
        return view('admin.trable.index');
    } 
    public function add()
    {
        return  view('admin.trable.create');
    }
    public function create(Request $request)
    {
        return  redirect('admin/trable/create');
    }
    
   
}
