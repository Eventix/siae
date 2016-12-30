<?php

namespace SIAE\common\validator;

use DOMDocument;
use DOMDocumentType;
use DOMImplementation;

/**
 * Validates a DTD file against an XML file.
 * This class offers both static methods, useful when it comes to validate one or few files.
 * If the validation is to be run against many files, make use of the class instance method instead.
 */
class DTDValidator
{
    /**
     * Data definition file.
     * @var string
     */
    private $dtdFileSource;

    /**
     * Document to which the node root is copied.
     * @var DOMDocumentType
     */
    private $documentToValidate;


    /**
     * DTDValidator constructor.
     * @param $dtdFile string Path of the DTD file to be used for validation.
     */
    public function __construct($dtdFile)
    {
        $this->dtdFileSource = $dtdFile;
    }

    /**
     * @param $xml string XML file to be validated.
     * @param $rootXmlElementName string of the class we want to validate
     * @return bool TRUE if the validation succeded or FALSE when otherwise.
     */
    public function validate($xml, $rootXmlElementName)
    {
        $this->loadDtd($xml, $rootXmlElementName);
        return $this->documentToValidate->validate();
    }

    /**
     * Loads the DTD File and since that would just set the DTD to the original,
     * and the doctype property of a DOMDocument object is read-only,
     * so you have to copy the root node (with everything in it) to a new DOM document.
     * @param $xml
     * @param $rootXmlElementName
     */
    private function loadDtd($xml, $rootXmlElementName)
    {
        $old = new DOMDocument;
        $old->loadXML($xml);

        $creator = new DOMImplementation;

        $doctype = $creator->createDocumentType($rootXmlElementName, null, $this->dtdFileSource);

        $this->documentToValidate = $creator->createDocument(null, null, $doctype);
        $this->documentToValidate->encoding = "utf-8";

        $oldNode = $old->getElementsByTagName($rootXmlElementName)->item(0);
        $newNode = $this->documentToValidate->importNode($oldNode, true);
        $this->documentToValidate->appendChild($newNode);

    }

    /**
     * @param string $dtdFileSource
     * @return $this Validator
     */
    public function setDtdFileSource($dtdFileSource)
    {
        $this->dtdFileSource = $dtdFileSource;
        return $this;
    }

}