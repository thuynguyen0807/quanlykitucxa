<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Students;
use App\Relative;
use App\Room;
use App\Bed;
class StudentController extends Controller
{

    public function test() {
        $students = Students::all();
        foreach ($students as $st) {
            echo $st->fullname . "<br>";
        }
    }

    public function getList() {
    	$student = Students::all();
    	return view('admin.students.studentList', ['student'=>$student]);
    }

    public function getAdd() {
    	return view('admin.students.addStudent');
    }

    public function postAdd(Request $request) {

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
        $st->id_bed = $request->id_bed;
        $st->save();
        
    	return redirect('admin/students/')->with('notification', 'Thêm thông tin sinh viên thành công !');	
    }
    public function getEdit($id) {
    	
        $student = Students::where('id', $id)->get()->first();
        return view('admin.students.editStudent', ['student'=>$student]);
    }


    public function postEdit(Request $request, $id) {
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
    	return redirect('admin/students/')->with('notification', 'Sửa thông tin sinh viên thành công !');
    }

    public function getDelete($id) {
        $st = Students::find($id);
        $st->delete();
    	return redirect('admin/students/')->with('notification', 'Xóa thông tin sinh viên thành công !');
    }

    public function relative(Request $request, $id) {

        // $id = $request->route('id');
        $relative = Relative::find($id);
        return view('admin.students.nguoithan', ['relative'=>$relative]);
    }

    public function room(Request $request, $id) {
        $room = Room::find($id);
        $bed = Bed::all();
        return view('admin.students.phong', ['room'=>$room, 'beds'=>$bed]);
    }

    
}
