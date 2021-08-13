<?php

class Restaurant
{
  private $id;
  private $title;
  private $imagePath;
  private $description;

  function __construct($id, $title, $imagePath, $description)
  {
    $this->id = $id;
    $this->title = $title;
    $this->imagePath = $imagePath;
    $this->description = $description;
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

  function get_description()
  {
    return $this->description;
  }

  function set_description($description)
  {
    $this->description = $description;
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
}
