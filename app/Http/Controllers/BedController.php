<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bed;

class BedController extends Controller
{

	public function bedList() {
    	$bed= Bed::all();
    	return view('admin.bed.bedList', ['beds'=>$bed]);
    }

    public function getAdd() {
    	return view('admin.bed.addBed');
    }

    public function postAdd(Request $request) {
    	$bed = new Bed;
    	$bed->id = $request->id_room . $request->id;
    	$bed->id_room = $request->id_room;
    	$bed->save();

    	return redirect('admin/bed/')->with('notification', 'Thêm giường thành công !');
    }

    public function getEdit($id) {
    	$bed = Bed::where('id', $id)->get()->first();
    	return view('admin/bed/editBed', ['bed'=>$bed]);
    }

    public function postEdit(Request $request, $id) {

    	$bed = Bed::find($id);
    	$bed->id = $request->id_room . $request->id;
    	// $bed->id_student = $request->id_student;
    	// $bed->fullname = $request->fullname;
    	$bed->id_room = $request->id_room;
    	$bed->save();
    	return redirect('admin/bed/')->with('notification', 'Sửa thông tin phòng thành công !');
    }

    public function getDelete($id) {
    	$bed = Bed::find($id);
    	$bed->delete();
    	return redirect('admin/bed/')->with('notification', 'Xóa thông tin phòng thành công !');
    }



}
