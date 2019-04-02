<?php

require_once 'classes/info.php';

if (isset($_REQUEST['method'])) {
    if ($_REQUEST['method'] == "info_del") {
        info_del($_REQUEST['delid']);
    }
}

function info_del($id) {
    $ajax_person = new info();
    if ($ajax_person->delete($id)) {

        echo json_encode(true);
    } else {
        echo json_encode(false);
    }

    die();
}