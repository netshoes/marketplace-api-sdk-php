<?php


namespace ApiMktpNetshoesV1\model;

use \ArrayAccess;

class ErrorResource implements ArrayAccess {
  static $swaggerTypes = array(
      'type' => 'string',
      'description' => 'string',
      'notifications' => 'array[string]'
  );

  static $attributeMap = array(
      'type' => 'type',
      'description' => 'description',
      'notifications' => 'notifications'
  );

  
  public $type; /* string */
  public $description; /* string */
  public $notifications; /* array[string] */

  public function __construct(array $data = null) {
    $this->type = $data["type"];
    $this->description = $data["description"];
    $this->notifications = $data["notifications"];
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
