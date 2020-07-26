<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';


use App\Core\{Router,Requst};



 Router::load('app/\routes.php')
    ->direct(Request::uri(),Request::method());


   

?>