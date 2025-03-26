<?php

class Horloges extends BaseController
{
    private $HorlogesModel;

    public function __construct()
    {
        $this->HorlogesModel = $this->model('HorlogesModel');
    }


    public function index()
    {
        $result = $this->HorlogesModel->getAllHorloges();
        
        $data = [
            'title' => 'Overzicht Horloges',
            'Horloges' => $result
        ];

        $this->view('Horloges/index', $data);
    }
}