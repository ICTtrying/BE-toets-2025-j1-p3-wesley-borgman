<?php

class Zangers extends BaseController
{
    private $ZangersModel;

    public function __construct()
    {
        $this->ZangersModel = $this->model('ZangersModel');
    }


    public function index()
    {
        $result = $this->ZangersModel->getAllZangers();
        
        $data = [
            'title' => 'Overzicht Zangers',
            'Zangers' => $result
        ];

        $this->view('Zangers/index', $data);
    }

    public function delete($id)
    {
        
        if ($this->ZangersModel->deleteZangerById($id)) {
            // Redirect to the index page with a success message
            header('Location: ' . URLROOT . '/Zangers/index');
            exit();
        }
    }
}