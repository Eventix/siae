## Synopsis

PHP  library used for reporting data to SIAE, the italian copyright collecting agency. 

## Code Example

The library allows to make use of builder to build up the report in an XML/Json format. 

`$ltaReport = $ltaBuilder
     ->CACFOwner("P0001891")
     ->CASystem("02014780395")
     ->transactionLogDate("20150922")
     ->ltaEvent($ltaEvent)
     ->build();`

The above gives a starting point to build up a report.

## Motivation

SIAE has an whole manual for this reporting system purpose. Yet that is not really accessible and self-explanatory.
This module aims to provide a simple way to create reports in standard format with the addition of explaining the fields required by the agency.

## Installation

Run from command line:

`composer update`

To download the dependencies. 

Test then the scripts such as dailyReportExample.php.

## Contributors

Lorenzo Verri

