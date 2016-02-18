<?php


namespace ApiMktpNetshoesV1\model;

use \ArrayAccess;

class IssuerResource implements ArrayAccess {
  static $swaggerTypes = array(
      'supplier_cnpj' => 'string',
      'seller_code' => 'int',
      'seller_name' => 'string',
      'supplier_name' => 'string'
  );

  static $attributeMap = array(
      'supplier_cnpj' => 'supplierCnpj',
      'seller_code' => 'sellerCode',
      'seller_name' => 'sellerName',
      'supplier_name' => 'supplierName'
  );

  
  public $supplier_cnpj; /* string */
  public $seller_code; /* int */
  public $seller_name; /* string */
  public $supplier_name; /* string */

  public function __construct(array $data = null) {
    $this->supplier_cnpj = $data["supplier_cnpj"];
    $this->seller_code = $data["seller_code"];
    $this->seller_name = $data["seller_name"];
    $this->supplier_name = $data["supplier_name"];
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
