<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="windows-1252">
        <title>PlayingWithClasses</title>
    </head>
    <body>
    <?php
    
    $rootdir = realpath($_SERVER["DOCUMENT_ROOT"]);
        
    //echo 'debug 1';
    include $rootdir.'/PlayingWithClasses/cls/sport.php';
    //echo 'debug 2';
    include $rootdir.'/PlayingWithClasses/cls/team.php';
    //echo 'debug 3';
    include $rootdir.'/PlayingWithClasses/cls/match.php';
    //echo 'debug 4';

    //echo ' debug 5 ';
    
    echo '</br> ============== ';
    $new_match_instance = new match(1); // soccer
    $new_match_instance->setteam(2);
    $new_match_instance->setteam(3);
       
    for ($i=0;$i <= $new_match_instance->getsportteamsneeded()-1; $i++) {
      echo '</br> -------- ';
      $new_match_instance->getmatchteam($i);
    }

    //echo '</br> -------- ';
    //$new_match_instance->echosportteamsneeded();
    //echo '</br> -------- ';
    //$new_match_instance->getmatchteam(0);
    //echo '</br> -------- ';
    //$new_match_instance->getmatchteam(1);
    echo '</br> ============== ';
    
    
    echo '</br> ============== ';
    $m = new match(2);                    // poker
    
    $m->setteam(3);
    $m->setteam(5);
    $m->setteam(1);
   
    
     for ($i=0;$i <= $m->getsportteamsneeded()-1; $i++) {
      echo '</br> -------- ';
      $m->getmatchteam($i);
     }
      
    //echo '</br> -------- ';
    //$m->echosportteamsneeded();
    //echo '</br> -------- ';
    //$m->getmatchteam(0); 
    //echo '</br> -------- ';
    //$m->getmatchteam(1);
    //echo '</br> -------- ';
    //$m->getmatchteam(2);
    echo '</br> ============== ';            
    
    ?>
    </body>
</html>
