<?php

class BucketlistModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Deze methode haalt alle smartphone records op uit de database
     */
    public function getAllBucketlist()
    {
        $sql = 'SELECT  BTLT.Activiteit
                       ,BTLT.begintijd
                       ,BTLT.eindtijd

                FROM Bucketlist as BTLT
                
                ORDER BY BTLT.begintijd DESC';

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}