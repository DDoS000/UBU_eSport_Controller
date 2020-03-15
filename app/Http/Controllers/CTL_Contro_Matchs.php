<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Contro_Matchs;

class CTL_Contro_Matchs extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Contro_Matchs::truncate();
        $this->validate($request, ['TeamA' => 'required', 'TeamB' => 'required', 'scoret1' => 'required', 'scoret2' => 'required']);
        $Teams = new Contro_Matchs(
            [
                'TeamA' => $request->get('TeamA'),
                'TeamB' => $request->get('TeamB'),
                'scoret1' => $request->get('scoret1'),
                'scoret2' => $request->get('scoret2')

            ]
        );
        $Teams->save();
        // return view('Contro_Match')->with('success','บันทึกข้อมูลเรียบร้อย');
        return back()->withInput()->with('success', 'บันทึกข้อมูลเรียบร้อย');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($tid)
    {
        $games = DB::table('tournaments')->where('tid', $tid)->get();
        return view('Contro_Match', compact('games'));
    }

    public function api($tid)
    {
        $games = DB::table('contro__matchs')->get();
        $data = [
            'Team1' => $games[0]->TeamA,
            'Team2' => $games[0]->TeamB,
            'score1' => $games[0]->scoret1,
            'score2' => $games[0]->scoret2,
            'match' => 'Match',
            'game' => '1',
            'upSpeed' => '10000',
            'inSpeed' => '2000',
            'outSpeed' => '1000',
            'visible' => 'true',
            'time' => Str::random(10),
        ];
        // $data = [
        //     'Team1' => 'DDoS',
        //     'Team1A' => '',
        //     'Team1B' => '',
        //     'Team2' => 'Tan',
        //     'Team2A' =>  '',
        //     'Team2B ' => '',
        //     'score1' => 0,
        //     'score1A' => 0,
        //     'score1B' => '',
        //     'score2' => 20,
        //     'score2A' => 0,
        //     'score2B' => '',
        //     'match' => 'Match',
        //     'matchA' => '',
        //     'matchB' => '',
        //     'game' => '2',
        //     'gameA' => '',
        //     'gameB' => '',
        //     'visible' => true ,
        //     'time' => 56651665161,
        // ];
        // $data = [
        //     'Team1' => 'DDoS',

        //     'Team2' => 'Tan',

        //     'score1' => 0,

        //     'score2' => 20,

        //     'match' => 'Match',

        //     'game' => '2',

        //     'visible' => true ,
        //     'time' => 5165161616,
        // ];
        return response()->xml($data);
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
    }
}
