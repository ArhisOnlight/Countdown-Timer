<?php
function page_design() { //All stuff on the page you can describe here
//TODO
}

function timer_ended() { //When counting is finished this code will start
    //TODO
}


function start_and_settings() {
    page_design();
    $auto_refresh = 1;
    if (isset($_COOKIE['tfin'])) {
        $tfin = $_COOKIE['tfin'];
        if ($tfin- time() >= 0 ) {
            echo "<meta http-equiv='Refresh' content='$auto_refresh' />";
            printf("<br />You will automatically moved after %d sec.<br />", ($tfin- time()) >=1 ? $tfin- time(): 1);
        }
        if (!isset($_COOKIE['timer'])) {
            setcookie("tfin", "s", time()-32000);
            timer_ended();
        }  
    }     
} 

start_and_settings(); //Start the page



 


 



