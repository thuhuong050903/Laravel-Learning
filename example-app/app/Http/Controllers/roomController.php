<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use App\Http\Requests\RoomRequest;
use App\Models\CreateRoom;

class RoomController extends Controller
{
    public function create() {

        // $rooms = Room::all();
        return view('rooms.create');
    }

    public function store(Request $request){
        // Kiểm tra xem dữ liệu từ client gửi lên bao gốm những gì
        // dd($request);

        // gán dữ liệu gửi lên vào biến data
        $data = $request->all();
        // dd($data);
        // mã hóa password trước khi đẩy lên DB

        // Tạo mới user với các dữ liệu tương ứng với dữ liệu được gán trong $data
        Room::create($data);

        return view('rooms.create') -> with('data',$data);
    }
    

}
