<?php

class Parcel
{
    private $height;
    private $width;
    private $length;
    private $weight;




    function __construct($height, $length, $width, $weight)
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

    function volume($height, $width, $length)
    {
        return $this->height * $this->width * $this->length;
    }

    function totalPrice($volume, $weight)
    {
        return ($this->volume * 0.13) + ($this->weight * .25);
    }
}



// $parcels_total = array();
// foreach ($parcels as $parcel) {
//     $parcel_height = $parcel->getHeight();
//     $parcel_width = $parcel->getWidth();
//     $parcel_length = $parcel->getLength();
//       if ($car_price < $_GET["price"] && $car_mileage < $_GET["miles"]) {
//           array_push($cars_matching_search, $car);
//       }
//   }


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
    <p>Total: <?php echo $finalPrice; ?></p>
</body>
</html>
