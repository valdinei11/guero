<?php

$route[] = ['/', 'HomeController@index'];
$route[] = ['/faq', 'FaqController@index'];
$route[] = ['/faq/{id}/show', 'FaqController@show'];






return $route;
