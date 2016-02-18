<?php


namespace ApiMktpNetshoesV1\model;

use \ArrayAccess;

class InvoiceResource implements ArrayAccess {
  static $swaggerTypes = array(
      'access_key' => 'string',
      'date' => 'DateTime',
      'ship_date' => 'DateTime',
      'url' => 'string'
  );

  static $attributeMap = array(
      'access_key' => 'accessKey',
      'date' => 'date',
      'ship_date' => 'shipDate',
      'url' => 'url'
  );

  
  public $access_key; /* string */
  public $date; /* DateTime */
  public $ship_date; /* DateTime */
  public $url; /* string */

  public function __construct(array $data = null) {
    $this->access_key = $data["access_key"];
    $this->date = $data["date"];
    $this->ship_date = $data["ship_date"];
    $this->url = $data["url"];
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
