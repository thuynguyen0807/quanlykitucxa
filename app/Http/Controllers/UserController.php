<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Students;
use App\Relative;

class UserController extends Controller
{
    public function trangchu() {
        return view('user.layouts.trangchu'); 
    }
    public function getDangKi() {
        return view('user.account.Create_Account');
    }

    public function postDangKi(Request $request) {
        $user = new User;
    	
        $user->login_name = $request->login_name;
        $user->password = $request->password;
        $user->email = $request->email;
        $user->save();

    	return redirect('/user');
    }

    public function getDangNhap(Request $request) {
        return view('user.account.Login');
    }

    public function postDangNhap(Request $request) {
        $login_name = $request->input("login_name");
        $user = User::find($login_name);
        if (($request->login_name == $user->login_name) && ($request->password == $user->password)) {
            return redirect('/user/trangchu');
        } else {
            return redirect('/dangnhapnguoidung')->with('notification', 'Đăng nhập thất bại');
        }
    } 

    public function thongtin(Request $request, $id) {
        $student = Students::find($id);
        return view('user.sinhvien.thongtin', ['student'=>$student]);
    }
    
    public function nguoithan(Request $request, $id) {
        $relative = Relative::find($id);
        return view('user.sinhvien.nguoithan', ['relative'=>$relative]);
    }

    public function dangxuat() {
        return view('user.account.Login');
    }

    public function getSuaThongTin($id) {
    	
        $student = Students::find($id);
        return view('user.sinhvien.suathongtin', ['student'=>$student]);
    }


    public function postSuaThongTin(Request $request, $id) {
        
        $student = Students::find($id);

    	$student->id=$request->id;
    	$student->fullname=$request->fullname;
    	$student->birthday=$request->birthday;
    	$student->gender=$request->gender;
    	$student->cmnd=$request->cmnd;
    	$student->address=$request->address;
    	$student->phone=$request->phone;
    	$student->email=$request->email;
    	$student->id_room=$request->id_room;
        $student->id_relative=$request->id_relative;
        $student->start_date=$request->start_date;
        $student->id_bed=$request->id_bed;
    	$student->save();
    	return redirect('user/thongtin/')->with('notification', 'Bạn đã sửa thông tin cá nhân thành công
            !');
    }

    public function getSuaNguoiThan($id) {
    	$rl = Relative::where('id', $id)->get()->first();
    	return view('user.sinhvien.suanguoithan', ['rl'=>$rl]);
    }

    public function postSuaNguoiThan(Request $request, $id) {
    	$rl = Relative::find($id);

    	$rl->id=$request->id;
    	$rl->fullname_rl=$request->fullname_rl;
    	$rl->birthday=$request->birthday;
    	$rl->id_student=$request->id_student;
    	$rl->phone1=$request->phone1;
    	$rl->address=$request->address;
    	$rl->phone2=$request->phone2;
    	$rl->relationship=$request->relationship;
    	$rl->save();
    	return redirect('user/nguoithan')->with('notification', 'Bạn đã sửa thông tin người thân thành công !');
    }


}
