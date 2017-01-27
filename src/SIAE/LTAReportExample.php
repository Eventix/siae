<?php


require_once "autoload.php";

/**
 * Example LTA
 */
$ltaBuilder = new \SIAE\reporting\dailyTransactionLogs\DailyTransactionLogBuilder();
$ltaEventBuilder = new \SIAE\reporting\dailyTransactionLogs\builder\LTAEventBuilder();
$accessTitlesBuilder = new \SIAE\reporting\dailyTransactionLogs\builder\AccessTitleBuilder();
$supportBuilder = new \SIAE\reporting\dailyTransactionLogs\builder\SupportBuilder();

// Issued
$accessTitles = [
    $accessTitlesBuilder
        ->issueSystem("P0001091") // TODO: difference between: SistemaEmissione, CFTitolareCA
        ->activationCard("A0104726") // SmartCard used.
        ->autoIncrementedFiscalNumber("192") // Increment counter from SmartCard.
        ->fiscalSigilloCode("716639DB711B9AD7") // Fiscal number from SmartCard.
        ->issuedDate(20150922) // clear
        ->issuedTime(1239) // clear
        ->ltaDate(20150922) // clear
        ->ltaTime(1239)  // clear
        ->titleType("I1") // clear
        ->orderCode("UN") // section the ticket belongs to // TODO: What should this be for non-seated
        ->gross("0") // Ticket price without service fees, price for organisation
        ->abonement("N") // If ticket belongs to abonement
        ->isNulled("N") // is cancelled or not (S, yes; N, no)
        ->supportCode("BT") // See Supports
        ->supportId("34259841043610000002") // Actual Barcode
        ->state("VT")
        ->build()
];

// Cancelled / Refunded
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
        ->gross("0") // refunded amount probably
        ->abonement("N")
        ->isNulled("S") // changed
        ->supportCode("BT")
        ->supportId("34259841043610000002")
        ->state("AD") // Changed
        ->build()
];

$supports = [
    $supportBuilder
        ->supportIdCode("BIGLIETTO TRADIZIONALE") // says: traditional ticket (user input for each ticket) / Ticket name?
        ->supportTypeId("BT") // TODO: What kind of options we have here? (user input for each ticket)
        ->build(),
    $supportBuilder
        ->supportIdCode("CARTA FIDELIZZAZIONE") // TODO: ask this
        ->supportTypeId("FI")
        ->build(),
];


$ltaEvent = $ltaEventBuilder
    ->cfOrganizer("03566320176") // Fiscal Code assigned to the organizer (user input)
    ->localCode("0581081135470") // SIAE code assigned to the specific location (user input)
    ->eventDate("20150922") // clear
    ->eventHour("0915") // Clear
    ->title("Rainbow Magicland") // clear
    ->genreType("77") // Event specific setting (user input)
    ->openingDate("20150922") // clear
    ->openingHour("0615") // celar
    ->accessTitles($accessTitles)
    ->supports($supports)
    ->build();

$ltaReport = $ltaBuilder
    ->CACFOwner("P0001891") // SIAE code for issueing ticketsystem CFTitolareCA (WL input)
    ->CASystem("02014780395") // SIAE code SistemaCA (WL input)
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