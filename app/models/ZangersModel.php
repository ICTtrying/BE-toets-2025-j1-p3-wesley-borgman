<?php

class ZangersModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Deze methode haalt alle smartphone records op uit de database
     */
    public function getAllZangers()
    {
        $sql = 'SELECT  ZRSS.Id
                   ,ZRSS.Naam
                   ,ZRSS.Nettowaarde
                   ,ZRSS.Land
                   ,ZRSS.Mobiel
                   ,ZRSS.Leeftijd
                   ,ZRSS.IsActief
                   ,ZRSS.Opmerking
                   ,ZRSS.DatumAangemaakt
                   ,ZRSS.DatumGewijzigd

            FROM Zangers as ZRSS
            
            ORDER BY ZRSS.Leeftijd DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }

    public function deleteZangerById($id)
    {
        //echo "Hoi";exit();
        $sql = 'DELETE FROM Zangers WHERE Id = :id';
        $this->db->query($sql);
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        return $this->db->execute();
    }
}
