<?php


namespace ApiMktpNetshoesV1\model;

use \ArrayAccess;

class ShippingResource implements ArrayAccess {
  static $swaggerTypes = array(
      'shipping_code' => 'int',
      'shipping_estimate' => 'DateTime',
      'status' => 'string',
      'delivery_time' => 'int',
      'issuer' => 'IssuerResource',
      'customer' => 'CustomerResource',
      'customer_address' => 'CustomerAddressResource',
      'items' => 'array[OrderItemResource]',
      'devolution_items' => 'array[DevolutionItemResource]',
      'exchange_orders' => 'array[string]',
      'invoice' => 'InvoiceResource',
      'country' => 'string',
      'cancellation_reason' => 'string',
      'transport' => 'TransportResource',
      'freight_amount' => 'double',
      'links' => 'array[Link]'
  );

  static $attributeMap = array(
      'shipping_code' => 'shippingCode',
      'shipping_estimate' => 'shippingEstimate',
      'status' => 'status',
      'delivery_time' => 'deliveryTime',
      'issuer' => 'issuer',
      'customer' => 'customer',
      'customer_address' => 'customerAddress',
      'items' => 'items',
      'devolution_items' => 'devolutionItems',
      'exchange_orders' => 'exchangeOrders',
      'invoice' => 'invoice',
      'country' => 'country',
      'cancellation_reason' => 'cancellationReason',
      'transport' => 'transport',
      'freight_amount' => 'freightAmount',
      'links' => 'links'
  );

  
  public $shipping_code; /* int */
  public $shipping_estimate; /* DateTime */
  public $status; /* string */
  public $delivery_time; /* int */
  public $issuer; /* IssuerResource */
  public $customer; /* CustomerResource */
  public $customer_address; /* CustomerAddressResource */
  public $items; /* array[OrderItemResource] */
  public $devolution_items; /* array[DevolutionItemResource] */
  public $exchange_orders; /* array[string] */
  public $invoice; /* InvoiceResource */
  public $country; /* string */
  public $cancellation_reason; /* string */
  public $transport; /* TransportResource */
  public $freight_amount; /* double */
  public $links; /* array[Link] */

  public function __construct(array $data = null) {
    $this->shipping_code = $data["shipping_code"];
    $this->shipping_estimate = $data["shipping_estimate"];
    $this->status = $data["status"];
    $this->delivery_time = $data["delivery_time"];
    $this->issuer = $data["issuer"];
    $this->customer = $data["customer"];
    $this->customer_address = $data["customer_address"];
    $this->items = $data["items"];
    $this->devolution_items = $data["devolution_items"];
    $this->exchange_orders = $data["exchange_orders"];
    $this->invoice = $data["invoice"];
    $this->country = $data["country"];
    $this->cancellation_reason = $data["cancellation_reason"];
    $this->transport = $data["transport"];
    $this->freight_amount = $data["freight_amount"];
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
