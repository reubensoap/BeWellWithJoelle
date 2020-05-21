<?php 

require_once('../model/database.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'home';
    }
}

if ($action == 'home') {
    if ( !isset($loginError) ) {
        $loginError = "";
    }
    include('login-form.php');
} 


?>