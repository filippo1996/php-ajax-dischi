<?php

require_once __DIR__.'/../database/db.php';


if(!empty($_GET['genre'])){
    $discs = array_filter($discs, function($disc){
        return strtolower($disc['genre']) === strtolower($_GET['genre']);
    });
}

header('Content-type: application/json');
echo json_encode($discs);

