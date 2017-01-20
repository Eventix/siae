<?php

require_once "autoload.php";

$summaryControlAccessesBuilder = new \SIAE\reporting\summaryControlAccesses\SummaryControlAccessesBuilder();
$abonementBuilder = new \SIAE\reporting\summaryControlAccesses\builder\AbonementBuilder();
$companyHolderBuilder = new \SIAE\reporting\summaryControlAccesses\builder\CompanyHolderBuilder();
$eventBuilder = new \SIAE\reporting\summaryControlAccesses\builder\EventBuilder();
$issueSystemBuilder = new \SIAE\reporting\summaryControlAccesses\builder\IssueSystemBuilder();
$titleBuilder = new \SIAE\reporting\summaryControlAccesses\builder\TitleBuilder();
$totalTypeAbonementBuilder = new \SIAE\reporting\summaryControlAccesses\builder\TotalTypeAbonementBuilder();
$totalTypeTitleBuilder = new \SIAE\reporting\summaryControlAccesses\builder\TotalTypeTitleBuilder();

$totalTitleType = $totalTypeTitleBuilder
    ->titleType("I1")
    ->totalTitleLTA(2)
    ->totalTraditionalTitlesNotValidated(1)
    ->totalDigitalAccessTitlesNotValidated(0)
    ->totalAutomaticTraditionalTitles(1)
    ->totalAutomaticDigitalTitles(0)
    ->totalTitlesManualTraditional(0)
    ->totalTitlesManualDigital(0)
    ->totalTitlesTraditionalNulled(0)
    ->totalTitlesDigitalNulled(0)
    ->totalTitlesTraditionalBlocked(0)
    ->totalTitlesDigitalBlocked(0)
    ->totalTitlesTraditionalStolen(0)
    ->totalTitlesDigitalStolen(0)
    ->totalTitlesTraditionalBLD(0)
    ->totalTitlesDigitalBLD(0)
    ->build();

$totalTitleType2 = $totalTypeTitleBuilder
    ->titleType("I1")
    ->totalTitleLTA(5)
    ->totalTraditionalTitlesNotValidated(1)
    ->totalDigitalAccessTitlesNotValidated(3)
    ->totalAutomaticTraditionalTitles(1)
    ->totalAutomaticDigitalTitles(0)
    ->totalTitlesManualTraditional(0)
    ->totalTitlesManualDigital(0)
    ->totalTitlesTraditionalNulled(0)
    ->totalTitlesDigitalNulled(0)
    ->totalTitlesTraditionalBlocked(0)
    ->totalTitlesDigitalBlocked(0)
    ->totalTitlesTraditionalStolen(0)
    ->totalTitlesDigitalStolen(0)
    ->totalTitlesTraditionalBLD(0)
    ->totalTitlesDigitalBLD(0)
    ->build();

$titles = [
    $titleBuilder
        ->codePlaceOrder("UN")
        ->capacity(25000)
        ->totalTitleType($totalTitleType)
        ->build(),

    $titleBuilder->codePlaceOrder("UN2")
        ->capacity(10000)
        ->totalTitleType($totalTitleType2)
        ->build()
];

$issueSystem = $issueSystemBuilder
    ->code("P0001091")
    ->titles($titles)
    ->build();

$companyHolder = $companyHolderBuilder
    ->denominationHolderCA("ARTA COM SRL")
    ->fiscalCodeHolderCA("02014780395")
    ->systemCodeCA("P0001891")
    ->dateSummary(20150922)
    ->dateSummaryGeneration(20150922)
    ->timeSummaryGeneration(132623)
    ->autoIncrementedSummary(8)
    ->build();

$event = $eventBuilder
    ->fiscalCodeOrganizer(03566320176)
    ->denominationOrganizer("Rainbow Magicland Spa")
    ->organizerType("G")
    ->entertainmentShow("S")
    ->entertainmentEffect(0)
    ->localDenomination("Rainbow Magicland")
    ->localCode("0581081135470")
    ->eventDate(20150922)
    ->eventTime("0915")
    ->genreType(77)
    ->title("Rainbow Magicland")
    ->author("Rainbow Magicland")
    ->performer("Rainbow Magicland Spa a socio unico")
    ->movieNationality("DUTCH")
    ->amountOfRepresentedWorks(1)
    ->issueSystem($issueSystem)
    ->build();

$summaryControlAccesses = $summaryControlAccessesBuilder
    ->replacement("N")
    ->companyHolder($companyHolder)
    ->event($event)
    ->build();

// JMS init
$serializer = JMS\Serializer\SerializerBuilder::create()->build();

// Show
$serializedXML = $serializer->serialize($summaryControlAccesses, 'xml');
echo $serializedXML;

// Validate against DTD
$summaryControlAccessesValidator = new \SIAE\validator\SummaryControlAccessesValidator();
$summaryControlAccessesValidator->validate($serializedXML);
