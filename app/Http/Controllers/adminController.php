<?php

namespace OCOB\Http\Controllers;

use Illuminate\Http\Request;
use OCOB\ocob_Batting;
use OCOB\Http\Requests;
use OCOB\Http\Controllers\Controller;

class adminController extends Controller
{

    public function get_New_Player()
    {
        return view('admin.create_new_player');
    }

    public function get_Admin()
    {
        return view('admin.admin');
    }

   public function create_new_player(Request $request)
   {
    $player = new ocob_Batting;

    $player->player = $request->input('player_name');

    $player->save();

        return redirect('/createNewPlayer');
   }

   public function update_stats(Request $request)
   {

    $id = $request->input('id');

    $player = ocob_Batting::Find($id);
    $player->matches += 1;
    

    $player->runs += $request->input('runs');

    $player->save();
    return redirect('/admin');


   }
   public function get_All_Stats()
   {

        $players = ocob_Batting::all();

        return view('individual_stats',compact('players'));

   }



}
