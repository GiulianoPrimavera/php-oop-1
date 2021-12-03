<?php 
class Movie {
    public $title;
    public $language;
    public $votes;

    public $cover;

    function __construct ($_title = null, $_language = null, $_votes = null){        
        $this->setTitle($_title);
        
        $this->setLanguage($_language);

        $this->setvotes($_votes);
    }

    public function setTitle($value){
        //controllo se il titolo inserito è numero o stringa
        if(is_string($value)){
            $this->title = $value;
        }else{
            $this->title = null; 
        }
    }

    public function setLanguage($value){
        //controllo se la lingua inserita è numero o stringa
        if(is_string($value)){
            $this->language = $value;
        }else{
            $this->language = null; 
        }
    }

    public function setvotes($value){
        if(is_numeric($value)){
            $this->votes = $value;
        }else{
            $this->votes = null;
        }
    }

    public function buildCover(){
        return $this->cover = $this->title . ", " . $this->language . ", " . $this->votes;
    }
}
?>