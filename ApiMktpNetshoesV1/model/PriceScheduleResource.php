<?php


namespace ApiMktpNetshoesV1\model;

use \ArrayAccess;

class PriceScheduleResource implements ArrayAccess {
  static $swaggerTypes = array(
      'sku' => 'string',
      'price_from' => 'double',
      'price_to' => 'double',
      'date_init' => 'DateTime',
      'date_end' => 'DateTime'
  );

  static $attributeMap = array(
      'sku' => 'sku',
      'price_from' => 'priceFrom',
      'price_to' => 'priceTo',
      'date_init' => 'dateInit',
      'date_end' => 'dateEnd'
  );

  
  public $sku; /* string */
  public $price_from; /* double */
  public $price_to; /* double */
  public $date_init; /* DateTime */
  public $date_end; /* DateTime */

  public function __construct(array $data = null) {
    $this->sku = $data["sku"];
    $this->price_from = $data["price_from"];
    $this->price_to = $data["price_to"];
    $this->date_init = $data["date_init"];
    $this->date_end = $data["date_end"];
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
