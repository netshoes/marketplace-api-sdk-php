<?php


namespace ApiMktpNetshoesV1\model;

use \ArrayAccess;

class TemplateResource implements ArrayAccess {
  static $swaggerTypes = array(
      'code' => 'int',
      'name' => 'string',
      'links' => 'array[Link]'
  );

  static $attributeMap = array(
      'code' => 'code',
      'name' => 'name',
      'links' => 'links'
  );

  
  public $code; /* int */
  public $name; /* string */
  public $links; /* array[Link] */

  public function __construct(array $data = null) {
    $this->code = $data["code"];
    $this->name = $data["name"];
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
