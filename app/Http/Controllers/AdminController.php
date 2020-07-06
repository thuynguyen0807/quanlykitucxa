<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;

class AdminController extends Controller
{
    public function getDangKi() {
        return view('admin.account.Create_Account');
    }

    public function postDangKi(Request $request) {
        $admin = new Admin;
    	
        $admin->login_name = $request->login_name;
        $admin->password = $request->password;
        $admin->email = $request->email;
        $admin->save();

    	return redirect('admin/quanlykitucxa');
    }

    public function getDangNhap() {
        return view('admin.account.Login');
    }

    public function postDangNhap(Request $request) {
        $login_name = $request->input('login_name');
        $admin = Admin::find($login_name);
        if (($request->login_name == $admin->login_name) && ($request->password == $admin->password)) {
            return redirect('admin/quanlykitucxa');
        } else {
            return redirect('admin/dangnhap')->with('notification', 'Đăng nhập thất bại');
        }
    }
}
