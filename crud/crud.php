<?php

require_once 'classes/info.php';

$person = new info();
if (isset($_POST['id'])) {
    $person->create_info($_POST['f_name'], $_POST['id']);
}

$all_persons = $person->read_info();
?>