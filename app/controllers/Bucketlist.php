<?php

class Bucketlist extends BaseController
{
    private $BucketlistModel;

    public function __construct()
    {
        $this->BucketlistModel = $this->model('BucketlistModel');
    }


    public function index()
    {
        $result = $this->BucketlistModel->getAllBucketlist();
        
        $data = [
            'title' => 'Overzicht Bucketlist',
            'Bucketlist' => $result
        ];

        $this->view('Bucketlist/index', $data);
    }
}