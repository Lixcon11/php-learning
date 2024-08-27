<?php

$jsonRooms = file_get_contents("./src/roomsData.json");

$rooms = json_decode($jsonRooms, true);

echo '<ol>';

foreach ($rooms as $room) {
    echo '<li>';
    echo 'Name: ' . $room['id'] . '<br>';
    echo 'Number: ' . $room['roomNumber'] . '<br>';
    echo 'Price: $' . $room['price'] . '<br>';
    echo 'Discount: ' . $room['discount'] . '%';
    echo '</li>';
}

echo '</ol>';
?>