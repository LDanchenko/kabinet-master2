<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {

        return view('admin.index');
    }

    public function groups()
    {

        return view('admin.groups');
    }

    public function teachers()
    {

        return view('admin.teachers');
    }
    public function timetable()
    {

        return view('admin.timetable');
    }
}