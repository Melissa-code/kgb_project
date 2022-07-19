<?php

class Mission {

    /* ************ Attributes ********* */ 
    private $error = []; 
    private $code; 
    private $title; 
    private $description; 
    private $country; 
    private $duration; 
    private $status; 
    private $type; 

    const INVALID_CODE = 1;
    const INVALID_TITLE = 2;
    const INVALID_COUNTRY = 3;

    /* ************ Constructor ********* */ 
    public function __construct($data = []) {
        if(!empty($data)){
            $this->hydrate($data);
        }
        
    }


    /* ************ Hydrate ********* */ 
    public function hydrate($data) {
        foreach($data as $attribute => $value) {
            $setterMethod = 'set'.ucfirst($attribute); 
            if(method_exists($this, $setterMethod)){
                $this->$setterMethod($value);
            }
        }
    }


    /* ************ Getter & Setter ********* */ 

    // error 
    public function getError(){return $this->error;}
    public function setError($error) {$this->error = $error;return $this;}

    // code
    public function getCode(){return $this->code;}

    public function setCode($code){
        if(!is_string($code) || empty($code)) {
            $this->error[] = self::INVALID_CODE;
        } else {
            $this->code = (string) $code;
            return $this;
        }
    }

    // title
    public function getTitle(){return $this->title;}

    public function setTitle($title){
        if(!is_string($title) || empty($title) || strlen($title) < 3 || strlen($title) > 100){
            $this->error[] = self::INVALID_TITLE;
        } else {
            $this->title = $title;
            return $this;
        }
    }

    // description
    public function getDescription(){return $this->description;}
    public function setDescription($description){$this->description = $description;return $this;}

    // country
    public function getCountry(){return $this->country;}

    public function setCountry($country){
        if(!is_string($country) || empty($country)) {
            $this->error[] = self::INVALID_COUNTRY ;
        } else {
            $this->code = (string) $country;
            return $this;
        }
    }
  

    // duration
    public function getDuration(){return $this->duration;}
    public function setDuration($duration){$this->duration = $duration;return $this; }

    // status
    public function getStatus(){return $this->status;}
    public function setStatus($status){$this->status = $status;return $this;}

    // type
    public function getType(){return $this->type;}
    public function setType($type){$this->type = $type;return $this;}


    
    /* ************ Methods ********* */ 

    public function isMissionValid() {
        return !empty($this->code) || !empty($this->title) || !empty($this->country);
    }

 
}



?>

