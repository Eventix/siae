<?php


require_once "autoload.php";

/**
 * Example
 */
$monthlyReportBuilder = new \SIAE\reporting\monthlyReport\MonthlyReportBuilder();
$companyHolderBuilder = new \SIAE\common\builder\CompanyHolderBuilder();
$accessTitlesBuilder = new \SIAE\common\builder\AccessTitleBuilder();
$organizerBuilder = new \SIAE\common\builder\OrganizerBuilder();
$eventBuilder = new \SIAE\common\builder\EventBuilder();
$entertainmentBuilder = new \SIAE\common\builder\EntertainmentBuilder();
$placeBuilder = new \SIAE\common\builder\PlaceBuilder();
$multiGenreBuilder = new \SIAE\common\builder\MultipleGenreBuilder();
$artworkTitleBuilder = new \SIAE\common\builder\ArtworksTitlesBuilder();
$placeOrderBuilder = new \SIAE\common\builder\PlaceOrderBuilder();
$ticketSubscriptionBuilder = new \SIAE\common\builder\TicketAbonementsBuilder();
$subscriptionsBuilder = new \SIAE\reporting\monthlyReport\builder\AbonementBuilder();
$releasedSubscriptionsBuilder = new \SIAE\common\builder\IssuedAbonementsBuilder();
$nulledSubscriptionsBuilder = new \SIAE\common\builder\NulledAbonementsBuilder();
$taxationTypeBuilder = new \SIAE\common\builder\TaxationTypeBuilder();
$organizerTypeBuilder = new \SIAE\common\builder\OrganizerTypeBuilder();

$taxationType = $taxationTypeBuilder
    ->value("S")
    ->build();

// Start creating the objects from most nested elements
$artworkTitles = $artworkTitleBuilder
    ->title("Rainbow Magicland")
    ->cinemaProducer("A brand")
    ->author("Rainbow Magicland")
    ->executor("Rainbow Magicland")
    ->nationality("Dutch")
    ->distributor("ManInc")
    ->build();


$accessTitles = $accessTitlesBuilder
    ->type("I1")
    ->quantity(3)
    ->gross(4500)
    ->preSale(0)
    ->VATequivalent(408)
    ->VATpreSale(0)
    ->performanceAmount(0)
    ->build();

$subscriptionTickets = $ticketSubscriptionBuilder
    ->fiscalCode("03566320176")
    ->code("0004UNI1")
    ->titleType("I1")
    ->quantity(4)
    ->notionalAmount(800)
    ->notionalVAT(728)
    ->build();

$place = $placeBuilder
    ->name("Rainbow Magicland")
    ->placeCode("0581081135470")
    ->build();


$multiGenre = $multiGenreBuilder
    ->genreType(77)
    ->incidenceGenre(100)
    ->artworksTitles($artworkTitles)
    ->build();


$entertainment = $entertainmentBuilder
    ->taxationType($taxationType)
    ->incidence(0)
    ->build();

// Define one...M placeOrders
$placeOrders = [
    $placeOrderBuilder
        ->code("U2")
        ->VATExceedingOffers(0)
        ->capacity(10000)
        ->build()
];

// Define one...M events
$events = array(
    $eventBuilder
        ->entertainment($entertainment)
        ->place($place)
        ->eventDate("20150922")
        ->eventTime("0915")
        ->multipleGenre($multiGenre)
        ->placeOrders($placeOrders)
        ->build(),
    $eventBuilder
        ->entertainment($entertainment)
        ->place($place)
        ->eventDate("22158889")
        ->eventTime("0915")
        ->multipleGenre($multiGenre)
        ->placeOrders($placeOrders)
        ->build()
);

$releasedSubscriptions = $releasedSubscriptionsBuilder
    ->quantity(4)
    ->gross(12000)
    ->preSale(0)
    ->VATequivalent(1092)
    ->VATpreSale(0)
    ->build();

$nulledSubscriptions = [
    $nulledSubscriptionsBuilder
        ->quantity(1)
        ->gross(3000)
        ->preSale(0)
        ->VATequivalent(273)
        ->VATpreSale(0)
        ->build()
];

$subscriptions = [
    $subscriptionsBuilder
        ->code("CODICE ABBONAMENTO")
        ->validity(20160901)
        ->taxationType($taxationType)
        ->turn("L")
        ->orderCode("UN")
        ->titleType("I1")
        ->amountOfValidatedEvent(1)
        ->issuedAbonements($releasedSubscriptions)
        ->nulledAbonements($nulledSubscriptions)
        ->build()
];

$organizerType =
    $organizerTypeBuilder
        ->value("E")
        ->build();

$organizer = $organizerBuilder
    ->denomination("SALE")
    ->organizerType($organizerType)
    ->fiscalCode("03566320176")
    ->events($events)
    ->abonements($subscriptions)
    ->build();

$companyHolder = $companyHolderBuilder
    ->classification("Sample")
    ->distributionSystem("Sample")
    ->fiscalCode("dsadsa")
    ->build();

$monthlyReport = $monthlyReportBuilder
    ->month(201509)
    ->companyHolder($companyHolder)
    ->organizer($organizer)
    ->generationIncrementedNumber("2")
    ->generationTime("150057")
    ->creationDate("124145")
    ->replacement("N")
    ->build();

// JMS init
$serializer = JMS\Serializer\SerializerBuilder::create()->build();

// Show
$serializedXML = $serializer->serialize($monthlyReport, 'xml');
echo $serializedXML;


// Validate against DTD
$monthlyReportValidator = new \SIAE\validator\MonthlyReportValidator();
$monthlyReportValidator->validate($serializedXML);

?>