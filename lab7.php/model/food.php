<?php


class Food
{
  private $id;
  private $title;
  private $imagePath;
  private $price;
  private $restaurantId;

  function __construct($id, $title, $imagePath, $price,  $restaurantId)
  {
    $this->id = $id;
    $this->title = $title;
    $this->imagePath = $imagePath;
    $this->price = $price;
    $this->restaurantId = $restaurantId;
  }


  function get_id()
  {
    return $this->id;
  }

  function get_title()
  {
    return $this->title;
  }

  function get_imagePath()
  {
    return $this->imagePath;
  }

  function get_price()
  {
    return $this->price;
  }

  function set_price($price)
  {
    $this->price = $price;
  }
  function set_id($id)
  {
    $this->id = $id;
  }

  function set_title($title)
  {
    $this->title = $title;
  }

  function set_imagePath($imagePath)
  {
    $this->imagePath = $imagePath;
  }

  function set_restaurantId($restaurantId)
  {
    $this->restaurantId = $restaurantId;
  }

  function get_restaurantId()
  {
    return $this->restaurantId;
  }
}
