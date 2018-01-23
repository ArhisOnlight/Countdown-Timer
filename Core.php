<?php
/*
 * This is the core of the application
 */

class Core { 
    
    static private $tlimit; //Time limit
    static private $tfin;   //Timer finish time


    static private function set_tlimit($seconds) {
        Core::$tlimit = $seconds;
    }
    
    static private function get_tfin() {
        return Core::$tfin;
    }

    static private function start() {              
        setcookie("timer", "tlimit", (Core::$tfin = time() + Core::$tlimit));
        
    }
    
    static function start_timer($seconds) { //it starts the core
        Core::set_tlimit($seconds);
        Core::start();    
        setcookie("tfin", Core::get_tfin());
    }
}










