<?php

class UFCmodel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Deze methode haalt alle smartphone records op uit de database
     */
    public function getAllUFC()
    {
        $sql = 'SELECT  UFCS.Naam
                       ,UFCS.RanglijstNummer
                       ,UFCS.Lengte
                       ,UFCS.Gewicht
                       ,UFCS.Leeftijd
                       ,UFCS.WinstDoorKnockout

                FROM UFC as UFCS
                
                ORDER BY UFCS.RanglijstNummer ASC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}