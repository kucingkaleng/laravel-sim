<?php

namespace ARA\LaravelSim\Utils;

class Dummy {

  public $layout;

  function __construct () {
    $this->layout = json_decode(file_get_contents(__DIR__.'/Dummy/simpleLayout.json'));
  }

  public function getArray () {
    $data = [
      [
        'item_name' => 'iPhone XS Max',
        'category' => 'phone',
        'price' => 'Rp. 10.000.000,-',
        'qty' => 100
      ],
      [
        'item_name' => 'Xiaomi Redmi Note 8 Pro',
        'category' => 'phone',
        'price' => 'Rp. 3.000.000,-',
        'qty' => 70
      ]
    ];

    $dataHeader = [
      'item_name' => 'Item Name',
      'category' => 'Category',
      'price' => 'Price',
      'qty' => 'QTY'
    ];

    return (object) [
      'data' => $data,
      'dataHeader' => $dataHeader
    ];
  }
}