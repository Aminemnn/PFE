<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\users;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class FreelancerManagementController extends Controller
{
    //fonction can show all freelancers
    public function show(): View
    {
        $freelancer = DB::table('users')->where('role','freelancer')->get();
        return view('admin.layouts.UserManagement')->with('freelancers',$freelancer);
    }
    public function destroy(){
        $user=$_POST['delete'];
        DB::table('users')->where('id',$user)->delete();
    return redirect()->route('UserManagement')->with('success','Item deleted successfully');
    }
}
