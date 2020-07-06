<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Room;
use App\Bed;
use App\Students;

class AjaxController extends Controller
{
    public function getRoom($category_room) {
        $room = Room::where('category_room', $category_room)->get();

        foreach ($room as $r) {
            echo "<option values = '". $r->id ."'>". $r->id . "</option>";
        }
    }

    public function getBed($id_room) {
        $bed = Bed::where('id_room', $id_room)->get();
        $giuong = Students::where('id_room' , $id_room)->get(); 
        $arr=[];
        $kt =1;
        $i=0;
        foreach ($bed as $b) {
            $i++;
            foreach ($giuong as $g) {
                if ($b->id == $g->id_bed) {
                    $kt=0;
                    break;
                }
                else{
                    $kt=1;
                }
            }
            if ($kt != 0) {
                $arr[$i] = $b;
            }
            
        }
        foreach ($arr as $ar) {
            echo "<option values = '". $ar->id ."'>". $ar->id . "</option>";
        }
    }
}
