<?php
    $users = simplexml_load_file('../xml/Counter.xml');

    $users['cont'] -= 1;

    $user = $users->xpath('//user[email="'.$_GET['email'].'"]');
    $parent = $user[0]->xpath("parent::*");
    unset($parent);

    $users->asXML('../xml/Counter.xml');
    
    header('location:LogOut.php');
?>