<?php
/**
 * Created by PhpStorm.
 * User: janjaap
 * Date: 05-02-18
 * Time: 20:28
 */

class Auto
{

    private $Kenteken;
    private $Merk;
    private $Type;
    private $DatumAPK;
    private $Kilometerstand;

    public function __construct() {

    }

    /**
     * @return mixed
     */
    public function getKenteken()
    {
        return $this->Kenteken;
    }

    /**
     * @param mixed $Kenteken
     */
    public function setKenteken($Kenteken)
    {
        $this->Kenteken = $Kenteken;
    }

    /**
     * @return mixed
     */
    public function getMerk()
    {
        return $this->Merk;
    }

    /**
     * @param mixed $Merk
     */
    public function setMerk($Merk)
    {
        $this->Merk = $Merk;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @param mixed $Type
     */
    public function setType($Type)
    {
        $this->Type = $Type;
    }

    /**
     * @return mixed
     */
    public function getDatumAPK()
    {
        return $this->DatumAPK;
    }

    /**
     * @param mixed $DatumAPK
     */
    public function setDatumAPK($DatumAPK)
    {
        $this->DatumAPK = $DatumAPK;
    }

    /**
     * @return mixed
     */
    public function getKilometerstand()
    {
        return $this->Kilometerstand;
    }

    /**
     * @param mixed $Kilometerstand
     */
    public function setKilometerstand($Kilometerstand)
    {
        $this->Kilometerstand = $Kilometerstand;
    }



}