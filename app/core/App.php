<?php

class App
{
	public $controller = 'HomeController';
	public $action = 'Index';
	public $params = [];

	public function __construct()
	{
		$url = $this->parseUrl();

		//cek apakah controller ada atau tidak
        if (file_exists('app/controllers/' . $url[0] . 'Controller.php')) {
            $this->controller = $url[0] . 'Controller';
            unset($url[0]);
        }

        //memanggil file controller dan membuat instance class
        require_once('app/controllers/' . $this->controller . '.php');
        $this->controller = new $this->controller;

        //cek apakah method ada di controller
        if (isset($url[1])){
            if (method_exists($this->controller, $url[1])) {
                $this->action = $url[1];
                unset($url[1]);
            }
        }

        //cek apakah parameter ada atau tidak
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        //memanggil fungsi dan memberikan parameter
        call_user_func_array([$this->controller, $this->action], $this->params);
	}

	public function parseUrl()
	{
		if (isset($_GET['url'])) {
			$url = $_GET['url'];
            //membuang garis miring diakhir string
            $url = rtrim($url, '/');
            //Membersihkan url dari karakter yang tidak valid
            $url = filter_var($url, FILTER_SANITIZE_URL);
            //memecah string menjadi array berdasarkan garis miring
            $url = explode('/', $url);
            
            return $url;
		}
	}
}
