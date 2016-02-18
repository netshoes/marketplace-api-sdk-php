<?php


namespace ApiMktpNetshoesV1\model;

use \ArrayAccess;

class ProductResource implements ArrayAccess {
  static $swaggerTypes = array(
      'product_id' => 'string',
      'skus' => 'array[SkuResource]',
      'department' => 'string',
      'product_type' => 'string',
      'brand' => 'string',
      'attributes' => 'array[AttributeResource]',
      'links' => 'array[Link]'
  );

  static $attributeMap = array(
      'product_id' => 'productId',
      'skus' => 'skus',
      'department' => 'department',
      'product_type' => 'productType',
      'brand' => 'brand',
      'attributes' => 'attributes',
      'links' => 'links'
  );

  
  public $product_id; /* string */
  public $skus; /* array[SkuResource] */
  public $department; /* string */
  public $product_type; /* string */
  public $brand; /* string */
  public $attributes; /* array[AttributeResource] */
  public $links; /* array[Link] */

  public function __construct(array $data = null) {
    $this->product_id = $data["product_id"];
    $this->skus = $data["skus"];
    $this->department = $data["department"];
    $this->product_type = $data["product_type"];
    $this->brand = $data["brand"];
    $this->attributes = $data["attributes"];
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
