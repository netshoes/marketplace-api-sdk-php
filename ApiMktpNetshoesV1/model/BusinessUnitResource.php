<?php


namespace ApiMktpNetshoesV1\model;

use \ArrayAccess;

class BusinessUnitResource implements ArrayAccess {
  static $swaggerTypes = array(
      'active' => 'boolean',
      'links' => 'array[Link]'
  );

  static $attributeMap = array(
      'active' => 'active',
      'links' => 'links'
  );

  
  public $active; /* boolean */
  public $links; /* array[Link] */

  public function __construct(array $data = null) {
    $this->active = $data["active"];
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
