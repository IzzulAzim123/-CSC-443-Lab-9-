<?php 
    session_start ( ) ; 
    echo " <html> " ; 
    
    $_SESSION [ " myLogin " ] = " myWebsite " ; 
    echo " A value saved in the session named as myLogin.<br>";
    
    $_SESSION [ " myColor " ] = " Blue " ; 
    echo " A value saved in the session named as myColor.<br>";
    
    echo " click <a href=next page.php> Next Page </a> " 
        . " to retrieve the values . <br> " ; 
        
    echo " </html> <br> " ;
?>