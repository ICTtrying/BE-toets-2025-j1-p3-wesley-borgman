<?php

class Torens extends BaseController
{
    private $TorensModel;

    public function __construct()
    {
        $this->TorensModel = $this->model('TorensModel');
    }


    public function index()
    {
        $result = $this->TorensModel->getAllTorens();
        
        $data = [
            'title' => 'Overzicht Torens',
            'Torens' => $result
        ];

        $this->view('Torens/index', $data);
    }
}