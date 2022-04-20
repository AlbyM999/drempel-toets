<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\reservation;

class reservationsController extends Controller
{
    public function create(Request $request){
        reservation::create([
            'room_id'=>$request->room_id,
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'phone_number'=>$request->phone_number,
            'city'=>$request->city,
            'street'=>$request->street,
            'postal_code'=>$request->postal_code,
            'start'=>$request->start,
            'end'=>$request->end,
        ]);

        return response()->json('Event stored');
    }
    public function update(Request $request, reservation $id){
        reservation::where('id',$id)->update([
            'room_id'=>$request->room_id,
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'phone_number'=>$request->phone_number,
            'city'=>$request->city,
            'street'=>$request->street,
            'postal_code'=>$request->postal_code,
            'start'=>$request->start,
            'end'=>$request->end,
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
    public function checkDate($start,$end)
    {
        $EventData = reservation::where('start',$start)
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
