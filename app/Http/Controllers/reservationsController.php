<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\models\reservation;

class reservationsController extends Controller
{
    public function create(Request $request){
        reservation::create([
            'room_number'=>$request->room_number,
            'name'=>$request->name,
            'image_path'=>$request->image_path,
            'description'=>$request->description,
        ]);

        return response()->json('Event stored');
    }
    public function update(Request $request, reservation $id){
        reservation::where('id',$id)->update([
            'room_number'=>$request->room_number,
            'name'=>$request->name,
            'image_path'=>$request->image_path,
            'description'=>$request->description,
        ]
        );
    }
    public function read(){

        $RoomData = reservation::orderBy('id')
            ->get()
            ->toArray();

        return response()->json($RoomData);

    }
    public function show($id)
    {
        $EventData = reservation::where('id',$id)
            ->get()
            ->toArray();
        return response()->json($EventData);
    }
    public function showOnRoom($id)
    {
        $EventData = reservation::where('room_id',$id)
            ->get()
            ->toArray();
        return response()->json($EventData);
    }
    public function delete(Request $request,reservation $id){
        $id->delete();

        return response()->json('room has been deleted');
    }
}
