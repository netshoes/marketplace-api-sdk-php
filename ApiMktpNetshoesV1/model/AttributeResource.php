<?php


namespace ApiMktpNetshoesV1\model;

use \ArrayAccess;

class AttributeResource implements ArrayAccess {
  static $swaggerTypes = array(
      'name' => 'string',
      'value' => 'string',
      'links' => 'array[Link]'
  );

  static $attributeMap = array(
      'name' => 'name',
      'value' => 'value',
      'links' => 'links'
  );

  
  public $name; /* string */
  public $value; /* string */
  public $links; /* array[Link] */

  public function __construct(array $data = null) {
    $this->name = $data["name"];
    $this->value = $data["value"];
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
