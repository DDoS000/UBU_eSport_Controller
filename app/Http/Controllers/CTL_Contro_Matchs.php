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
        $this->validate($request, ['TeamA' => 'required', 'TeamB' => 'required', 'scoret1' => 'required', 'scoret2' => 'required', 'tid' => 'required']);
        $Teams = new Contro_Matchs(
            [
                'tid' => $request->get('tid'),
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
        $Teams = DB::table('contro__matchs')->where('tid', $tid)->get()->toArray();
        if (count($Teams) == 0) {
            $Teams = DB::table('contro__matchs')->where('tid', 'Default')->get()->toArray();
            $Teams = $Teams[0];
        } else {
            $Teams = $Teams[0];
            // dd($Teams);
        }

        $games = DB::table('tournaments')->where('tid', $tid)->get();
        $Team_names = explode(",", $games[0]->Team_name);
        return view('Contro_Match', compact('games', 'Teams', 'tid', 'Team_names'));
    }

    public function api($tid)
    {
        $games = DB::table('contro__matchs')->where('tid', $tid)->get();
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
        return response()->xml($data);
    }

    public function inGame($tid)
    {
        return view('ROV.inGame', compact('tid'));
    }

    public function Ban($tid)
    {
        return view('ROV.Ban', compact('tid'));
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
    public function update(Request $request, $tid)
    {
        $this->validate($request, ['TeamA' => 'required', 'TeamB' => 'required', 'scoret1' => 'required', 'scoret2' => 'required', 'tid' => 'required']);

        // $Teams = DB::table('contro__matchs')->where('tid', $tid)->get();
        // $Teams = DB::update(('contro__matchs')->where('tid', $tid)->get();)


        $TeamA = $request->get('TeamA');
        $TeamB = $request->get('TeamB');
        $scoret1 = $request->get('scoret1');
        $scoret2 = $request->get('scoret2');

        $data = DB::update('update contro__matchs set TeamA=?, TeamB=?, scoret1=?, scoret2=? where tid=?',
        [$TeamA, $TeamB, $scoret1, $scoret2, $tid]);

        return back()->withInput()->with('success', 'บันทึกข้อมูลเรียบร้อย');
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
