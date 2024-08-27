<?php

if (isset($_GET['id'])) {
    $roomId = $_GET['id'];

    $jsonRooms = file_get_contents("./src/roomsData.json");

    $rooms = json_decode($jsonRooms, true);

    $foundRoom = null;

    foreach ($rooms as $room) {
        if ($room['id'] == $roomId) {
            $foundRoom = $room;
            break;
        }
    }

    if ($foundRoom) {
        echo '<h2>Room Details</h2>';
        echo 'Name: ' . $foundRoom['id'] . '<br>';
        echo 'Number: ' . $foundRoom['roomNumber'] . '<br>';
        echo 'Price: $' . $foundRoom['price'] . '<br>';
        echo 'Discount: ' . $foundRoom['discount'] . '%<br>';
    } else {
        echo '<p>No room found with ID ' . htmlspecialchars($roomId) . '</p>';
    }
}

else {
    echo '<p>Please provide a room ID in the query string, e.g., ?id=1</p>';
}

?>