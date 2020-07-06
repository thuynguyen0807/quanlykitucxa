<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Relative;
use App\Students;

class RelativeController extends Controller
{

	public function getList() {
		$relative = Relative::all();
		return view('admin.relative.relativeList', ['relative'=>$relative]);
	}

    public function getAdd() {
    	return view('admin.relative.addRelative');
    }

    public function postAdd(Request $request) {
    	$rl = new Relative;
    	$rl->id=$request->id;
    	$rl->fullname_rl=$request->fullname_rl;
    	$rl->birthday=$request->birthday;
    	$rl->id_student=$request->id_student;
    	$rl->phone1=$request->phone1;
    	$rl->address=$request->address;
    	$rl->phone2=$request->phone2;
    	$rl->relationship=$request->relationship;
		$rl->save();
    	return redirect('admin/relative/')->with('notification', 'Thêm thông tin người thân thành công !');	
    } 

    public function getEdit($id) {
    	$rl = Relative::where('id', $id)->get()->first();
    	return view('admin.relative.editRelative', ['rl'=>$rl]);
    }

    public function postEdit(Request $request, $id) {
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
    	return redirect('admin/relative/')->with('notification', 'Sửa thông tin người thân thành công !');
    }

    public function getDelete($id) {
    	$rl = Relative::find($id);
    	$rl->delete();
    	return redirect('admin/relative/')->with('notification', 'Xóa thông tin người thân thành công !');
    }

    public function students(Request $request, $id) {

        // $id = $request->route('id');
        $student = Students::find($id);
        return view('admin.relative.sinhvien', ['student'=>$student]);
       
    }
}
