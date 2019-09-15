<?php

class HomeController extends Controller
{
    public function Index()
    {
    	$data = $this->model('siswa')->All();

    	$this->view('Home/Index', $data);
    }

    public function Create()
    {
    	$this->view('Home/Create');
    }

    public function Store()
    {
    	if (isset($_POST['NIS'])) {
	    	$data = [
	    		"NIS" => $_POST['NIS'],
	    		"Nama" => $_POST['Nama'],
	    	];

	    	$data = $this->model('siswa')->Store($data);
    	}

    	Header('Location: ' . BASE_URL);
    }

    public function Edit($id)
    {
    	$data = $this->model('siswa')->Find($id);

    	$this->view('Home/Edit', $data);
    }

    public function Update()
    {
    	if (isset($_POST['NIS'])) {
    		$data = [
	    		"NIS" => $_POST['NIS'],
	    		"Nama" => $_POST['Nama'],
	    	];

	    	$data = $this->model('siswa')->Update($data);
    	}
    	
    	Header('Location: ' . BASE_URL);
    }
}