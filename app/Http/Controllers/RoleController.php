<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    // Handle Admin Login
    public function adminLogin(Request $request)
    {
        $username = $request->input('username'); 
        $password = $request->input('password'); 

        // Fixed Admin password check
        if ($password === 'admin') {            
            return view('admindashboard', ['username' => $username]);  // Pass username to view
        } else {
            return redirect()->back()->with('error_admin', 'Invalid Admin credentials');
        }
    }

    // Handle Organizer Login
    public function organizerLogin(Request $request)
    {
        $username = $request->input('username'); 
        $password = $request->input('password'); 

        // Fixed Organizer password check
        if ($password === 'organizer123') {
            return view('homepage', ['username' => $username]);  
        } else {
            return redirect()->back()->with('error_organizer', 'Invalid Organizer credentials');
        }
    }
}
