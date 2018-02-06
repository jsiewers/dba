<?php
/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 05-02-18
 * Time: 20:52
 */

class Huurder
{
    private $Huurdernr;
    private $Naam;
    private $Adres;
    private $Postcode;
    private $Plaats;

    public function __construct() {

    }

    /**
     * @return mixed
     */
    public function getHuurdernr()
    {
        return $this->Huurdernr;
    }

    /**
     * @param mixed $Huurdernr
     */
    public function setHuurdernr($Huurdernr)
    {
        $this->Huurdernr = $Huurdernr;
    }

    /**
     * @return mixed
     */
    public function getNaam()
    {
        return $this->Naam;
    }

    /**
     * @param mixed $Naam
     */
    public function setNaam($Naam)
    {
        $this->Naam = $Naam;
    }

    /**
     * @return mixed
     */
    public function getAdres()
    {
        return $this->Adres;
    }

    /**
     * @param mixed $Adres
     */
    public function setAdres($Adres)
    {
        $this->Adres = $Adres;
    }

    /**
     * @return mixed
     */
    public function getPostcode()
    {
        return $this->Postcode;
    }

    /**
     * @param mixed $Postcode
     */
    public function setPostcode($Postcode)
    {
        $this->Postcode = $Postcode;
    }

    /**
     * @return mixed
     */
    public function getPlaats()
    {
        return $this->Plaats;
    }

    /**
     * @param mixed $Plaats
     */
    public function setPlaats($Plaats)
    {
        $this->Plaats = $Plaats;
    }
}