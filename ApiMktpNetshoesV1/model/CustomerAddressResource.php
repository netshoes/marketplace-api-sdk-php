<?php


namespace ApiMktpNetshoesV1\model;

use \ArrayAccess;

class CustomerAddressResource implements ArrayAccess {
  static $swaggerTypes = array(
      'neighborhood' => 'string',
      'postal_code' => 'string',
      'city' => 'string',
      'complement' => 'string',
      'state' => 'string',
      'street' => 'string',
      'number' => 'string',
      'reference' => 'string'
  );

  static $attributeMap = array(
      'neighborhood' => 'neighborhood',
      'postal_code' => 'postalCode',
      'city' => 'city',
      'complement' => 'complement',
      'state' => 'state',
      'street' => 'street',
      'number' => 'number',
      'reference' => 'reference'
  );

  
  public $neighborhood; /* string */
  public $postal_code; /* string */
  public $city; /* string */
  public $complement; /* string */
  public $state; /* string */
  public $street; /* string */
  public $number; /* string */
  public $reference; /* string */

  public function __construct(array $data = null) {
    $this->neighborhood = $data["neighborhood"];
    $this->postal_code = $data["postal_code"];
    $this->city = $data["city"];
    $this->complement = $data["complement"];
    $this->state = $data["state"];
    $this->street = $data["street"];
    $this->number = $data["number"];
    $this->reference = $data["reference"];
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
