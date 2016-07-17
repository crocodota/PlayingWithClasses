<?php

/* Description of team
 *
 * @author Catalin Profiriu
 */

class team {

    //put your code here
    private $name;

    public function __construct() {
        //echo ' T team ';
    }

    public function read($i) {
        //select din baza 
        //populez campurile cu datele din baza
        // for testting. - steaua = 1 , national =2. iasu =3 
        if ($i == 1) {
            $this->name = 'Steaua';
        } elseif ($i == 2) {
            $this->name = 'national';
        } elseif ($i == 3) {
            $this->name = 'iasi';
        } elseif ($i == 5) {
            $this->name = 'george';
        }
    }

    public function setName($newname) {
        $this->name = $newname;
    }

    public function getteamname() {
        echo $this->name;
    }

}
