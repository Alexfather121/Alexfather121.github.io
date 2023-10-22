<?php
$request_path = $_GET['route'];
if($request_path == '')
    require $base_path . 'list.php';
else if ($request_path == 'about')
    require $base_path . 'about\index.php';
else if ($request_path == 'contacts')
    require $base_path . 'contacts\index.php';