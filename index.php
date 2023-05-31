<?php

class Movie{
    public $title;
    public $genre;

    public function __construct(  $title, $genre ){
        $this->title = $title;
        $this->genre = $genre;
    }

    public function setTitle( $titleValue ){
        $this->title = $titleValue;
    }

    public function getTitle(){
        return $this->title;
    }
}

$matrix = new Movie( 'Matrix', 'science fiction' );
$vforvendetta = new Movie( 'V for Vendetta', 'science fiction'); 
$lotr = new Movie( 'Lord of the Ring', 'fantasy'); 


var_dump( $matrix, $vforvendetta, $lotr);

echo $matrix->getTitle();
$vforvendetta->setTitle('V per Vendetta');

var_dump($vforvendetta);

?>