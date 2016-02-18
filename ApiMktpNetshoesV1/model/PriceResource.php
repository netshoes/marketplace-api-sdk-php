<?php


namespace ApiMktpNetshoesV1\model;

use \ArrayAccess;

class PriceResource implements ArrayAccess {
  static $swaggerTypes = array(
      'sku' => 'string',
      'price' => 'double',
      'links' => 'array[Link]'
  );

  static $attributeMap = array(
      'sku' => 'sku',
      'price' => 'price',
      'links' => 'links'
  );

  
  public $sku; /* string */
  public $price; /* double */
  public $links; /* array[Link] */

  public function __construct(array $data = null) {
    $this->sku = $data["sku"];
    $this->price = $data["price"];
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
