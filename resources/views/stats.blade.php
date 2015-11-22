@extends('layout')

@section('title' )
<title>OCOB </title>
@stop
@section('nav')
    <nav>
       <div id="area">
                <h1 style="display:inline-block; padding: 20px"><a href="/">Otaki College Old boys 2015-2016</a></h1>
            <ul>
               
                <li> <a href="/individual">Individual Stats</a> </li>
            </ul>
            </div>
    </nav>
@stop
@section('content')

        <div id="stats">
            <h1>Otaki College Old boys 2015-2016</h1>
              
         <h1 style="font-size: 45px; margin-bottom: 30px;margin-top: 30px; font-family: 'Josefin Sans';">Stats</h1>
    <!--======================
    |
    | Most Sixes
    |
    |
   ============================== -->
         <div id="most_sixes_container">
          <h2 style="font-family: 'Archivo Black">Most Sixes</h2>
          <table cellspacing="0" style="width: 90%; border-collapse: collapse;">
            <tbody >
                    <tr class="most_sixes number_one">
                    <td > <span >1</span></td>
                    <td  > <h2>{{$sixes[0]->player}}</h2></td>
                    <td style="width: 35px;"> <h4>{{$sixes[0]->sixs}}</h4><h5>6's</h5></td>
                    
                 </tr>
                <tr class="most_sixes ">
                    <td > <span>2</span></td>
                    <td  > <h2>{{$sixes[1]->player}} </h2></td>
                    <td > <h4>{{$sixes[1]->sixs}}</h4><h5>6's</h5></td>
                  
                 </tr>
                <tr class="most_sixes border">
                    <td > <span>3</span></td>
                    <td  > <h2>{{$sixes[2]->player}}</h2></td>
                    <td> <h4>{{$sixes[2]->sixs}}</h4><h5>6's</h5></td>
                 
                 </tr>
                <tr class="most_sixes border">
                    <td > <span>4</span></td>
                    <td  > <h2>{{$sixes[3]->player}}</h2></td>
                    <td> <h4>{{$sixes[3]->sixs}}</h4><h5>6's</h5></td>
                  
                 </tr>
                 <tr class="most_sixes border">
                    <td > <span>5</span></td>
                    <td  > <h2>{{$sixes[4]->player}}</h2></td>
                    <td> <h4>{{$sixes[4]->sixs}}</h4><h5>6's</h5></td>
                    
                 </tr>      
       
  
       
             </tbody>
         </table>     
         </div>
     <!--=======================
    |
    | Most Runs
    |
    |
    |
    -->

                  <div id="most_sixes_container" style="float: right;">
          <h2 style="font-family: 'Archivo Black">Most Runs</h2>

          <table cellspacing="0" style="width: 90%; border-collapse: collapse;">
            <tbody >
                 <tr class="most_sixes number_one">
                    <td > <span >1</span></td>
                    <td  > <h2>{{$runs[0]->player}}</h2></td>
                    <td style="width: 35px;"> <h4 >{{$runs[0]->runs}}</h4><h5>Runs</h5></td>
                    
                 </tr>
                <tr class="most_sixes ">
                    <td > <span>2</span></td>
                    <td  > <h2>{{$runs[1]->player}} </h2></td>
                    <td> <h4 >{{$runs[1]->runs}}</h4><h5>Runs</h5></td>
                  
                 </tr>
                <tr class="most_sixes border">
                    <td > <span>3</span></td>
                    <td  > <h2>{{$runs[2]->player}}</h2></td>
                    <td> <h4>{{$runs[2]->runs}}</h4><h5>Runs</h5></td>
                 
                 </tr>
                <tr class="most_sixes border">
                    <td > <span>4</span></td>
                    <td  > <h2>{{$runs[3]->player}}</h2></td>
                    <td> <h4>{{$runs[3]->runs}}</h4><h5>Runs</h5></td>
                  
                 </tr>
                 <tr class="most_sixes border">
                    <td > <span>5</span></td>
                    <td  > <h2>{{$runs[4]->player}}</h2></td>
                    <td> <h4 >{{$runs[4]->runs}}</h4><h5>Runs</h5></td>
                    
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

        <div id="most_sixes_container" style="float: left;">
          <h2 style="font-family: 'Archivo Black">Most Wickets</h2>
          <table cellspacing="0" style="width: 90%; border-collapse: collapse;">
            <tbody >
                 <tr class="most_sixes number_one">
                    <td > <span >1</span></td>
                    <td  > <h2>{{$wickets[0]->player}}</h2></td>
                    <td> <h4>{{$wickets[0]->wickets}}</h4><h5>Wickets</h5></td>
                    
                 </tr>
                <tr class="most_sixes ">
                    <td > <span>2</span></td>
                    <td  > <h2>{{$wickets[1]->player}} </h2></td>
                    <td> <h4>{{$wickets[1]->wickets}}</h4><h5>Wickets</h5></td>
                  
                 </tr>
                <tr class="most_sixes border">
                    <td > <span>3</span></td>
                    <td  > <h2>{{$wickets[2]->player}}</h2></td>
                    <td> <h4>{{$wickets[2]->wickets}}</h4><h5>Wickets</h5></td>
                 
                 </tr>
                <tr class="most_sixes border">
                    <td > <span>4</span></td>
                    <td  > <h2>{{$wickets[3]->player}}</h2></td>
                    <td> <h4>{{$wickets[3]->wickets}}</h4><h5>Wickets</h5></td>
                  
                 </tr>
                 <tr class="most_sixes border">
                    <td > <span>5</span></td>
                    <td  > <h2>{{$wickets[4]->player}}</h2></td>
                    <td style="width: 35px;"> <h4>{{$wickets[4]->wickets}}</h4><h5>Wickets</h5></td>
                    
                 </tr>      
       
             </tbody>
         </table>     
         </div>

               <!--
    |
    | Highest Average
    |
    |
    |
    -->

        <div id="most_sixes_container" style="float: right;">
          <h2 style="font-family: 'Archivo Black">Highest Average</h2>
          <table cellspacing="0" style="width: 90%; border-collapse: collapse;">
            <tbody >
                 <tr class="most_sixes number_one">
                    <td > <span >1</span></td>
                    <td  > <h2>{{$average[0]->player}}</h2></td>
                    <td> <h4>{{$average[0]->average}}</h4><h5>Ave</h5></td>
                    
                 </tr>
                <tr class="most_sixes ">
                    <td > <span>2</span></td>
                    <td  > <h2>{{$average[1]->player}} </h2></td>
                    <td> <h4>{{$average[1]->average}}</h4><h5>Ave</h5></td>
                  
                 </tr>
                <tr class="most_sixes border">
                    <td > <span>3</span></td>
                    <td  > <h2>{{$average[2]->player}}</h2></td>
                    <td> <h4>{{$average[2]->average}}</h4><h5>Ave</h5></td>
                 
                 </tr>
                <tr class="most_sixes border">
                    <td > <span>4</span></td>
                    <td  > <h2>{{$average[3]->player}}</h2></td>
                    <td> <h4>{{$average[3]->average}}</h4><h5>Ave</h5></td>
                  
                 </tr>
                 <tr class="most_sixes border">
                    <td > <span>5</span></td>
                    <td  > <h2>{{$average[4]->player}}</h2></td>
                    <td style="width: 35px;"> <h4>{{$average[4]->average}}</h4><h5>Ave</h5></td>
                    
                 </tr>      
       
             </tbody>
         </table>     
         </div>


               <!--
    |
    | Best Econ
    |
    |
    |
    -->

        <div id="most_sixes_container" style="float: left;">
          <h2 style="font-family: 'Archivo Black">Highest Score</h2>
          <table cellspacing="0" style="width: 90%; border-collapse: collapse;">
            <tbody >
                 <tr class="most_sixes number_one">
                    <td > <span >1</span></td>
                    <td  > <h2>{{$highestscore[0]->player}}</h2></td>
                    <td> <h4>{{$highestscore[0]->highest_score}}</h4></td>
                    
                 </tr>
                <tr class="most_sixes ">
                    <td > <span>2</span></td>
                    <td  > <h2>{{$highestscore[1]->player}} </h2></td>
                    <td> <h4>{{$highestscore[1]->highest_score}}</h4></td>
                  
                 </tr>
                <tr class="most_sixes border">
                    <td > <span>3</span></td>
                    <td  > <h2>{{$highestscore[2]->player}}</h2></td>
                    <td> <h4>{{$highestscore[2]->highest_score}}</h4></td>
                 
                 </tr>
                <tr class="most_sixes border">
                    <td > <span>4</span></td>
                    <td  > <h2>{{$highestscore[3]->player}}</h2></td>
                    <td> <h4>{{$highestscore[3]->highest_score}}</h4></td>
                  
                 </tr>
                 <tr class="most_sixes border">
                    <td > <span>5</span></td>
                    <td  > <h2>{{$highestscore[4]->player}}</h2></td>
                    <td style="width: 35px;"> <h4>{{$highestscore[4]->highest_score}}</h4></td>
                    
                 </tr>      
       
             </tbody>
         </table>     
         </div>

@stop