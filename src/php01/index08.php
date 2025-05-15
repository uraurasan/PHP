<?php
$people = [
  [
    'fast_name' => 'taro',
    'age' => '25',
    'gender' => 'men'
  ],
  [
    'fast_name' => 'jiro',
    'age' => '20',
    'gender' => 'men'
  ],
  [
    'fast_name' => 'hanako',
    'age' => '16',
    'gender' => 'women'
  ]
];

foreach($people as $person)
echo $person['fast_name'] . '(' . $person ['age'] . '才' . $person ['gender'] . ')<br>';

