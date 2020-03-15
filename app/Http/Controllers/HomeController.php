<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tournament;
use App\User;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $game = DB::table('tournaments')->where('user_id',$user_id)->get();
        return view('home', compact('game'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'Team_name' => 'required',
            'Tournament_Name' => 'required',
            'Tournament_Details' => 'required',
            'Tournament_Date' => 'required',
            'Game_name' => 'required',
            'Game_rules' => 'required',
            'Game_format' => 'required'
        ]);
        $game_control = new Tournament;
        $game_control->tid = (Str::random(10));
        $game_control->Team_name = $request->input('Team_name');
        $game_control->Tournament_Name = $request->input('Tournament_Name');
        $game_control->Tournament_Details = $request->input('Tournament_Details');
        $game_control->Tournament_Date = $request->input('Tournament_Date');
        $game_control->Game_name = $request->input('Game_name');
        $game_control->Game_rules = $request->input('Game_rules');
        $game_control->Game_format = $request->input('Game_format');
        $game_control->user_id = auth()->user()->id;
        $game_control->save();
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
