<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::all();
        return view("backoffice.event.all", compact("event"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.event.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "text"=>['required'],
            "name"=>['required'],
            "date"=>['required'],
        ]);
        $event = new Event();
        $event->name = $request->name;
        $event->text = $request->text;
        $event->place = "0";
        $event->date = $request->date;
        $event->hour = $request->hour;
        $event->save();
        return redirect()->route("event.index")->with("message", "Done! ");    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view("backoffice.event.edit", compact("event"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            "text"=>['required'],
            "name"=>['required'],
            "date"=>['required'],
        ]);
        $event->name = $request->name;
        $event->text = $request->text;
        $event->date = $request->date;
        $eventall = Event::all();
        foreach ($eventall as $item){
            $item->place = 0;
            $item->save();
    
    }
        $event->place = $request->place;
        $event->hour = $request->hour;
        $event->save();
        return redirect()->route("event.index")->with("message", "Done! ");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route("event.index");
        
    }
}
