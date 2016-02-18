<?php


namespace ApiMktpNetshoesV1\model;

use \ArrayAccess;

class StatusResource implements ArrayAccess {
  static $swaggerTypes = array(
      'status' => 'string'
  );

  static $attributeMap = array(
      'status' => 'status'
  );

  
  public $status; /* string */

  public function __construct(array $data = null) {
    $this->status = $data["status"];
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
