<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Autoload files using Composer autoload

use SIAE\Report;

/**
 * Initiate an report, here of the Type Daily Reports
 *
 * Report variables required are stated at DailyReport->$requiredProperties
 *
 * The translated variables are in DailyReport->$translatedProperties
 *
 * We create an report here with English variables
 *
 */
$report = Report::start('DailyReport', [
            'name'              => 'THIS IS NAME',
            'eventCreatedAt'    => 'INSERTED: 20150922',
            'Organisation_Name' => 'Organisation Name',
            'Organisation_Event_Location_Names' => 'Location Name HERE',
        ]);

// Add a single line -> See DailyReportLine
$report->addLine('Subscriptions',
    ['SIAECode' => 'INSERTED first: 0003UNI1']
);

// Or multiple Lines
$report->addLines('Subscriptions', [
        ['SIAECode' => 'INSERTED second : 0003UNI1'],
        ['SIAECode' => 'INSERTED third: 0003UNI1']
    ]
);

echo  $report->render('xml'); // Outputs the correct XML