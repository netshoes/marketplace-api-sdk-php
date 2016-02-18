<?php


namespace ApiMktpNetshoesV1\model;

use \ArrayAccess;

class SkuResource implements ArrayAccess {
  static $swaggerTypes = array(
      'sku' => 'string',
      'name' => 'string',
      'description' => 'string',
      'color' => 'string',
      'flavor' => 'string',
      'size' => 'string',
      'gender' => 'string',
      'ean_isbn' => 'string',
      'images' => 'array[ImageResource]',
      'video' => 'string',
      'height' => 'double',
      'width' => 'double',
      'depth' => 'double',
      'weight' => 'double',
      'links' => 'array[Link]'
  );

  static $attributeMap = array(
      'sku' => 'sku',
      'name' => 'name',
      'description' => 'description',
      'color' => 'color',
      'flavor' => 'flavor',
      'size' => 'size',
      'gender' => 'gender',
      'ean_isbn' => 'eanIsbn',
      'images' => 'images',
      'video' => 'video',
      'height' => 'height',
      'width' => 'width',
      'depth' => 'depth',
      'weight' => 'weight',
      'links' => 'links'
  );

  
  public $sku; /* string */
  public $name; /* string */
  public $description; /* string */
  public $color; /* string */
  public $flavor; /* string */
  public $size; /* string */
  public $gender; /* string */
  public $ean_isbn; /* string */
  public $images; /* array[ImageResource] */
  public $video; /* string */
  public $height; /* double */
  public $width; /* double */
  public $depth; /* double */
  public $weight; /* double */
  public $links; /* array[Link] */

  public function __construct(array $data = null) {
    $this->sku = $data["sku"];
    $this->name = $data["name"];
    $this->description = $data["description"];
    $this->color = $data["color"];
    $this->flavor = $data["flavor"];
    $this->size = $data["size"];
    $this->gender = $data["gender"];
    $this->ean_isbn = $data["ean_isbn"];
    $this->images = $data["images"];
    $this->video = $data["video"];
    $this->height = $data["height"];
    $this->width = $data["width"];
    $this->depth = $data["depth"];
    $this->weight = $data["weight"];
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
