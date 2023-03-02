<?php
class Category{
    // Thuộc tính

    private $ma_tloai;
    private $ten_tloai;


    public function __construct($title, $ma_tloai,$ten_tloai){
        $this->ma_tloai = $ma_tloai;
        $this->ten_tloai = $ten_tloai;
    }

    // Setter và Getter
    public function getMatloai(){
        return $this->ma_tloai;
    }

    public function getTentloai(){
        return $this->ten_tloai;
    }

    public function setTentloai($ten_tloai_new){
        $this->ten_tloai = $ten_tloai_new;
    }
}