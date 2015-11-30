@extends('layout')

@section('title' )
<title>OCOB </title>
@stop
@section('nav')
    <nav>
       <div id="area">
                <h1 style="display:inline-block; padding: 20px"><a href="/">Otaki College Old boys 2015-2016</a></h1>
            <ul>
            
                <li> <a href="/batting-stats">Batting Stats</a> </li>
                <li> <a href="/bowling-stats">Bowling Stats</a> </li>
            </ul>
            </div>
    </nav>
@stop
@section('content')

        <div id="stats">
            <h1>Otaki College Old boys 2015-2016</h1>
              
      
        
    <!--======================
    |
    | Most Sixes
    |
    |
   ============================== -->
 
          <h2 class="top_performing_title">Most Sixes</h2>
          <table cellspacing="0" class="top_performing one" >
            <tbody >
                    <tr class="most_sixes number_one one">
                    <td > <span >1st</span></td>
                    <td  > <h3 >{{$sixes[0]->player}}</h3></td>
                    <td style="width: 35px;"> <h4>{{$sixes[0]->sixs}}</h4><h5>Sixes</h5></td>
                    
                 </tr>
                <tr class="most_sixes ">
                    <td > <span>2nd</span></td>
                    <td  > <h3 >{{$sixes[1]->player}} </h3></td>
                    <td > <h4>{{$sixes[1]->sixs}}</h4><h5>Sixes</h5></td>
                  
                 </tr>
                <tr class="most_sixes border">
                    <td > <span>3rd</span></td>
                    <td  > <h3 >{{$sixes[2]->player}}</h3></td>
                    <td> <h4>{{$sixes[2]->sixs}}</h4><h5>Sixes</h5></td>
                 
                 </tr>
                <tr class="most_sixes border">
                    <td > <span>4th</span></td>
                    <td  > <h3 >{{$sixes[3]->player}}</h3></td>
                    <td> <h4>{{$sixes[3]->sixs}}</h4><h5>Sixes</h5></td>
                  
                 </tr>
                 <tr class="most_sixes border">
                    <td > <span>5th</span></td>
                    <td  > <h3 >{{$sixes[4]->player}}</h3></td>
                    <td> <h4>{{$sixes[4]->sixs}}</h4><h5>Sixes</h5></td>
                    
                 </tr>      
       
  
       
             </tbody>
         </table>     

     <!--=======================
    |
    | Most Runs
    |
    |
    |
    -->

    
     <div class="">
          <h2 class="top_performing_title">Most Runs</h2>
          <table cellspacing="0" class="top_performing" >
            <tbody >
                    <tr class="most_sixes number_one one">
                    <td > <span >1st</span></td>
                    <td  > <h3 >{{$runs[0]->player}}</h3></td>
                    <td style="width: 35px;"> <h4>{{$runs[0]->runs}}</h4><h5>Runs</h5></td>
                    
                 </tr>
                <tr class="most_sixes ">
                    <td > <span>2nd</span></td>
                    <td  > <h3 >{{$runs[1]->player}} </h3></td>
                    <td > <h4>{{$runs[1]->runs}}</h4><h5>Runs</h5></td>
                  
                 </tr>
                <tr class="most_sixes border">
                    <td > <span>3rd</span></td>
                    <td  > <h3 >{{$runs[2]->player}}</h3></td>
                    <td> <h4>{{$runs[2]->runs}}</h4><h5>Runs</h5></td>
                 
                 </tr>
                <tr class="most_sixes border">
                    <td > <span>4th</span></td>
                    <td  > <h3 >{{$runs[3]->player}}</h3></td>
                    <td> <h4>{{$runs[3]->runs}}</h4><h5>Runs</h5></td>
                  
                 </tr>
                 <tr class="most_sixes border">
                    <td > <span>5th</span></td>
                    <td  > <h3 >{{$runs[4]->player}}</h3></td>
                    <td> <h4>{{$runs[4]->runs}}</h4><h5>Runs</h5></td>
                    
                 </tr>      
       
  
       
             </tbody>
         </table>   
  </div>
      <!--
    |
    | Most Wickets
    |
    |
    |
    -->

          <h2 class="top_performing_title">Most Wickets</h2>
          <table cellspacing="0" class="top_performing" >
            <tbody >
                    <tr class="most_sixes number_one one">
                    <td > <span >1st</span></td>
                    <td  > <h3>{{$wickets[0]->player}}</h3></td>
                    <td style="width: 35px;"> <h4>{{$wickets[0]->wickets}}</h4><h5>Wickets</h5></td>
                    
                 </tr>
                <tr class="most_sixes ">
                    <td > <span>2nd</span></td>
                    <td  > <h3>{{$wickets[1]->player}} </h3></td>
                    <td > <h4>{{$wickets[1]->wickets}}</h4><h5>Wickets</h5></td>
                  
                 </tr>
                <tr class="most_sixes border">
                    <td > <span>3rd</span></td>
                    <td  > <h3>{{$wickets[2]->player}}</h3></td>
                    <td> <h4>{{$wickets[2]->wickets}}</h4><h5>Wickets</h5></td>
                 
                 </tr>
                <tr class="most_sixes border">
                    <td > <span>4th</span></td>
                    <td  > <h3>{{$wickets[3]->player}}</h3></td>
                    <td> <h4>{{$wickets[3]->wickets}}</h4><h5>Wickets</h5></td>
                  
                 </tr>
                 <tr class="most_sixes border">
                    <td > <span>5th</span></td>
                    <td  > <h3>{{$wickets[4]->player}}</h3></td>
                    <td> <h4>{{$wickets[4]->wickets}}</h4><h5>Wickets</h5></td>
                    
                 </tr>      
       
  
       
             </tbody>
         </table>   
  

               <!--
    |
    | Highest Average
    |
    |
    |
    -->

          <h2 class="top_performing_title">Highest Average</h2>
          <table cellspacing="0" class="top_performing " >
            <tbody >
                    <tr class="most_sixes number_one one">
                    <td > <span >1st</span></td>
                    <td  > <h3>{{$average[0]->player}}</h3></td>
                    <td style="width: 35px;"> <h4>{{$average[0]->average}}</h4><h5>Ave</h5></td>
                    
                 </tr>
                <tr class="most_sixes ">
                    <td > <span>2nd</span></td>
                    <td  > <h3>{{$average[1]->player}} </h3></td>
                    <td > <h4>{{$average[1]->average}}</h4><h5>Ave</h5></td>
                  
                 </tr>
                <tr class="most_sixes border">
                    <td > <span>3rd</span></td>
                    <td  > <h3>{{$average[2]->player}}</h3></td>
                    <td> <h4>{{$average[2]->average}}</h4><h5>Ave</h5></td>
                 
                 </tr>
                <tr class="most_sixes border">
                    <td > <span>4th</span></td>
                    <td  > <h3>{{$average[3]->player}}</h3></td>
                    <td> <h4>{{$average[3]->average}}</h4><h5>Ave</h5></td>
                  
                 </tr>
                 <tr class="most_sixes border">
                    <td > <span>5th</span></td>
                    <td  > <h3>{{$average[4]->player}}</h3></td>
                    <td> <h4>{{$average[4]->average}}</h4><h5>Ave</h5></td>
                    
                 </tr>      
       
  
       
             </tbody>
         </table>        
        


               <!--
    |
    | Best Econ
    |
    |
    |
    -->

       
          <h2 class="top_performing_title">Highest Score</h2>
          <table cellspacing="0" class="top_performing "  style="margin-bottom: 30px;">
            <tbody >
                    <tr class="most_sixes number_one one">
                    <td > <span >1st</span></td>
                    <td  > <h3>{{$highestscore[0]->player}}</h3></td>
                    <td style="width: 35px;"> <h4>{{$highestscore[0]->highest_score}}</h4></td>
                    
                 </tr>
                <tr class="most_sixes ">
                    <td > <span>2nd</span></td>
                    <td  > <h3>{{$highestscore[1]->player}} </h3></td>
                    <td > <h4>{{$highestscore[1]->highest_score}}</h4></td>
                  
                 </tr>
                <tr class="most_sixes border">
                    <td > <span>3rd</span></td>
                    <td  > <h3>{{$highestscore[2]->player}}</h3></td>
                    <td> <h4>{{$highestscore[2]->highest_score}}</h4></td>
                 
                 </tr>
                <tr class="most_sixes border">
                    <td > <span>4th</span></td>
                    <td  > <h3>{{$highestscore[3]->player}}</h3></td>
                    <td> <h4>{{$highestscore[3]->highest_score}}</h4></td>
                  
                 </tr>
                 <tr class="most_sixes border">
                    <td > <span>5th</span></td>
                    <td  > <h3>{{$highestscore[4]->player}}</h3></td>
                    <td> <h4>{{$highestscore[4]->highest_score}}</h4></td>
                    
                 </tr>      
       
  
       
             </tbody>
         </table>      
       

@stop