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

    public function batting_stats()
    {
        $batters = ocob_Batting::all();

        return view('batting-stats',compact('batters'));
    }


      public function bowling_stats()
    {
        $bowlers = ocob_Bowling::all();

        return view('bowling-stats',compact('bowlers'));
    }

    public function get_Admin()
    {
        return view('admin.admin');
    }

    public function get_batting()
    {
         $players = ocob_Batting::all();

        return view('admin.batting',compact('players'));
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
        $highestscore = DB::table('ocob_batting')->orderBy('highest_score', 'DESC')->take(6)->get();

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



    //Working
    if($runs > $player->highest_score)
    {
            if($request->input('out') == 0 )
            {
                $player->highest_score =  $runs+"*";
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

      if($request->input('out') == 0 && $runs != null)
    {
     
         $player->no +=1;
       
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



    return redirect('/batting');




   } 
   public function update_bowling(Request $request)
   {
   
    $id = $request->input('id');
    
    $player = DB::table('ocob_Bowling')->where('player', $id)->first();

    $wickets =  $request->input('wickets');
    $runs =  $request->input('runs');

    $player->matches +=1;
    if($request->input('overs') >=1)
    {
    $player->innings += 1;
    }
    if($request->input('wickets') >= 5)
    {
    $player->fivefas += 1;
    }
    $player->catches += $request->input('catches');
  

    $player->wickets += $request->input('wickets');
    $player->overs += $request->input('overs');
    $player->maidens += $request->input('maidens');
    $player->runs += $request->input('runs');
    if($player->wickets >= 1 && $player->runs >= 1)
    {
         $player->average = $player->runs / $player->wickets;
    }
   
   if($player->overs >=1 && $player->runs >=1)
   {
    $player->econ = $player->runs / $player->overs;
    }
    if($player->wickets >= 1)
    {
         $player->sr = $player->overs * 6 / $player->wickets;
    }
   

    if($wickets > $player->most_wickets)
    {
        $player->most_wickets = $wickets;
        $player->least_runs = $runs;
         
    }


    // $player->bbi =  $request->input('wickets') +'/' + $request->input('runs');
   
    DB::table('ocob_Bowling')
    ->where('player', $id)
    ->update(['matches'=> $player->matches,'innings'=>$player->innings,'overs'=>$player->overs,'maidens'=>$player->maidens,'runs' => $player->runs
        ,'wickets' => $player->wickets,'bbi' => $player->bbi,'average' => $player->average,'econ' => $player->econ,
        'sr' => $player->sr,'fivefas' => $player->fivefas,'catches'=> $player->catches, 'most_wickets' => $player->most_wickets, 'least_runs'=>$player->least_runs]);

     
    return redirect('/bowling');


   }
   public function get_All_Stats()
   {

        
        $bowlers = ocob_Bowling::all();
     
        return view('individual_stats',compact('batters', 'bowlers'));

   }



}
