<?php


namespace ApiMktpNetshoesV1\model;

use \ArrayAccess;

class OrderItemResource implements ArrayAccess {
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
      'total_gross' => 'double',
      'total_commission' => 'double',
      'total_discount' => 'double',
      'total_freight' => 'double',
      'total_net' => 'double',
      'gross_unit_value' => 'double',
      'discount_unit_value' => 'double',
      'net_unit_value' => 'double',
      'color' => 'string',
      'flavor' => 'string',
      'size' => 'string'
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
      'total_gross' => 'totalGross',
      'total_commission' => 'totalCommission',
      'total_discount' => 'totalDiscount',
      'total_freight' => 'totalFreight',
      'total_net' => 'totalNet',
      'gross_unit_value' => 'grossUnitValue',
      'discount_unit_value' => 'discountUnitValue',
      'net_unit_value' => 'netUnitValue',
      'color' => 'color',
      'flavor' => 'flavor',
      'size' => 'size'
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
  public $total_gross; /* double */
  public $total_commission; /* double */
  public $total_discount; /* double */
  public $total_freight; /* double */
  public $total_net; /* double */
  public $gross_unit_value; /* double */
  public $discount_unit_value; /* double */
  public $net_unit_value; /* double */
  public $color; /* string */
  public $flavor; /* string */
  public $size; /* string */

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
    $this->total_gross = $data["total_gross"];
    $this->total_commission = $data["total_commission"];
    $this->total_discount = $data["total_discount"];
    $this->total_freight = $data["total_freight"];
    $this->total_net = $data["total_net"];
    $this->gross_unit_value = $data["gross_unit_value"];
    $this->discount_unit_value = $data["discount_unit_value"];
    $this->net_unit_value = $data["net_unit_value"];
    $this->color = $data["color"];
    $this->flavor = $data["flavor"];
    $this->size = $data["size"];
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
