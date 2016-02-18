<?php


namespace ApiMktpNetshoesV1\model;

use \ArrayAccess;

class OrderResource implements ArrayAccess {
  static $swaggerTypes = array(
      'agreed_date' => 'DateTime',
      'payment_data' => 'DateTime',
      'order_date' => 'DateTime',
      'number' => 'string',
      'origin_number' => 'string',
      'total_quantity' => 'int',
      'origin_site' => 'string',
      'business_unit' => 'string',
      'status' => 'string',
      'order_type' => 'string',
      'devolution_requested' => 'boolean',
      'exchange_requested' => 'boolean',
      'total_gross' => 'double',
      'total_commission' => 'double',
      'total_discount' => 'double',
      'total_freight' => 'double',
      'total_net' => 'double',
      'shippings' => 'array[ShippingResource]',
      'links' => 'array[Link]'
  );

  static $attributeMap = array(
      'agreed_date' => 'agreedDate',
      'payment_data' => 'paymentData',
      'order_date' => 'orderDate',
      'number' => 'number',
      'origin_number' => 'originNumber',
      'total_quantity' => 'totalQuantity',
      'origin_site' => 'originSite',
      'business_unit' => 'businessUnit',
      'status' => 'status',
      'order_type' => 'orderType',
      'devolution_requested' => 'devolutionRequested',
      'exchange_requested' => 'exchangeRequested',
      'total_gross' => 'totalGross',
      'total_commission' => 'totalCommission',
      'total_discount' => 'totalDiscount',
      'total_freight' => 'totalFreight',
      'total_net' => 'totalNet',
      'shippings' => 'shippings',
      'links' => 'links'
  );

  
  public $agreed_date; /* DateTime */
  public $payment_data; /* DateTime */
  public $order_date; /* DateTime */
  public $number; /* string */
  public $origin_number; /* string */
  public $total_quantity; /* int */
  public $origin_site; /* string */
  public $business_unit; /* string */
  public $status; /* string */
  public $order_type; /* string */
  public $devolution_requested; /* boolean */
  public $exchange_requested; /* boolean */
  public $total_gross; /* double */
  public $total_commission; /* double */
  public $total_discount; /* double */
  public $total_freight; /* double */
  public $total_net; /* double */
  public $shippings; /* array[ShippingResource] */
  public $links; /* array[Link] */

  public function __construct(array $data = null) {
    $this->agreed_date = $data["agreed_date"];
    $this->payment_data = $data["payment_data"];
    $this->order_date = $data["order_date"];
    $this->number = $data["number"];
    $this->origin_number = $data["origin_number"];
    $this->total_quantity = $data["total_quantity"];
    $this->origin_site = $data["origin_site"];
    $this->business_unit = $data["business_unit"];
    $this->status = $data["status"];
    $this->order_type = $data["order_type"];
    $this->devolution_requested = $data["devolution_requested"];
    $this->exchange_requested = $data["exchange_requested"];
    $this->total_gross = $data["total_gross"];
    $this->total_commission = $data["total_commission"];
    $this->total_discount = $data["total_discount"];
    $this->total_freight = $data["total_freight"];
    $this->total_net = $data["total_net"];
    $this->shippings = $data["shippings"];
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
