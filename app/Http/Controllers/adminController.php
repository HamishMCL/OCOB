<?php

namespace OCOB\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use OCOB\ocob_Batting;
use OCOB\ocob_Bowling;
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
         $players = ocob_Batting::all();

        return view('admin.admin',compact('players'));
    }

    public function get_bowling()
    {
        $players = ocob_Batting::all();

        return view('admin.bowling',compact('players'));
    }



    public function get_stats()
    {
        $sixes = DB::table('ocob_batting')->orderBy('sixs', 'DESC')->take(5)->get();
        $runs = DB::table('ocob_batting')->orderBy('runs', 'DESC')->take(5)->get();
        $average = DB::table('ocob_batting')->orderBy('average', 'DESC')->take(5)->get();
        $wickets = DB::table('ocob_Bowling')->orderBy('wickets', 'DESC')->take(5)->get();
        $highestscore = DB::table('ocob_batting')->orderBy('highest_score', 'DESC')->take(5)->get();
       

        return view('stats',compact('sixes','runs','average','wickets','highestscore'));
    }





   public function create_new_player(Request $request)
   {
    $batter = new ocob_Batting;
    $bowler = new ocob_Bowling;

    $batter->player = $request->input('player_name');

    $bowler->player = $request->input('player_name');

    $batter->save();
    $bowler->save();

        return redirect('/createNewPlayer');
   }



   public function update_batting(Request $request)
   {

    $id = $request->input('id');
    
    $player = DB::table('ocob_batting')->where('player', $id)->first();
    $player->matches +=1;

    $player->runs += $request->input('runs');
    $player->sixs += $request->input('sixes');
    $player->fours += $request->input('fours');
  
    $runs = $request->input('runs');

    //Player has played a match and not batted
    // if($request->input('runs') == null && $request->input('sixes') == null && $request->input('fours')  )
    // {
    //     $player->matches +=1;
    // }





    //Working
    if($runs > $player->highest_score)
    {
            if($request->input('out') == 0 )
            {
                $player->highest_score =  $runs."*";
            }else
            {
                $player->highest_score =  $runs;
            }
    }

 
    //Working
    if(($runs >= 50)  && ($runs <= 99 ))
    { 
        $player->fiftys +=1;
    }
    else if( $runs >=100)
    {
        $player->hunds +=1;
    }

    //working
       


//Not working
    if($runs == 0 && $request->input('out') == 1)
    {
        
        $player->ducks +=1;
    }


    if($runs != null)
    {
        $player->innings +=1;
    }
    

    if($request->input('out') == 1)
    {
     
        $player->outs +=1;
       
    }

      if($request->input('out') != 1)
    {
     
        // $player->no +=1;
       
    }

   if($player->outs > 0)
   {
    $playerruns = $player->runs;
    $playerouts = $player->outs;
    $average =  $playerruns / $playerouts;
    $player->average = $average;
    }
    else
    {
    }

    DB::table('ocob_batting')
    ->where('player', $id)
    ->update(['matches'=> $player->matches,'innings'=>$player->innings,'no'=>$player->no,'runs'=>$player->runs,'average' => $player->average
        ,'highest_score' => $player->highest_score,'hunds' => $player->hunds,'fiftys' => $player->fiftys,'ducks' => $player->ducks,
        'fours' => $player->fours,'sixs' => $player->sixs, 'outs' => $player->outs]);



    return redirect('/admin');




   } 
   public function update_bowling(Request $request)
   {
   
    $id = $request->input('id');
    
    $player = DB::table('ocob_Bowling')->where('player', $id)->first();


    $player->matches +=1;
    $player->innings += 1;
    if($request->input('wickets') >= 5)
    {
    $player->fivefas += 1;
    }
    $player->catches += $request->input('catches');
  

    $player->wickets += $request->input('wickets');
    $player->overs += $request->input('overs');
    $player->maidens += $request->input('maidens');
    $player->runs += $request->input('runs');

    $player->average = $player->runs / $player->wickets;
    $player->econ = $player->runs / $player->overs;
    $player->sr = $player->overs * 6 / $player->wickets;

    

    DB::table('ocob_Bowling')
    ->where('player', $id)
    ->update(['matches'=> $player->matches,'innings'=>$player->innings,'overs'=>$player->overs,'maidens'=>$player->maidens,'runs' => $player->runs
        ,'wickets' => $player->wickets,'bbi' => $player->bbi,'average' => $player->average,'econ' => $player->econ,
        'sr' => $player->sr,'fivefas' => $player->fivefas,'catches'=> $player->catches]);

     
    return redirect('/bowling');


   }
   public function get_All_Stats()
   {

        $batters = ocob_Batting::all();
        $bowlers = ocob_Bowling::all();
     
        return view('individual_stats',compact('batters', 'bowlers'));

   }



}
