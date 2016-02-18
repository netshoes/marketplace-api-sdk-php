<?php


namespace ApiMktpNetshoesV1\model;

use \ArrayAccess;

class ImageResource implements ArrayAccess {
  static $swaggerTypes = array(
      'url' => 'string',
      'links' => 'array[Link]'
  );

  static $attributeMap = array(
      'url' => 'url',
      'links' => 'links'
  );

  
  public $url; /* string */
  public $links; /* array[Link] */

  public function __construct(array $data = null) {
    $this->url = $data["url"];
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
