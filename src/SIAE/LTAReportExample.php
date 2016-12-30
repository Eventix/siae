<?php


require_once "autoload.php";

/**
 * Example LTA
 */
$ltaBuilder = new \SIAE\reporting\dailyTransactionLogs\DailyTransactionLogBuilder();
$ltaEventBuilder = new \SIAE\reporting\dailyTransactionLogs\builder\LTAEventBuilder();
$accessTitlesBuilder = new \SIAE\reporting\dailyTransactionLogs\builder\AccessTitleBuilder();
$supportBuilder = new \SIAE\reporting\dailyTransactionLogs\builder\SupportBuilder();


$accessTitles = [
    $accessTitlesBuilder
        ->issueSystem("P0001091")
        ->activationCard("A0104726")
        ->autoIncrementedFiscalNumber("192")
        ->fiscalSigilloCode("716639DB711B9AD7")
        ->issuedDate(20150922)
        ->issuedTime(1239)
        ->ltaDate(20150922)
        ->ltaTime(1239)
        ->titleType("01")
        ->orderCode("UN")
        ->gross("0")
        ->abonement("N")
        ->isNulled("N")
        ->supportCode("BT")
        ->supportId("34259841043610000002")
        ->state("VT")
        ->build()
];

$supports = [
    $supportBuilder
        ->supportIdCode("BIGLIETTO TRADIZIONALE")
        ->supportTypeId("BT")
        ->build(),
    $supportBuilder
        ->supportIdCode("CARTA FIDELIZZAZIONE")
        ->supportTypeId("FI")
        ->build(),
];


$ltaEvent = $ltaEventBuilder
    ->cfOrganizer("03566320176")
    ->localCode("0581081135470")
    ->eventDate("20150922")
    ->eventHour("0915")
    ->title("Rainbow Magicland")
    ->genreType("77")
    ->openingDate("20150922")
    ->openingHour("0615")
    ->accessTitles($accessTitles)
    ->supports($supports)
    ->build();

$ltaReport = $ltaBuilder
    ->CACFOwner("P0001891")
    ->CASystem("02014780395")
    ->transactionLogDate("20150922")
    ->ltaEvent($ltaEvent)
    ->build();


// JMS init
$serializer = JMS\Serializer\SerializerBuilder::create()->build();

// Show
$serializedXML = $serializer->serialize($ltaReport, 'xml');
echo $serializedXML;

// Test to try it with the provided sample files
//$serializedXML = file_get_contents("templates/LTA_2015_09_22_001.xml");


// Validate against DTD
$LTAValidator = new \SIAE\validator\LtaValidator();

echo $LTAValidator->validate($serializedXML);

?>