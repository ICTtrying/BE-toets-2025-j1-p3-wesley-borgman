<?php

class TorensModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Deze methode haalt alle smartphone records op uit de database
     */
    public function getAllTorens()
    {
        $sql = 'SELECT  TRNS.Naam
                   ,TRNS.Locatie
                   ,TRNS.Hoogte
                   ,TRNS.AantalVerdiepingen
                   ,TRNS.JaarVoltooid

            FROM Torens as TRNS
            
            ORDER BY TRNS.Hoogte DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}