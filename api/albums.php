<?php

include __DIR__ . '/../db/albums.php';

header('Content-Type: application/json');

$res = [
    'success' => true,
    'response' => $albums,
];

echo json_encode($albums);

