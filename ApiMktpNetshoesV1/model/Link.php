<?php


namespace ApiMktpNetshoesV1\model;

use \ArrayAccess;

class Link implements ArrayAccess {
  static $swaggerTypes = array(
      'rel' => 'string',
      'href' => 'string'
  );

  static $attributeMap = array(
      'rel' => 'rel',
      'href' => 'href'
  );

  
  public $rel; /* string */
  public $href; /* string */

  public function __construct(array $data = null) {
    $this->rel = $data["rel"];
    $this->href = $data["href"];
  }

  public function offsetExists($offset) {
    return isset($this->$offset);
  }

  public function offsetGet($offset) {
    return $this->$offset;
  }

  public function offsetSet($offset, $value) {
    $this->$offset = $value;
  }

  public function offsetUnset($offset) {
    unset($this->$offset);
  }
}
