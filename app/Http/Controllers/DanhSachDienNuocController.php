<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

use\PDF;
use App\DienNuoc;
use Carbon\Carbon;

class DanhSachDienNuocController extends Controller
{
    
    public function hoadondiennuoc(Request $request, $id) {
        // Lấy danh sách đã nhập
        $diennuoc = DienNuoc::find($id);
        if ($id <= 1) {
            $diennuoc['chi_so_dien_dau'] = 0;
            $diennuoc['chi_so_nuoc_dau'] = 0;
        } else {
            $diennuoc['chi_so_dien_dau'] = $diennuoc[''];
            $diennuoc['chi_so_nuoc_dau'] = $diennuoc[''];
        }
        $diennuoc['tiendien'] = ($diennuoc->sodiencuoi - $diennuoc->chi_so_dien_dau)*$diennuoc->giadien;
        $diennuoc['tiennuoc'] = ($diennuoc->sonuoccuoi - $diennuoc->chi_so_nuoc_dau)*$diennuoc->gianuoc;
    
        // Lấy thời gian hiện tại

        $dt  = Carbon::now('Asia/Ho_Chi_Minh');
        $time_to_show = $dt->format(" jS \\ F \\ Y"); 
        // Export pdf file 
        $data = ['title'=> 'Test export pdf file'];
        $pdf = PDF::loadView('admin.diennuoc.hoadondiennuoc', $data, ['diennuoc'=>$diennuoc, 'ngaynop'=>$time_to_show]);
        return $pdf->download('Hóa đơn điện nước');
    }

    public function danhsachdiennuoc() {
        $diennuoc = DienNuoc::all();

        foreach ($diennuoc as $index => $value) {
            if ($index == 0){
                $value['chi_so_dien_dau'] = 0;
                $value['chi_so_nuoc_dau'] = 0;
            } else {
                $value['chi_so_dien_dau'] = $diennuoc[$index-1]->sodiencuoi;
                $value['chi_so_nuoc_dau'] = $diennuoc[$index-1]->sonuoccuoi;;
            }

            $value['tiendien'] = ($value->sodiencuoi - $value->chi_so_dien_dau)*$value->giadien;
            $value['tiennuoc'] = ($value->sonuoccuoi - $value->chi_so_nuoc_dau)*$value->gianuoc;
        }


        return view('kitucxa.danhsachdiennuoc', ['diennuoc'=>$diennuoc]);
    }

    public function getNhapSoDienNuoc() {
        return view('admin.diennuoc.nhapsodiennuoc');
    }
    public function postNhapSoDienNuoc(Request $request) {

        $dn = new DienNuoc;

        $dn->id = $request->id;

        $dn->id_room = $request->id_room;

        $dn->sodiencuoi = $request->sodiencuoi;

        $dn->giadien = $request->giadien;

        $dn->sonuoccuoi = $request->sonuoccuoi;

        $dn->gianuoc = $request->gianuoc;

        $dn->thoigian = $request->thoigian;

        $dn->save();
//----------------------------------------------------------------------

        return redirect('admin/diennuoc/nhapsodiennuoc')->with('notification', 'Nhập số điện nước thành công !');
    }

    public function getSua($id) {

        $diennuoc = DienNuoc::where('id', $id)->get()->first();
        return view('admin/diennuoc/sua', ['dn'=>$diennuoc]);
    }

    public function postSua(Request $request, $id) {
        $dn = DienNuoc::find($id);

        $dn->id = $request->id;
        
        $dn->id_room = $request->id_room;

        $dn->sodiencuoi = $request->sodiencuoi;

        $dn->giadien = $request->giadien;

        $dn->sonuoccuoi = $request->sonuoccuoi;

        $dn->gianuoc = $request->gianuoc;

        $dn->thoigian = $request->thoigian;

        $dn->save();

        return redirect('admin/diennuoc/danhsachdiennuoc')->with('notification', 'Sửa thông tin điện nước thành công !');

    }

    public function getXoa($id) {
        $dn = DienNuoc::find($id);
        $dn->delete();
        return redirect('admin/diennuoc/danhsachdiennuoc')->with('notification', 'Xóa thông tin điện nước thành công');
    }
}
