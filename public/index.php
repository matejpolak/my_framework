<?php
include '../bootstrap/bootstrap.php';

echo(PUBLIC_DIR);
echo '<hr>';
echo 'Hello world!';

echo '<hr>';
$route = request('route', 404);
echo $route;