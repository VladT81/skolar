<?php

class ctrlIndex extends ctrl
{

    /**
     * Главная страница
     *
     *
     *
     */
    function index()
    {
        $this->out("home.php");

        ;//$this->posts = $this->bd->query("SELECT * FROM post ORDER BY ctime DESC")->all();

        //$this->out("posts.php")
    }

    /**
     * Страница
     * "МОИ РАБОТЫ"
     *
     *
     */
    function employes($dep=false, $pagination = 20)
    {
        if(is_int($dep)){
            $pagination = $dep;
            $dep = false;
        }
        if(!$dep){
            $this->arr = $this->bd->query("SELECT * FROM collective INNER JOIN main_depatment ON collective.id = main_depatment.id_col INNER JOIN payment ON collective.id = payment.id_col
                                UNION ALL SELECT * FROM collective INNER JOIN depatment1 ON collective.id = depatment1.id_col INNER JOIN payment ON collective.id = payment.id_col
                                UNION ALL SELECT * FROM collective INNER JOIN depatment2 ON collective.id = depatment2.id_col INNER JOIN payment ON collective.id = payment.id_col
                                UNION ALL SELECT * FROM collective INNER JOIN depatment3 ON collective.id = depatment3.id_col INNER JOIN payment ON collective.id = payment.id_col
                                UNION ALL SELECT * FROM collective INNER JOIN depatment4 ON collective.id = depatment4.id_col INNER JOIN payment ON collective.id = payment.id_col
                                WHERE on_off = 'y'")->all();
            //$this->bd->query("INSERT INTO collective VALUES ('name=?')",$str);
            //print_r($arr);

        }else if($dep=='[administration]'){
            $this->arr = $this->bd->query("SELECT * FROM collective INNER JOIN main_depatment ON collective.id = main_depatment.id_col INNER JOIN payment ON collective.id = payment.id_col WHERE on_off = 'y'")->all();
        }else if($dep=='[depatment1]'){
            $this->arr = $this->bd->query("SELECT * FROM collective INNER JOIN depatment1 ON collective.id = depatment1.id_col INNER JOIN payment ON collective.id = payment.id_col WHERE on_off = 'y'")->all();
        }else if($dep=='[depatment2]'){
            $this->arr = $this->bd->query("SELECT * FROM collective INNER JOIN depatment2 ON collective.id = depatment2.id_col INNER JOIN payment ON collective.id = payment.id_col WHERE on_off = 'y'")->all();
        }else if($dep=='[depatment3]'){
            $this->arr = $this->bd->query("SELECT * FROM collective INNER JOIN depatment3 ON collective.id = depatment3.id_col INNER JOIN payment ON collective.id = payment.id_col WHERE on_off = 'y'")->all();
        }else if($dep=='[depatment4]'){
            $this->arr = $this->bd->query("SELECT * FROM collective INNER JOIN depatment4 ON collective.id = depatment4.id_col INNER JOIN payment ON collective.id = payment.id_col WHERE on_off = 'y'")->all();
        }
        $this->out("employes.php");

    }
}