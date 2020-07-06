<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\manage;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testModel', 'StudentController@test');

//test QR code -----------------------------------------------------------------

Route::get('qrcode', function() {
    return QrCode::size(300)->generate('A basic example of QR code !');
});

Route::get('/qrcode-with-color', function() {
    return QrCode::size(300)->backgroundColor(225, 55, 0)->generate('A basic example of QR code !');
});

Route::get('/qrcode-with-image', function() {
    $image = QrCode::format('png')->Merge('img/thuythanh.png', 0.5, true)->size(300)->errorCorrection('H')->generate('A basic example of QR code !');
    return response($image)->header('Content-type', 'image/png');
});

Route::get('/qrcode-with-email', function() {
    return QrCode::size(500)->email('thuynguyen1212112.tn@gmail.com', 'A basic example of QR code !', 'This is ... !');
});

Route::get('/qrcode-with-phone', function() {
    return QrCode::size(300)->phoneNumber('0326464305');
});

Route::get('/qrcode-with-message', function() {
    return QrCode::size(300)->SMS('0326464305', 'Xin chao Nguyen Thi Thanh Thuy');
});

//Ajax--------------------------------------------


//Quản lý kí túc xá -----------------------------------------------------------------

Route::get('/', function() {
    return view('kitucxa.kitucxa');
});

Route::get('dangnhap', function() {
    return view('admin.dangnhap');
});
Route::post('dangnhap', 'Authcontroller@login')->name('dangnhap');

Route::get('/dangkiquantrivien', 'AdminController@getDangKi');
Route::post('/dangkiquantrivien/hh', 'AdminController@postDangKi');

Route::get('/dangkinguoidung', 'UserController@getDangKi');
Route::post('/dangkinguoidung/hh', 'UserController@postDangKi');

Route::get('admin/dangnhap', 'AdminController@getDangNhap');
Route::post('admin/dangnhap', 'AdminController@postDangNhap');

Route::get('/danhsachdiennuoc', 'DanhSachDienNuocController@danhsachdiennuoc');

Route::get('/dangkinoitru', 'DangKiController@getDangki');
Route::post('/dangkinoitru', 'DangKiController@postDangKi');

Route::get('/ajax/room/{idCategoryRoom}', 'AjaxController@getRoom');

Route::get('/ajax/bed/{idCategoryRoom}', 'AjaxController@getBed');

Route::group(['prefix'=>'user'], function() {
    Route::get('/trangchu', 'UserController@trangchu');
    Route::get('/thongtin/{id}', 'UserController@thongtin');
    Route::get('/nguoithan/{id}', 'UserController@nguoithan');
    Route::get('/dangxuat', 'UserController@dangxuat');
    Route::get('thongtin/sua/{id}', 'UserController@getSuaThongTin');
    Route::post('thongtin/sua/{id}', 'UserController@postSuaThongTin');
    Route::get('nguoithan/sua', 'UserController@getSuaNguoiThan');
    Route::post('nguoithan/sua/{id}', 'UserController@postSuaNguoiThan');
});

Route::group(['prefix'=>'admin'], function() {

    Route::get('/quanlykitucxa', function() {
        return view('admin.layouts.trangchu');
    });

    Route::group(['prefix' => 'diennuoc'], function() {
        
        Route::get('/hoadondiennuoc/{id}', 'DienNuocController@hoadondiennuoc');

        Route::get('/', 'DienNuocController@danhsachdiennuoc');

        Route::get('/nhapsodiennuoc', 'DienNuocController@getNhapSoDienNuoc');
        Route::post('/nhapsodiennuoc', 'DienNuocController@postNhapSoDienNuoc');

        Route::get('/suathongtindiennuoc/{id}', 'DienNuocController@getSua');
        Route::post('/suathongtindiennuoc/{id}', 'DienNuocController@postSua');

        Route::get('xoathongtindiennuoc/{id}', 'DienNuocController@getXoa');

    });

    Route::group(['prefix' => 'students'], function() {
        Route::get('/', 'StudentController@getList');

        Route::get('/addStudent', 'StudentController@getAdd');
        Route::post('/addStudent', 'StudentController@postAdd');

        Route::get('/editStudent/{id}', 'StudentController@getEdit');
        Route::post('/editStudent/{id}', 'StudentController@postEdit');

        Route::get('/nguoithansinhvien/{id}', 'StudentController@relative');

        Route::get('/phong/{id}', 'StudentController@room');

        Route::get('/deleteStudent/{id}', 'StudentController@getDelete');

        Route::get('/room/bed/');
    });

    Route::group(['prefix' => 'room'], function() {
        Route::get('/', 'RoomController@getList');

        Route::get('/addRoom', 'RoomController@getAdd');
        Route::post('/addRoom', 'RoomController@postAdd');

        Route::get('/editRoom/{id}', 'RoomController@getEdit');
        Route::post('/editRoom/{id}', 'RoomController@postEdit');

        Route::get('/deleteRoom/{id}', 'RoomController@getDelete');

        Route::get('/sinhvien/{id}', 'RelativeController@students');

        Route::get('/bed/{id}', 'RoomController@bed');

    });

    Route::group(['prefix' => 'bed'], function() {
        Route::get('/', 'BedController@bedList');

        Route::get('/addBed', 'BedController@getAdd');
        Route::post('/addBed', 'BedController@postAdd');

        Route::get('/editBed/{id}', 'BedController@getEdit');
        Route::post('/editBed/{id}', 'BedController@postEdit');

        Route::get('/deleteBed/{id}', 'BedController@getDelete');

    });

    Route::group(['prefix' => 'relative'], function() {
        Route::get('/', 'RelativeController@getList');


        Route::get('/addRelative', 'RelativeController@getAdd');
        Route::post('/addRelative', 'RelativeController@postAdd');

        Route::get('/editRelative/{id}', 'RelativeController@getEdit');
        Route::post('/editRelative/{id}', 'RelativeController@postEdit');

        Route::get('/sinhvien/{id}', 'RelativeController@students');
        // ->where('id', '[0-9]+');

        Route::get('/nguoithansinhvien', 'StudentController@relative');

        // admin/relative/sinhvien => lấy danh sách 
        // admin/students/nguoithansinhvien/{id} => để lấy thông tin của người thân đó
        Route::get('/sinhvien', 'StudentController@students');

        Route::get('/deleteRelative/{id}', 'RelativeController@getDelete');
    });

    Route::group(['prefix' => 'equipments'], function() {
        Route::get('/equipmentList', 'EquipmentController@getList');

        Route::get('/addEquipment', 'EquipmentController@getAdd');

        Route::get('/editEquipment', 'EquipmentController@getEdit');
    });

    Route::group(['prefix' => 'employees'], function() {
        Route::get('/employeeList', 'EmployeeController@getList');

        Route::get('/addEmployee', 'EmployeeController@getAdd');

        Route::get('/editEmployee', 'EmployeeController@getEdit');
    });

});


?>

