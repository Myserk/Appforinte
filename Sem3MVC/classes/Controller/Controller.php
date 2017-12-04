<?php

include '/../model/comments.php';
include '/../model/login.php';
class Controller {
    private $login;
    private $comments;
    public function __construct() {
        $this->comments = new Comments();
        $this->login = new login();
        if(isset($_POST['delete'])){
            deleteComment($_POST['time']);
        }  

    }
    public function deleteComment($timestamp) {
        $this->comments->delComment($timestamp);
    }

    public function getComments($page) {
        $this->comments->getComments($page);
    }
    public function loginUser($username,$password){
        $this->login->loginUser($username,$password);
    }
    public function writeComment($comment,$username,$password){
        $this->comments->writeComment($comment,$username,$password);
    }
    public function registerUser($username,$password){
        $this->login->registerUser($username,$password);
    }
}
