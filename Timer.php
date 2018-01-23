<?php
/*
 *  This is the index file.
    It's an app of the countdown timer.
    How does it work?
 *  it shows on the Output page(Output.php) the countdown. 
 *  As it fineshed some actions will commit(All these actions and
 *  the disign of the display page you can setup in Output.php
 *  Timer's time you can set in start() function right here.
 * 
 * To use this app you need a webserver and to cookies were turned on
 * at your browser. It doesn't require JavaScript or something else additional 
 * 
 *  */
require_once './Core.php';

class Timer {    
    static function start($seconds) {
        Core::start_timer($seconds); // countdown from $seconds
        header("Location: Output.php"); //it opens the page with countdown
    }   
}

 








