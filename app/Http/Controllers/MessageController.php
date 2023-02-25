<?php

namespace App\Http\Controllers;
use App\Models\msg;
use Illuminate\Http\Request;


class MessageController extends Controller
{



    public function addMessage(Request $req, $id){
        $data = msg::find($id);
        //return $data;
        if($data){
            $data->added_by = $req->added_by;
            $data->remarks = $req->remarks;
            $data->time = $req->time;
            $data->push();
            return redirect()->route('Dashboard');
        }else{
            $newData = new msg;
            $newData->acc_id = $id;
            $newData->added_by = $req->added_by;
            $newData->remarks = $req->remarks;
            $newData->time = $req->time;
            $newData->save();
            return redirect()->route('Dashboard');
        }
    }
}
