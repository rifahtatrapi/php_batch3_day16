<?php


namespace App\classes;


class FileUpload
{
    public function __construct($post==null)
    {
        $this->image = $post;
    }
    public function index(){
        $this->imageName = $_FILES['image']['name'];
        $this->directory = 'assets/img/upload/'.$this->imageName;
        move_uploaded_file($_FILES['image']['tmp_name'], $this->directory);_
        echo 'success';
}

}