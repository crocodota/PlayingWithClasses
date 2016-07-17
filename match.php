<?php
 /* Description of match
 *
 * @author Catalin Profiriu
 */
class match {
  
    private $sport;   
    private $team = array(); //array of teams
    
    public function __construct($sportid) { 
        //echo ' M match '.$sportid;
        //debug 
        $this->sport = new sport();
        $this->sport->read($sportid);
    }
  
    public function echosportteamsneeded() {  
      
        echo 'match class = for '.$this->sport->getName() .' we need : ['. $this->sport->getnumberofteamsneeded() . '] teams.</br>';
    } 
     
    public function getsportteamsneeded() {  
      
        return $this->sport->getnumberofteamsneeded();
    } 
    
    public function setteam($teamid) {  
        //echo 'debug';
        //echo $array_position .' '. $teamid;
        //adaug in sir(array) de echipe a meciului noua instanta a echipei 
        
        $x = new team();
        $x->read($teamid);
	//$this->team[$array_position] = new team();
        //$this->team[$array_position]->read($teamid);
        array_push($this->team, $x);
    } 
    
    public function getmatchteam($array_position) {  
                       
        echo  '+Match team '.$array_position.' is: ' ;
        echo   $this->team[$array_position]->getteamname() .'.</br>';
      
        //debug
        //echo $array_position;
        
    } 
}
