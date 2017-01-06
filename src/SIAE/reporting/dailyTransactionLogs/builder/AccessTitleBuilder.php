<?php

namespace SIAE\reporting\dailyTransactionLogs\builder;


use SIAE\reporting\dailyTransactionLogs\model\AccessTitle;
use SIAE\common\builder\IBuilder;


class AccessTitleBuilder implements IBuilder
{

    /**
     * @var AccessTitle
     */
    private $accessTitle;


    public function __construct()
    {
        $this->accessTitle = new AccessTitle();
    }

    /**
     * @param $issueSystem
     * @return $this
     */
    public function issueSystem($issueSystem)
    {
        $this->accessTitle->setIssueSystem($issueSystem);
        return $this;
    }

    /**
     * @param $activationCard
     * @return $this
     */
    public function activationCard($activationCard)
    {
        $this->accessTitle->setActivationCard($activationCard);
        return $this;
    }

    /**
     * @param $autoIncrementedFiscalNumber
     * @return $this
     */
    public function autoIncrementedFiscalNumber($autoIncrementedFiscalNumber)
    {
        $this->accessTitle->setAutoIncrementedFiscalNumber($autoIncrementedFiscalNumber);
        return $this;
    }

    /**
     * @param $fiscalSigilloCode
     * @return $this
     */
    public function fiscalSigilloCode($fiscalSigilloCode)
    {
        $this->accessTitle->setFiscalSigilloCode($fiscalSigilloCode);
        return $this;
    }

    /**
     * @param $issuedDate
     * @return $this
     */
    public function issuedDate($issuedDate)
    {
        $this->accessTitle->setIssuedDate($issuedDate);
        return $this;
    }

    /**
     * @param $issuedTime
     * @return $this
     */
    public function issuedTime($issuedTime)
    {
        $this->accessTitle->setIssuedTime($issuedTime);
        return $this;
    }

    /**
     * @param $ltaDate
     * @return $this
     */
    public function ltaDate($ltaDate)
    {
        $this->accessTitle->setLtaDate($ltaDate);
        return $this;
    }

    /**
     * @param $ltaTime
     * @return $this
     */
    public function ltaTime($ltaTime)
    {
        $this->accessTitle->setLtaTime($ltaTime);
        return $this;
    }

    /**
     * @param $titleType
     * @return $this
     */
    public function titleType($titleType)
    {
        $this->accessTitle->setTitleType($titleType);
        return $this;
    }

    /**
     * @param $orderCode
     * @return $this
     */
    public function orderCode($orderCode)
    {
        $this->accessTitle->setOrderCode($orderCode);
        return $this;
    }

    /**
     * @param $gross
     * @return $this
     */
    public function gross($gross)
    {
        $this->accessTitle->setGross($gross);
        return $this;
    }

    /**
     * @param $abonement
     * @return $this
     */
    public function abonement($abonement)
    {
        $this->accessTitle->setAbonement($abonement);
        return $this;
    }

    /**
     * @param $abonementFiscalCode
     * @return $this
     */
    public function abonementFiscalCode($abonementFiscalCode)
    {
        $this->accessTitle->setAbonementFiscalCode($abonementFiscalCode);
        return $this;
    }

    /**
     * @param $abonementCode
     * @return $this
     */
    public function abonementCode($abonementCode)
    {
        $this->accessTitle->setAbonementCode($abonementCode);
        return $this;
    }

    /**
     * @param $validatedEventsNumber
     * @return $this
     */
    public function validatedEventsNumber($validatedEventsNumber)
    {
        $this->accessTitle->setValidatedEventsNumber($validatedEventsNumber);
        return $this;
    }

    /**
     * @param $incrementedAbonement
     * @return $this
     */
    public function incrementedAbonement($incrementedAbonement)
    {
        $this->accessTitle->setIncrementedAbonement($incrementedAbonement);
        return $this;
    }

    /**
     * @param $isNulled
     * @return $this
     */
    public function isNulled($isNulled)
    {
        $this->accessTitle->setIsNulled($isNulled);
        return $this;
    }

    /**
     * The format is YYYYMMDD.
     * @param $nulledDate
     * @return $this
     */
    public function nulledDate($nulledDate)
    {
        $this->accessTitle->setNulledDate($nulledDate);
        return $this;
    }

    /**
     * The format is HHMM.
     * @param $nulledHour
     * @return $this
     */
    public function nulledHour($nulledHour)
    {
        $this->accessTitle->setNulledHour($nulledHour);
        return $this;
    }

    /**
     * @param $nulledActivationCard
     * @return $this
     */
    public function nulledActivationCard($nulledActivationCard)
    {
        $this->accessTitle->setNulledActivationCard($nulledActivationCard);
        return $this;
    }

    /**
     * Nulled progressive number of the title or abonement.
     * @param $nulledProgressiveFiscalCode
     * @return $this
     */
    public function nulledProgressiveFiscalCode($nulledProgressiveFiscalCode)
    {
        $this->accessTitle->setNulledProgressiveFiscalCode($nulledProgressiveFiscalCode);
        return $this;
    }

    /**
     * @param $nulledSigilloFiscalCode
     * @return $this
     */
    public function nulledSigilloFiscalCode($nulledSigilloFiscalCode)
    {
        $this->accessTitle->setNulledSigilloFiscalCode($nulledSigilloFiscalCode);
        return $this;
    }


    /**
     * @param $supportCode
     * @return $this
     */
    public function supportCode($supportCode)
    {
        $this->accessTitle->setSupportCode($supportCode);
        return $this;
    }


    /**
     * @param $supportId
     * @return $this
     */
    public function supportId($supportId)
    {
        $this->accessTitle->setSupportId($supportId);
        return $this;
    }


    /**
     * State title. The values allowed are the followings:
     * VT = Valid (titolo tradizionale)
     * VD = Valid (titolo digitale)
     * ZT = Accesso automatizz. tit. tradizionale
     * ZD = Accesso automatizzato digitale
     * MT = Accesso Manuale tit. tradizionale
     * MD = Accesso Manuale tit. digitale
     * DT = Daspato tit. tradizionale
     * DD = Daspato tit. digitale
     * FT = Denuncia furto per tit. tradizionale
     * FD = Denuncia furto per tit. digitale
     * AT = Annullato tit. tradizionale
     * AD = Annullato tit. digitale
     * BT = Black List a disposizione dell’organizzatore per tit.
     * tradizionali
     * BD = Black list a disposizione dell’organizzatore per tit. digitali
     * @param $state string
     * @return $this
     */
    public function state($state)
    {
        $this->accessTitle->setState($state);
        return $this;
    }

    /**
     * The format is HHMMSS.
     * @param $intakeTime
     * @return $this
     */
    public function intakeTime($intakeTime)
    {
        $this->accessTitle->setIntakeTime($intakeTime);
        return $this;
    }

    /**
     * @param $intakeHour
     * @return $this
     */
    public function intakeHour($intakeHour)
    {
        $this->accessTitle->setIntakeHour($intakeHour);
        return $this;
    }

    /**
     * @param $supportIdAlt
     * @return $this
     */
    public function supportIdAlt($supportIdAlt)
    {
        $this->accessTitle->setSupportIdAlt($supportIdAlt);
        return $this;
    }


    /**
     * @param $place
     * @return $this
     */
    public function place($place)
    {
        $this->accessTitle->setPlace($place);
        return $this;
    }

    /**
     * @return AccessTitle model
     */
    public function build()
    {
        return $this->accessTitle;
    }
}