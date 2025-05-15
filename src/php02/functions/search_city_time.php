<?php

function searchCityTime($city_name)
{
  require('config/cities.php');

  foreach ($cities as $city) {
    if ($city['name'] === $city_name) {
      $date_time = new DateTime('', new DateTimeZone($city['time_zone']));
      $time = $date_time->format('Y/m/d H:i:s');
      $city['time'] = $time;

      return $city;
    }
  }
}