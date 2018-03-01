<?php
use \Core\Router;

Router::connect('',['controller'=>'UserController','action'=>'index']);
Router::connect('user',['controller'=>'UserController','action'=>'index']);
Router::connect('user/login',['controller'=>'UserController','action'=>'login']);
Router::connect('user/register',['controller'=>'UserController','action'=>'register']);
Router::connect('user/add',['controller'=>'UserController','action'=>'registerAction']);
Router::connect('user/logout',['controller'=>'UserController','action'=>'logout']);
Router::connect('user/test',['controller'=>'UserController','action'=>'test']);

