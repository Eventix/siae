<?php

require_once "autoload.php";


$abonementBuilder = new \SIAE\reporting\transactionLog\builder\AbonementBuilder();
$accessTitleBuilder = new \SIAE\reporting\transactionLog\builder\AccessTitleBuilder();
$complementaryBuilder = new \SIAE\reporting\transactionLog\builder\ComplementaryBuilder();
$ticketAbonementBuilder = new \SIAE\reporting\transactionLog\builder\TicketAbonementBuilder();
$transactionBuilder = new \SIAE\reporting\transactionLog\builder\TransactionBuilder();
// Parent
$transactionLogBuilder = new \SIAE\reporting\transactionLog\TransactionLogBuilder();

// Build a bunch of tickets
$accessTitle0 =
    $accessTitleBuilder
        ->eventDate(20150922)
        ->eventTime("0915")
        ->genreType(77)
        ->gross(1500)
        ->title("Rainbow Magicland")
        ->localCode("0581081135470")
        ->preSale(0)
        ->notationalVAT(136)
        ->vatPreSale(0)
        ->build();

$accessTitle1 =
    $accessTitleBuilder
        ->eventDate(20150922)
        ->eventTime("0915")
        ->genreType(77)
        ->gross(1500)
        ->title("Rainbow Magicland")
        ->localCode("0581081135470")
        ->preSale(0)
        ->notationalVAT(136)
        ->vatPreSale(0)
        ->build();

$accessTitle2 =
    $accessTitleBuilder
        ->eventDate(20150922)
        ->eventTime("0915")
        ->genreType(77)
        ->gross(1500)
        ->title("Rainbow Magicland")
        ->localCode("0581081135470")
        ->preSale(0)
        ->notationalVAT(136)
        ->vatPreSale(0)
        ->build();


// TODO build transaction
$transactions = [
    $transactionBuilder
        ->cfOrganizer("03566320176")
        ->cfOwner("02014780395")
        ->VATreleased("N")
        ->taxationType("S")
        ->currency("E")
        ->issuingSystem("P0001091")
        ->activationCard("A0104726")
        ->fiscalSigilloCode("2849F0A492D3C512")
        ->issuedDate(20150922)
        ->issuedTime(1425)
        ->incrementedCounter(235)
        ->titleType("I1")
        ->orderCode("UN")
        ->place("UNICO")
        ->sellingPlace("TicketX")
        ->entertainmentTaxableIncome(0)
        ->accessTitle($accessTitle0)
        ->build(),
    $transactionBuilder
        ->accessTitle($accessTitle1)
        ->build(),
    $transactionBuilder
        ->accessTitle($accessTitle2)
        ->build()
];

// Build the parent
$transactionLog = $transactionLogBuilder->transactions($transactions)->build();

// JMS init
$serializer = JMS\Serializer\SerializerBuilder::create()->build();

// Show
$serializedXML = $serializer->serialize($transactionLog, 'xml');
//echo $serializedXML;

// Test to try it with the provided sample files
// - unfortunately it also fails
//$serializedXML = file_get_contents("templates/RMG_2015_09_00_001.xml");

echo $serializedXML;

$logValidator = new \SIAE\validator\TransactionLogValidator();
$logValidator->validate($serializedXML);


?>