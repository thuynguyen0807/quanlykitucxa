<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

use App\Room;
use App\Bed;


class RoomController extends Controller
{
    public function getList() {
    	$room = Room::all();
        $bed = Bed::all();
    	return view('admin/room/roomList', ['room'=>$room, 'beds'=>$bed]);
    }

    public function getAdd() {
    	return view('admin/room/addRoom');
    }

    public function postAdd(Request $request) {
    	$room = new Room;

    	$room->id = $request->id;
    	$room->number_student = $request->number_student;
        $room->current_student = $request->current_student;
    	$room->category_room = $request->category_room;
    	$room->equipment = $request->equipment;
    	$room->room_price = $request->room_price;
        // $room->id_bed = $request->id_bed;
    	$room->save();
    	return redirect('admin/room/')->with('notification', 'Thêm thông tin phòng thành công !');
    }

    public function getEdit($id) {
    	$room = Room::where('id', $id)->get()->first();
    	return view('admin/room/editRoom', ['room'=>$room]);
    }

    public function postEdit(Request $request, $id) {

    	$room = Room::find($id);
    	$room->id = $request->id;
    	$room->number_student = $request->number_student;
        $room->current_student = $request->current_student;
    	$room->category_room = $request->category_room;
    	$room->equipment = $request->equipment;
    	$room->room_price = $request->room_price;
        // $room->id_bed = $request->id_bed;
    	$room->save();
    	return redirect('admin/room/')->with('notification', 'Sửa thông tin phòng thành công !');
    }

    public function getDelete($id) {
    	$room = Room::find($id);
    	$room->delete();
    	return redirect('admin/room/')->with('notification', 'Xóa thông tin phòng thành công !');
    }

    public function bed($id) {
        $bed = Bed::find($id);
        return view('admin.room.giuong', ['bed'=>$bed]);
    }

}
