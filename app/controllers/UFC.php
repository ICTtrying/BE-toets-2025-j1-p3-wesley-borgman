<?php

class UFC extends BaseController
{
    private $UFCmodel;

    public function __construct()
    {
        $this->UFCmodel = $this->model('UFCmodel');
    }


    public function index()
    {
        $result = $this->UFCmodel->getAllUFC();
        
        $data = [
            'title' => 'UFC mens pound for pound',
            'UFC' => $result
        ];

        $this->view('UFC/index', $data);
    }
}