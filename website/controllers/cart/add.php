<?php
$pid = intval($_GET['id']);
cart_add($pid);
echo $pid;
header('location:'.PATH_URL.'/cart');
/*
header( "refresh:5;url=cart" );
echo 'You\'ll be redirected in about 5 secs. If not, click <a href="cart">here</a>.';*/
