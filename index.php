<?php
/**
 * Created by PhpStorm.
 * User: splus
 * Date: 9/5/18
 * Time: 2:44 PM
 */


/*configurable product*/
$product = [
    'name' => 'Iphone X'
];

/*variants from 2 attributes store and color*/
$product['variants'] = [
    [
        'color' => "Black",
        'storage' => "64GB",
        'attributes' => [
            'price' => 999,
            'market_price' => 1099,
            'description' => 'description long text yellow 128gb',
            'origin' => 'text',
            'factory_date' => date('Y-m-d H:i:s',time()),
            'weight' => 9.89,
        ]
    ],
    [
        'color' => "Yellow",
        'storage' => "128GB",
        'attributes' => [
            'price' => 950,
            'market_price' => 1050,
            'description' => 'description long text yellow 128gb',
            'origin' => 'text yellow 128gb',
            'factory_date' => date('Y-m-d H:i:s',time()),
            'weight' => 9.91,
        ]

    ],
];
/*validate data and save*/
/*save()*/



/*show*/

header('Content-Type: application/json');
echo json_encode($product);