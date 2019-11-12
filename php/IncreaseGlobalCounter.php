<?php
    $users = simplexml_load_file('../xml/Counter.xml');
    $users['cont'] += 1;
    $contador = $users['cont'];
    $user = $users->addChild('user');
    $user->addAttribute("id",$contador);
    $user->addChild("email",$_GET['email']);

    $users->asXML('../xml/Counter.xml');
    
    header('location:Layout.php?email='.$_GET['email']);
?>