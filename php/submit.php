<?php 
require_once 'php/subscriber_class.php';
$subscriber = new Subscriber();

$id = filter_input(INPUT_POST, 'ID')
$name = filter_input(INPUT_POST, 'subsName');
$email = filter_input(INPUT_POST, 'email');

$subscriber->setName($name);
$subscriber->setEmail($email);
$result = $subscriber->save_subscriber();
echo json_encode($result);