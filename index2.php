<?php

$jsonRooms = file_get_contents("./src/roomsData.json");

$rooms = json_decode($jsonRooms, true);

echo '<pre>';
print_r($rooms);
echo '</pre>';

?>