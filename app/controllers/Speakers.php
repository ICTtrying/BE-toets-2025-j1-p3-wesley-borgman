<?php

class Speakers extends BaseController
{
    private $SpeakersModel;

    public function __construct()
    {
        $this->SpeakersModel = $this->model('SpeakersModel');
    }


    public function index()
    {
        $result = $this->SpeakersModel->getAllSpeakers();
        
        $data = [
            'title' => 'Overzicht Speakers',
            'Speakers' => $result
        ];

        $this->view('Speakers/index', $data);
    }
}