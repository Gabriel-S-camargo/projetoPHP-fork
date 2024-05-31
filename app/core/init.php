<?php 

spl_autoload_register(function($classname){
    
    require $filename ="../app/models/".ucfirst($classname).".php";
});

require 'config.php';
require 'Database.php';
require 'App.php';
require 'Model.php';
require 'Controller.php';
require 'functions.php';