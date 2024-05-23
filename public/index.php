<?php
if( !session_id() ) session_start();
// Teknik Bootstraping
require_once '../app/init.php'; 

$app = new App;