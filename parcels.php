<?php

class Parcel
{
    private $height;
    private $width;
    private $weight;

    function __construct($height, $width, $weight)
    {
        $this->height = $height;
        $this->width = $width;
        $this->weight = $weight;
    }

    function setHeight($new_height)
    {
      $this->height = $new_height;
    }

    function getHeight()
    {
      return $this->height;
    }

    function setWidth($new_width)
    {
      $this->width = $new_width;
    }

    function getWidth()
    {
      return $this->width;
    }

    function setWeight($new_weight)
    {
      $this->weight = $new_weight;
    }

    function getWeight()
    {
      return $this->weight;
    }

}
?>
