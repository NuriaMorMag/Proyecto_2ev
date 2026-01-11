<?php
class Gallery
{
    public $id;
    public $file;
    public $alt;
    public $category;
    public $commentary;

    // Getter con método mágico 
    public function __get($attribute)
    {
        if (property_exists($this, $attribute)) {
            return $this->$attribute;
        }
    }

    // Setter con método mágico 
    public function __set($attribute, $value)
    {
        if (property_exists($this, $attribute)) {
            $this->$attribute = $value;
        }
    }
}
