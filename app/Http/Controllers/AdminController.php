<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    // Admin Dashboard
    public function AdminDashboard(){
        return view("admin.index");
    }
    // Admin Login
    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
    // AdminProfile
    public function AdminProfile(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_profile', compact('profileData'));
    }
    // AdminChangePassword
    public function AdminChangePassword(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.change_password', compact('profileData'));
    }
    // AdminUpdatePassword
    public function AdminUpdatePassword(Request $request){
        $request->validate([
            'old_password'=> 'required',
            'new_password'=> 'required|confirmed',
        ]);
        // Match the old password
        if(!Hash::check($request->old_password, auth::user()->password)){
            $notification = array(
				'message'=> 'Old Password Does not Match',
				'alert-type'=>'error'
				);
			return back()->with($notification);
        }
        // Update the new password
        User::whereId(auth::user()->id)->update([
            'password'=> Hash::make($request->new_password)
        ]);
        $notification = array(
            'message'=> 'Password Changed Successfully',
            'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
    }
    // Admin Login
    public function AdminLogin(){
        return view('admin.admin_login');
    }
}
