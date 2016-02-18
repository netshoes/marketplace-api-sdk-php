<?php


namespace ApiMktpNetshoesV1\model;

use \ArrayAccess;

class CustomerResource implements ArrayAccess {
  static $swaggerTypes = array(
      'document' => 'string',
      'state_inscription' => 'string',
      'customer_name' => 'string',
      'recipient_name' => 'string',
      'trade_name' => 'string',
      'cell_phone' => 'string',
      'landline' => 'string',
      'receiver_name' => 'string'
  );

  static $attributeMap = array(
      'document' => 'document',
      'state_inscription' => 'stateInscription',
      'customer_name' => 'customerName',
      'recipient_name' => 'recipientName',
      'trade_name' => 'tradeName',
      'cell_phone' => 'cellPhone',
      'landline' => 'landline',
      'receiver_name' => 'receiverName'
  );

  
  public $document; /* string */
  public $state_inscription; /* string */
  public $customer_name; /* string */
  public $recipient_name; /* string */
  public $trade_name; /* string */
  public $cell_phone; /* string */
  public $landline; /* string */
  public $receiver_name; /* string */

  public function __construct(array $data = null) {
    $this->document = $data["document"];
    $this->state_inscription = $data["state_inscription"];
    $this->customer_name = $data["customer_name"];
    $this->recipient_name = $data["recipient_name"];
    $this->trade_name = $data["trade_name"];
    $this->cell_phone = $data["cell_phone"];
    $this->landline = $data["landline"];
    $this->receiver_name = $data["receiver_name"];
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
