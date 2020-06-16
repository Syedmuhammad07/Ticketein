<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Event;
Use App\Hallmap;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
          return view('createEvents');
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'name'=>'required',
            'description'=>'required',
            'date'=>'required',
            'time'=>'required',
            'tickets'=>'required'
        ));

    $event = new Event();
    $event->name = $request->name;
    $event->description = $request->description;
    $event->date = $request->date;
    $event->time = $request->time;
    $event->tickets = $request->tickets;
    $event->save();

    Session::flash('message.level','success');
    Session::flash('message.content','Event Created Succesfully. You can view it on Events page');
    return redirect()->route('createevent');
    }

}
