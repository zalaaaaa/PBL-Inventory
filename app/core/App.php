<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
class App
{
    protected $isLogin = false;
    protected $controller = "home";
    protected $method = "index";
    protected $params = [];
    public function __construct()
    {
        
        $url = $this->parseUrl();
        if (file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }
        
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;
        
        // pengecekan method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }
        // pengecekan parameter
        if (!empty($url)) {
            $this->params = array_values($url);
        }
        // menjalankan method pada controller serta mengirimkan parameter jika ada

        call_user_func_array([$this->controller, $this->method], $this->params);
        // var_dump($this->controller);
        // var_dump($url);
 
    }
    public function parseUrl()
    {
        if (isset($_GET["url"])) {
            $url = rtrim($_GET["url"], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
