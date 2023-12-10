<?php
if (session_status() == PHP_SESSION_NONE) {
}

class App
{
    protected $controller = "login";
    protected $method = "index";
    protected $params = [];

    public function __construct()
    {
        session_start();

        $url = $this->parseUrl();

        if (empty($url[0])) {
            // Default to the login controller
            require_once '../app/controllers/login.php';
            $this->controller = new login();
            $this->controller->index();
            return;
        }

        // Cek apakah pengguna sudah login
        if (isset($_SESSION['isLogin'])) {
            // Pengguna sudah login, izinkan akses ke semua controller
            if (!empty($url)) {
                if (file_exists('../app/controllers/' . $url[0] . '.php')) {
                    $this->controller = $url[0];
                    unset($url[0]);
                }

                require_once '../app/controllers/' . $this->controller . '.php';
                $this->controller = new $this->controller;

                if (isset($url[1])) {
                    if (method_exists($this->controller, $url[1])) {
                        $this->method = $url[1];
                        unset($url[1]);
                    }
                }

                $this->params = array_values($url);
                call_user_func_array([$this->controller, $this->method], $this->params);
            }
        } else {
            // Pengguna belum login, batasi akses hanya ke controller login
            require_once '../app/controllers/login.php';
            $this->controller = new $this->controller;

            if (isset($url[1]) && $url[0] === 'login' && method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }

            $this->params = array_values($url);  
            call_user_func_array([$this->controller, $this->method], $this->params);
        }
    }

    public function parseUrl()
    {
        if (isset($_GET["url"])) {
            $url = rtrim($_GET["url"], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            return explode('/', $url);
        } else {
            return [];
        }
    }
    
}
