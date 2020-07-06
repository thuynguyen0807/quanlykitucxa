<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Students;
use App\Room;
use App\CategoryRoom;
use App\Relative;
use App\Bed;
use App\Mail\SendMail;

class DangKiController extends Controller
{
    public function getDangKi() {
        $category_room = CategoryRoom::all();
        $room = Room::all();
        $bed = Bed::all();
    	return view('kitucxa.dangkinoitru', ['category_room'=>$category_room, 'rooms'=>$room, 'beds'=>$bed]);
    }
    public function postDangKi(Request $request) {

    	
        $st = new Students;

        $st->id=$request->id;
        $st->fullname=$request->fullname;
        $st->birthday=$request->birthday;
        $st->gender=$request->gender;
        $st->cmnd=$request->cmnd;
        $st->address=$request->address;
        $st->phone=$request->phone;
        $st->email=$request->email;
        $st->id_room=$request->id_room;
        $st->id_relative=$request->id_relative;
        $st->start_date=$request->start_date;
        $st->id_bed=$request->id_bed;
        $st->save();

        $rl = new Relative;
        $rl->id = $request->id_relative;
        $rl->fullname_rl = $request->fullname_rl;
        $rl->birthday = $request->birthday;
        $rl->phone1 = $request->phone1;
        $rl->phone2 = $request->phone2;
        $rl->address = $request->address;
        $rl->relationship = $request->relationship;
        $rl->id_student = $request->id;
        $rl->save();

                

        
        $this->validate($request, ['fullname'=>'required', 'email'=>'required|email',]); 
        $data = (object) [
            'fullname'=>$request->fullname,
        ];
        Mail::to($request->input('email'))->send(new SendMail($data));

    	return redirect('dangkinoitru')->with('notification', 'Đăng kí thành công !');	
    }
}
