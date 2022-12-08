<?php
//ini_set('allow_url_fopen');

switch(@parse_url($_SERVER['REQUEST_URI'])['path']){
    case '/':
        require 'index.php';
        break;
    case '/index':
        require 'index.php';
        break;
    case '/index.php':
        require 'index.php';
        break;
    case '/found.php':
        require 'found.php';
        break;
    case '/lost.php':
        require 'lost.php';
        break;
    case '/getpet.php':
        require 'getpet.php';
        break;
    case '/petapplications.php':
        require 'petapplications.php';
        break;
    case '/petprofiles.php':
        require 'petprofiles.php';
        break;
    case '/search.php':
        require 'search.php';
        break;
    case '/pets/pet.php':
        require 'pets/pet.php';
        break;
    case '/functions/database_functions.php':
        require 'functions/database_functions.php';
        break;
    case '/functions/process_form.php':
        require 'functions/process_form.php';
        break;
    case '/functions/upload.php':
        require 'functions/upload.php';
        break;
    default:
        http_response_code(404);
}
?>
