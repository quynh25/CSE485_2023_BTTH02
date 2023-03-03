<?php
class Author{
    // Thuộc tính

    private $name_auth;
    private $img_auth;


    public function __construct($name_auth, $img_auth){
        $this->name_auth = $name_auth;
        $this->img_auth = $img_auth;
    }

    // Setter và Getter
    public function name_auth(){
        return $this->name_auth;
    }
    public function img_auth(){
        return $this->img_auth;
    }
}
?>