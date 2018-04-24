<?php

$route[] = ['/', 'HomeController@index'];
$route[] = ['/faq', 'PostsController@index'];
$route[] = ['/faq/{id}/show', 'PostsController@show'];






return $route;
