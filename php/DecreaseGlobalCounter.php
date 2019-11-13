<?php 
    $users = simplexml_load_file('../xml/Counter.xml');
    $valActual = $users->user;
    $valActual=$valActual-1;
    $users->user[0] = $valActual;
    $users->asXML('../xml/Counter.xml');
?>