<?php
$pid = intval($_GET['id']);
cart_delete($pid);
header('location:'.PATH_URL.'/cart');
