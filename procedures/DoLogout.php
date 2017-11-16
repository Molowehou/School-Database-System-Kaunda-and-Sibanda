<?php

require_once __DIR__. '/../inc/bootstrap.php';

$accessToken = new \Symfony\Component\HttpFoundation\Cookie('access_token',"expired",time()-9600,'/', getenv('COOKIE_DOMAIN'));
   redirect('login.php',['cookies'=>[$accessToken]]); 
