<?php
require 'TopicData.php';

if (isset($_POST) && sizeof($_POST) > 0) {
    $data = new TopicData();
    $data->add($_POST);
    header("Location: /");
    exit;
}

?>
