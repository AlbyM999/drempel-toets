<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\Models\room;

class roomsController extends Controller
{
    public function create(Request $request){
        room::create([
            'room_number'=>$request->room_number,
            'name'=>$request->name,
            'image_path'=>$request->image_path,
            'description'=>$request->description,
        ]);

        return response()->json('Event stored');
    }
    public function update(Request $request, room $id){
        room::where('id',$id)->update([
            'room_number'=>$request->room_number,
            'name'=>$request->name,
            'image_path'=>$request->image_path,
            'description'=>$request->description,
        ]
        );
    }
    public function read(){

        $RoomData = room::orderBy('id')
            ->get()
            ->toArray();

        return response()->json($RoomData);

    }
    public function show($id)
    {
        $EventData = room::where('id',$id)
            ->get()
            ->toArray();
        return response()->json($EventData);
    }
    public function delete(Request $request,room $id){
        $id->delete();

        return response()->json('room has been deleted');
    }
}
