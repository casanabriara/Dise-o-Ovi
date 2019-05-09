<?php


class HomeController{

    public function Index(){
        require_once PATH_TO_VIEWS.'/header.php';
        require_once PATH_TO_VIEWS.'/menu.php';
        require_once PATH_TO_VIEWS.'/home.php';
        require_once PATH_TO_VIEWS.'/footer.php';
    }
}
