<?php

namespace App\Http\Controllers;

use App\Models\Worker;

use Illuminate\Http\Request;

class WorkerController extends Controller
{
    // function for adding a new worker
    function AddWorker(Request $request){
        $Worker = new Worker;
        $Worker->name=$request->name;
        $Worker->email=$request->email;
        $Worker->phone=$request->phone;
        $Worker->save();
        if($Worker){
            return redirect('/getworker');
        }
    }

    // function for getting database Data
    function GetWorkers(){
        $workers=Worker::all();
        return view('/getworker',['Workers'=>$workers]);
    }

    // function for edit worker
    function EditWorker($id){
        $worker=Worker::find($id);
        return view('editworker',['workers'=>$worker]);
    }
    // function for update Worker Data
    function Update(Request $request, $id){
        $worker =Worker::find($id);
        $worker->name=$request->name;
        $worker->email=$request->email;
        $worker->phone=$request->phone;
        $worker->save();
        if($worker){
            return redirect ('/getworker');
        }
    }

    // function for the deletion of worker
    function DeleteWorker($id){
        $worker =Worker::destroy($id);
        if($worker){
            return redirect('/getworker');
        }
    }
}