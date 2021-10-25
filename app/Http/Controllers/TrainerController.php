<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = Trainer::all();
        return view("backoffice.trainer.all", compact("trainers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.trainer.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trainer = new Trainer();
        $trainer->name = $request->name;
        $trainer->img = $request->file("img")->hashName();
        $trainer->url1 = $request->url1;
        $trainer->url2 = $request->url2;
        $trainer->url3 = $request->url3;
        $trainer->url4 = $request->url4;
        $trainer->save();
        $request->file("img")->storePublicly("img", "public");
        return redirect()->route("trainer.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {
        return view("backoffice.trainer.show", compact("trainer"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        return view("backoffice.trainer.edit", compact("trainer"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        $trainer->name = $request->name;
        $trainer->img = $request->file("img")->hashName();
        $trainer->url1 = $request->url1;
        $trainer->url2 = $request->url2;
        $trainer->url3 = $request->url3;
        $trainer->url4 = $request->url4;
        $trainer->save();
        $request->file("img")->storePublicly("img", "public");
        return redirect()->route("trainer.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainer $trainer)
    {
        $trainer->delete();
        return redirect()->route("trainer.index");
    }
}
