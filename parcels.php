<?php

class Parcel
{
    private $height;
    private $width;
    private $length;
    private $weight;




    function __construct($height, $width, $length, $weight)
    {
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
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

    function setLength($new_length)
    {
      $this->length = $new_length;
    }

    function getLength()
    {
      return $this->length;
    }

    function setWeight($new_weight)
    {
      $this->weight = $new_weight;
    }

    function getWeight()
    {
      return $this->weight;
    }

    function volume()
    {
        return $this->height * $this->width * $this->length;
    }

    function totalPrice()
    {
        return ($this->volume() * 0.13) + ($this->weight * .25);
    }
}

// function volume($object)
// { THIS IS ALSO AN OPTION IF YOU WANT TO APPLY THE VOLUME FUNCTION TO MORE THAN ONE CLASS
//   $h = $object->getHeight();
//   $w = $object->getWidth();
//   $l = $object->getLength();
//   $v = $h * $w * $l;
//   return $v;
// }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pricing</title>
</head>
<body>
    <h1>Here is yo shipping cost</h1>
    <?php
        $object = new Parcel($_GET["height"], $_GET["length"], $_GET["width"], $_GET["weight"]);
        $object_volume = $object->volume();
        $object_weight = $object->getWeight();
        $finalPrice = $object->totalPrice();
    ?>
    <p>Volume of package: <?php echo $object_volume; ?></p>
    <p>Weight: <?php echo $object_weight; ?></p>
    <p>Total: <?php echo '$'. $finalPrice; ?></p>
</body>
</html>
