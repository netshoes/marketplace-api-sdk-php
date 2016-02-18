<?php


namespace ApiMktpNetshoesV1\model;

use \ArrayAccess;

class DevolutionItemResource implements ArrayAccess {
  static $swaggerTypes = array(
      'item_id' => 'int',
      'manufacturer_code' => 'string',
      'ean' => 'string',
      'brand' => 'string',
      'name' => 'string',
      'quantity' => 'int',
      'sku' => 'string',
      'status' => 'string',
      'department_name' => 'string',
      'department_code' => 'int',
      'exchange_process_code' => 'int',
      'checkin_data' => 'DateTime',
      'devolution_data' => 'DateTime',
      'total_gross' => 'double',
      'color' => 'string',
      'flavor' => 'string',
      'size' => 'string',
      'devolution_exchange_status' => 'string'
  );

  static $attributeMap = array(
      'item_id' => 'itemId',
      'manufacturer_code' => 'manufacturerCode',
      'ean' => 'ean',
      'brand' => 'brand',
      'name' => 'name',
      'quantity' => 'quantity',
      'sku' => 'sku',
      'status' => 'status',
      'department_name' => 'departmentName',
      'department_code' => 'departmentCode',
      'exchange_process_code' => 'exchangeProcessCode',
      'checkin_data' => 'checkinData',
      'devolution_data' => 'devolutionData',
      'total_gross' => 'totalGross',
      'color' => 'color',
      'flavor' => 'flavor',
      'size' => 'size',
      'devolution_exchange_status' => 'devolutionExchangeStatus'
  );

  
  public $item_id; /* int */
  public $manufacturer_code; /* string */
  public $ean; /* string */
  public $brand; /* string */
  public $name; /* string */
  public $quantity; /* int */
  public $sku; /* string */
  public $status; /* string */
  public $department_name; /* string */
  public $department_code; /* int */
  public $exchange_process_code; /* int */
  public $checkin_data; /* DateTime */
  public $devolution_data; /* DateTime */
  public $total_gross; /* double */
  public $color; /* string */
  public $flavor; /* string */
  public $size; /* string */
  public $devolution_exchange_status; /* string */

  public function __construct(array $data = null) {
    $this->item_id = $data["item_id"];
    $this->manufacturer_code = $data["manufacturer_code"];
    $this->ean = $data["ean"];
    $this->brand = $data["brand"];
    $this->name = $data["name"];
    $this->quantity = $data["quantity"];
    $this->sku = $data["sku"];
    $this->status = $data["status"];
    $this->department_name = $data["department_name"];
    $this->department_code = $data["department_code"];
    $this->exchange_process_code = $data["exchange_process_code"];
    $this->checkin_data = $data["checkin_data"];
    $this->devolution_data = $data["devolution_data"];
    $this->total_gross = $data["total_gross"];
    $this->color = $data["color"];
    $this->flavor = $data["flavor"];
    $this->size = $data["size"];
    $this->devolution_exchange_status = $data["devolution_exchange_status"];
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
