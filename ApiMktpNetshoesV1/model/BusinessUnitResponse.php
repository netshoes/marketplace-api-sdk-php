<?php


namespace ApiMktpNetshoesV1\model;

use \ArrayAccess;

class BusinessUnitResponse implements ArrayAccess {
  static $swaggerTypes = array(
      'active' => 'boolean',
      'sku_synchronized' => 'boolean',
      'links' => 'array[Link]'
  );

  static $attributeMap = array(
      'active' => 'active',
      'sku_synchronized' => 'skuSynchronized',
      'links' => 'links'
  );

  
  public $active; /* boolean */
  public $sku_synchronized; /* boolean */
  public $links; /* array[Link] */

  public function __construct(array $data = null) {
    $this->active = $data["active"];
    $this->sku_synchronized = $data["sku_synchronized"];
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
