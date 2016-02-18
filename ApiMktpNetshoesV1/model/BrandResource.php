<?php


namespace ApiMktpNetshoesV1\model;

use \ArrayAccess;

class BrandResource implements ArrayAccess {
  static $swaggerTypes = array(
      'code' => 'int',
      'name' => 'string',
      'external_code' => 'string',
      'links' => 'array[Link]'
  );

  static $attributeMap = array(
      'code' => 'code',
      'name' => 'name',
      'external_code' => 'externalCode',
      'links' => 'links'
  );

  
  public $code; /* int */
  public $name; /* string */
  public $external_code; /* string */
  public $links; /* array[Link] */

  public function __construct(array $data = null) {
    $this->code = $data["code"];
    $this->name = $data["name"];
    $this->external_code = $data["external_code"];
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
