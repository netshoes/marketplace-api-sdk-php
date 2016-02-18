<?php


namespace ApiMktpNetshoesV1\model;

use \ArrayAccess;

class TransportResource implements ArrayAccess {
  static $swaggerTypes = array(
      'tracking_number' => 'string',
      'tracking_link' => 'string',
      'tracking_ship_date' => 'DateTime',
      'delivery_date' => 'DateTime',
      'ship_date' => 'DateTime',
      'delivery_service' => 'string',
      'carrier' => 'string'
  );

  static $attributeMap = array(
      'tracking_number' => 'trackingNumber',
      'tracking_link' => 'trackingLink',
      'tracking_ship_date' => 'trackingShipDate',
      'delivery_date' => 'deliveryDate',
      'ship_date' => 'shipDate',
      'delivery_service' => 'deliveryService',
      'carrier' => 'carrier'
  );

  
  public $tracking_number; /* string */
  public $tracking_link; /* string */
  public $tracking_ship_date; /* DateTime */
  public $delivery_date; /* DateTime */
  public $ship_date; /* DateTime */
  public $delivery_service; /* string */
  public $carrier; /* string */

  public function __construct(array $data = null) {
    $this->tracking_number = $data["tracking_number"];
    $this->tracking_link = $data["tracking_link"];
    $this->tracking_ship_date = $data["tracking_ship_date"];
    $this->delivery_date = $data["delivery_date"];
    $this->ship_date = $data["ship_date"];
    $this->delivery_service = $data["delivery_service"];
    $this->carrier = $data["carrier"];
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
