<?php

namespace ApiMktpNetshoesV1\client;

use \Exception;

class ApiException extends Exception {

  /**
   * The HTTP body of the server response.
   */
  protected $response_body;

  /**
   * The HTTP header of the server response.
   */
  protected $response_headers;

  public function __construct($message="", $code=0, $responseHeaders=null, $responseBody=null) {
    parent::__construct($message, $code);
    $this->response_headers = $responseHeaders;
    $this->response_body = $responseBody;
  }

  /**
   * Get the HTTP response header
   *
   * @return string HTTP response header
   */
  public function getResponseHeaders() {
    return $this->response_headers;
  }

  /**
   * Get the HTTP response body
   *
   * @return string HTTP response body
   */
  public function getResponseBody() {
    return $this->response_body;
  }

}
