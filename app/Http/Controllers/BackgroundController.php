<?php

namespace App\Http\Controllers;

use App\Models\Background;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BackgroundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $background = Background::all();
        return view ("backoffice.background.all", compact("background"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.background.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $background = new Background();
        Storage::disk("public")->delete("img/"  . $background->img);
        $background->img = $request->file("img")->hashName();
        $background->text = $request->text;
        $background->save();
        $request->file("img")->storePublicly("img", "public");

        return redirect()->route("background.index")->with("messageC", "Created");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Background  $background
     * @return \Illuminate\Http\Response
     */
    public function show(Background $background)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Background  $background
     * @return \Illuminate\Http\Response
     */
    public function edit(Background $background)
    {
        return view("backoffice.background.edit", compact("background"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Background  $background
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Background $background)
    {
        Storage::disk("public")->delete("img/"  . $background->img);
        $background->img = $request->file("img")->hashName();
        $background->text = $request->text;
        $background->save();
        $request->file("img")->storePublicly("img", "public");

        return redirect()->route("background.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Background  $background
     * @return \Illuminate\Http\Response
     */
    public function destroy(Background $background)
    {
        $background->delete();
        return redirect()->back()->with("messageD", "Deleted");
    }
}
