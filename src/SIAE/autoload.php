<?php
// Some vendor files cannot be easily auto loaded.

require("../../vendor/autoload.php");

$packages = [
    "../../vendor/jms/serializer/src/JMS/Serializer/Annotation",
    "common/model",
    "common/builder",
    "reporting/dailyReport",
    "reporting/monthlyReport",
    "reporting/dailyTransactionLogs/builder",
    "reporting/dailyTransactionLogs/model",
    "reporting/dailyTransactionLogs"];

foreach ($packages as $package) {
    foreach (glob(__DIR__ . DIRECTORY_SEPARATOR . $package . "/*.php") as $filename) {
        require_once $filename;

    }
}

?>