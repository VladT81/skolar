<?php

class ctrl
{
    public function __construct()
    {
        $this->bd = new db();
        if(!empty($_COOKIE['a_id']) && !empty($_COOKIE['a_key'])){
            $this->admin = $this->bd->query("SELECT * FROM admin WHERE id=? AND cookie=?", $_COOKIE['a_id'], $_COOKIE['a_key'])->assoc();
        } else {
            $this->admin = false;
            if(!empty($_COOKIE['u_id']) && !empty($_COOKIE['u_key'])){
                $this->user = $this->bd->query("SELECT * FROM users WHERE id=? AND cookie=?", $_COOKIE['u_id'], $_COOKIE['u_key'])->assoc();
            } else {
                $this->user = false;
            }
        }
    }

    public function path($str){
        $str = substr($str, 1, strlen($str)-1);
        return $str;
    }


    public function out ($tplName, $nested=false)
    {
        if(!$nested) {

            $this->tpl = $tplName;
            include "tpl/main.php";
        } else
            include "tpl/".$tplName;
    }
}

class app
{
    public function __construct($path)
    {
        $path = substr($path, 2);
        $this->rout = explode('/', $path);
        $this->run();
    }

    private function run()
    {
        $url = array_shift($this->rout);
        if(!preg_match('#^[a-zA-z0-9.,-]*$#', $url)) throw new Exception('Invalid path');
        $ctrlName = 'ctrl'.ucfirst($url);
        if(file_exists('app/'.$ctrlName))
        {
            $this->runController($ctrlName);
        } else
        {
            array_unshift($this->rout, $url);
            $this->runController(ctrlIndex);
        }
    }

    private function runController($ctrlName)
    {
        include 'app/'.$ctrlName.'.php';

        $ctrl = new $ctrlName();

        if(empty($this->rout) || empty($this->rout[0]))
        {
            $ctrl->index();
        }
        else
        {
            if(empty($this->rout)) $method = 'index';
            else $method = array_shift($this->rout);
            if(method_exists($ctrl, $method))
            {
                if(empty($this->rout))
                    $ctrl->$method();
                else{
                    call_user_func_array(array($ctrl, $method), $this->rout);
                }


            }
            else throw new Exception('Error 404');
        }
    }
}