<?php
// Some vendor files cannot be easily auto loaded.

require("../../vendor/autoload.php");

$packages = [
    "../../vendor/jms/serializer/src/JMS/Serializer/Annotation",
    "common/model",
    "common/builder",
    "dailyReport"];

foreach ($packages as $package) {
    foreach (glob(__DIR__ . DIRECTORY_SEPARATOR . $package . "/*.php") as $filename) {
        require_once $filename;

    }
}

?>