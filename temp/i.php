<?php
$yaml = 'event1:
  name: My Event
  date: !date 25.05.2001';

$ndocs = 0;
$data = yaml_parse($yaml, 0, $ndocs, array('!date' => 'cb_yaml_date'));

print_r($data);


?>