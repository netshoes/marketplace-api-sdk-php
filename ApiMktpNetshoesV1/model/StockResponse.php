<?php


namespace ApiMktpNetshoesV1\model;

use \ArrayAccess;

class StockResponse implements ArrayAccess {
  static $swaggerTypes = array(
      'country' => 'string',
      'available' => 'int',
      'total' => 'int',
      'reserved' => 'int',
      'links' => 'array[Link]'
  );

  static $attributeMap = array(
      'country' => 'country',
      'available' => 'available',
      'total' => 'total',
      'reserved' => 'reserved',
      'links' => 'links'
  );

  
  public $country; /* string */
  public $available; /* int */
  public $total; /* int */
  public $reserved; /* int */
  public $links; /* array[Link] */

  public function __construct(array $data = null) {
    $this->country = $data["country"];
    $this->available = $data["available"];
    $this->total = $data["total"];
    $this->reserved = $data["reserved"];
    $this->links = $data["links"];
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
