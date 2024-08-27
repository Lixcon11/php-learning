<?php
$rooms = [
    [
        'ID' => 1,
        'Name' => 'Deluxe Room',
        'Number' => 101,
        'Price' => 150,
        'Discount' => 10
    ],
    [
        'ID' => 2,
        'Name' => 'Superior Room',
        'Number' => 102,
        'Price' => 120,
        'Discount' => 5
    ],
    [
        'ID' => 3,
        'Name' => 'Standard Room',
        'Number' => 103,
        'Price' => 100,
        'Discount' => 0
    ]
];

echo '<pre>';
print_r($rooms);
echo '</pre>';
?>