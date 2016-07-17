<?php
/**
 * Description of sport
 *
 * @author Catalin Profiriu
 */
class sport {
    //put your code here
    private $name;
    private $numberofteamsneeded;


    public function __construct() { 
        // echo ' S sport';
    }
    
    public function read($i) {  
	//select din baza 
        //populez campurile cu datele din baza
        
        // for testting. - soccer = 1 , poker =2. brigde =3 
        if ($i == 1) {$this->name = 'soccer';} 
        elseif  ($i == 2) {$this->name = 'poker';}
        elseif  ($i == 3) {$this->name = 'brigde';}
        
        // for testting. - soccer = 1 , poker =2. brigde =3 
        if ($i == 1) {$this->numberofteamsneeded = 2;} 
        elseif  ($i == 2) {$this->numberofteamsneeded = 3;}
        elseif  ($i == 3) {$this->numberofteamsneeded = 4;}
        
    } 
        
    public function setName($newname) {  
	$this->name = $newname;  
    } 
    
    public function setnumberofteamsneeded($n) {  
	$this->numberofteamsneeded = $n;  
    } 
    
    public function getName(){
        return $this->name;
    }
    
     public function getnumberofteamsneeded(){
        return $this->numberofteamsneeded;
    }
    
    
}
