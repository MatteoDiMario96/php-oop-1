<?php 

class Genre {
    public $name;
    public $description;
    public $origin;
    public $popularity;

    public function __construct($_name, $_description, $_origin, $_popularity){
        $this->name = $_name;
        $this->description = $_description;
        $this->origin = $_origin;
        $this->popularity = $_popularity;
    }
}

?>