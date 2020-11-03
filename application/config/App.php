<?php
class App
{
    protected $controller = "home";
    protected $action = "show";
    protected $params;

    public function __construct()
    {
        $arr = $this->handleUrl();

        if ($arr != -1) { // has url after domain name
            //    handle Controller

            // if file controller exist in folder
            if (file_exists("./application/controllers/" . $arr[0] . ".php")) {
                $this->controller = $arr[0];

                $this->callPage();

                unset($arr[0]); // destroy $arr[0] but still remain $arr's index
            } else {
                $this->handlePageNotFound();
                return;
            }

            //    handle Action
            if (isset($arr[1])) { // if url has action
                if (method_exists($this->controller, $arr[1])) { // if class $this->controller has method $arr[1]
                    $this->action = $arr[1];
                } else {
                    $this->handlePageNotFound();
                    return;
                }
                unset($arr[1]);
            }

            //    handle Params
            $this->params = $arr ? array_values($arr) : []; // all element in $arr except the elements are destroyed

            // call function in corresponding controller
            call_user_func_array([$this->controller, $this->action], $this->params);
        } else {
            $this->callPage();

            call_user_func([$this->controller, $this->action]);
        }
    }

    public function handleUrl()
    {
        if (isset($_GET["url"])) { // if url has url
            $str = preg_replace('/-/', '', $_GET["url"]); // return - character in URL
            return explode("/-", filter_var(trim($str, "/"))); // return array with elements are separated by /
        } else {
            return -1;
        }
    }

    public function handlePageNotFound()
    {
        $this->controller = "p404";

        $this->callPage();

        call_user_func([$this->controller, $this->action]);
    }

    public function callPage()
    {
        require_once "./application/controllers/" . $this->controller . ".php";

        $this->controller = new $this->controller;
    }
}
