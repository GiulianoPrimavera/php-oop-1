<?php 
class Movie {
    public $title;
    public $language;
    public $votes;

    public $cover;

    function __construct ($_title = null, $_language = null, $_votes = null){
        //controllo se il titolo inserito è numero o stringa
        if(is_string($_title)){
            $this->title = $_title;
        }else{
            $this->title = null; 
        }
        
        //controllo se la lingua inserita è numero o stringa
        if(is_string($_language)){
            $this->language = $_language;
        }else{
            $this->language = null; 
        }


        if(is_numeric($_votes)){
            $this->votes = $_votes;
        }else{
            $this->votes = null;
        }
    }

    // public function setTitle(){

    // }

    public function buildCover(){
        return $this->cover = $this->title . ", " . $this->language . ", " . $this->votes;
    }
}
?>