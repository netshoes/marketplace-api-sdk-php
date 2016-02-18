<?php

namespace ApiMktpNetshoesV1;

class OrdersApi {

  function __construct($apiClient = null) {
    if (null === $apiClient) {
      if (Configuration::$apiClient === null) {
        Configuration::$apiClient = new ApiClient(); // create a new API client if not present
        $this->apiClient = Configuration::$apiClient;
      }
      else
        $this->apiClient = Configuration::$apiClient; // use the default one
    } else {
      $this->apiClient = $apiClient; // use the one provided by the user
    }
  }

  private $apiClient; // instance of the ApiClient

  /**
   * get the API client
   */
  public function getApiClient() {
    return $this->apiClient;
  }

  /**
   * set the API client
   */
  public function setApiClient($apiClient) {
    $this->apiClient = $apiClient;
  }

  
  /**
   * listOrders
   *
   * Get a list of Orders.
   *
   * @param int $page  (required)
   * @param int $size  (required)
   * @param string $expand  (required)
   * @param DateTime $order_start_date  (required)
   * @param DateTime $order_end_date  (required)
   * @param string $order_status  (required)
   * @param string $order_type  (required)
   * @return OrderListResource
   */
   public function listOrders($page, $size, $expand, $order_start_date, $order_end_date, $order_status, $order_type) {
      

      // parse inputs
      $resourcePath = "/orders";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($page !== null) {
        $queryParams['page'] = $this->apiClient->toQueryValue($page);
      }// query params
      if($size !== null) {
        $queryParams['size'] = $this->apiClient->toQueryValue($size);
      }// query params
      if($expand !== null) {
        $queryParams['expand'] = $this->apiClient->toQueryValue($expand);
      }// query params
      if($order_start_date !== null) {
        $queryParams['orderStartDate'] = $this->apiClient->toQueryValue($order_start_date);
      }// query params
      if($order_end_date !== null) {
        $queryParams['orderEndDate'] = $this->apiClient->toQueryValue($order_end_date);
      }// query params
      if($order_status !== null) {
        $queryParams['orderStatus'] = $this->apiClient->toQueryValue($order_status);
      }// query params
      if($order_type !== null) {
        $queryParams['orderType'] = $this->apiClient->toQueryValue($order_type);
      }
      
      
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array('client_id', 'access_token');

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'OrderListResource');
      return $responseObject;
  }
  
  /**
   * saveOrder
   *
   * 
   *
   * @param OrderResource $body  (required)
   * @return OrderResource
   */
   public function saveOrder($body) {
      

      // parse inputs
      $resourcePath = "/orders";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array());
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      
      
      
      
      // body params
      $_tempBody = null;
      if (isset($body)) {
        $_tempBody = $body;
      }

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array('client_id', 'access_token');

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'OrderResource');
      return $responseObject;
  }
  
  /**
   * getOrder
   *
   * Get a order based on order number.
   *
   * @param string $order_number  (required)
   * @param string $expand  (required)
   * @return OrderResource
   */
   public function getOrder($order_number, $expand) {
      
      // verify the required parameter 'order_number' is set
      if ($order_number === null) {
        throw new \InvalidArgumentException('Missing the required parameter $order_number when calling getOrder');
      }
      

      // parse inputs
      $resourcePath = "/orders/{orderNumber}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($expand !== null) {
        $queryParams['expand'] = $this->apiClient->toQueryValue($expand);
      }
      
      // path params
      if($order_number !== null) {
        $resourcePath = str_replace("{" . "orderNumber" . "}",
                                    $this->apiClient->toPathValue($order_number), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array('client_id', 'access_token');

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'OrderResource');
      return $responseObject;
  }
  
  /**
   * listOrderShippings
   *
   * Get a list of shippings by order number.
   *
   * @param string $order_number  (required)
   * @param string $expand  (required)
   * @return ShippingListResource
   */
   public function listOrderShippings($order_number, $expand) {
      
      // verify the required parameter 'order_number' is set
      if ($order_number === null) {
        throw new \InvalidArgumentException('Missing the required parameter $order_number when calling listOrderShippings');
      }
      

      // parse inputs
      $resourcePath = "/orders/{orderNumber}/shippings";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($expand !== null) {
        $queryParams['expand'] = $this->apiClient->toQueryValue($expand);
      }
      
      // path params
      if($order_number !== null) {
        $resourcePath = str_replace("{" . "orderNumber" . "}",
                                    $this->apiClient->toPathValue($order_number), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array('client_id', 'access_token');

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'ShippingListResource');
      return $responseObject;
  }
  
  /**
   * getOrderShipping
   *
   * Get a shipping based on order number and shipping code.
   *
   * @param string $order_number  (required)
   * @param int $shipping_code  (required)
   * @param string $expand  (required)
   * @return ShippingResource
   */
   public function getOrderShipping($order_number, $shipping_code, $expand) {
      
      // verify the required parameter 'order_number' is set
      if ($order_number === null) {
        throw new \InvalidArgumentException('Missing the required parameter $order_number when calling getOrderShipping');
      }
      
      // verify the required parameter 'shipping_code' is set
      if ($shipping_code === null) {
        throw new \InvalidArgumentException('Missing the required parameter $shipping_code when calling getOrderShipping');
      }
      

      // parse inputs
      $resourcePath = "/orders/{orderNumber}/shippings/{shippingCode}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "GET";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array());

      // query params
      if($expand !== null) {
        $queryParams['expand'] = $this->apiClient->toQueryValue($expand);
      }
      
      // path params
      if($order_number !== null) {
        $resourcePath = str_replace("{" . "orderNumber" . "}",
                                    $this->apiClient->toPathValue($order_number), $resourcePath);
      }// path params
      if($shipping_code !== null) {
        $resourcePath = str_replace("{" . "shippingCode" . "}",
                                    $this->apiClient->toPathValue($shipping_code), $resourcePath);
      }
      
      

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array('client_id', 'access_token');

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'ShippingResource');
      return $responseObject;
  }
  
  /**
   * updateShippingItemStatus
   *
   * Update status of item.
   *
   * @param string $order_number  (required)
   * @param int $shipping_code  (required)
   * @param int $id_item  (required)
   * @param StatusResource $body  (required)
   * @return StatusResource
   */
   public function updateShippingItemStatus($order_number, $shipping_code, $id_item, $body) {
      
      // verify the required parameter 'order_number' is set
      if ($order_number === null) {
        throw new \InvalidArgumentException('Missing the required parameter $order_number when calling updateShippingItemStatus');
      }
      
      // verify the required parameter 'shipping_code' is set
      if ($shipping_code === null) {
        throw new \InvalidArgumentException('Missing the required parameter $shipping_code when calling updateShippingItemStatus');
      }
      
      // verify the required parameter 'id_item' is set
      if ($id_item === null) {
        throw new \InvalidArgumentException('Missing the required parameter $id_item when calling updateShippingItemStatus');
      }
      

      // parse inputs
      $resourcePath = "/orders/{orderNumber}/shippings/{shippingCode}/item/{idItem}/status";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "PUT";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

      
      
      // path params
      if($order_number !== null) {
        $resourcePath = str_replace("{" . "orderNumber" . "}",
                                    $this->apiClient->toPathValue($order_number), $resourcePath);
      }// path params
      if($shipping_code !== null) {
        $resourcePath = str_replace("{" . "shippingCode" . "}",
                                    $this->apiClient->toPathValue($shipping_code), $resourcePath);
      }// path params
      if($id_item !== null) {
        $resourcePath = str_replace("{" . "idItem" . "}",
                                    $this->apiClient->toPathValue($id_item), $resourcePath);
      }
      
      // body params
      $_tempBody = null;
      if (isset($body)) {
        $_tempBody = $body;
      }

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array('client_id', 'access_token');

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'StatusResource');
      return $responseObject;
  }
  
  /**
   * updateShippingStatus
   *
   * Update status of shipping.
   *
   * @param string $order_number  (required)
   * @param int $shipping_code  (required)
   * @param StatusResource $body  (required)
   * @return StatusResource
   */
   public function updateShippingStatus($order_number, $shipping_code, $body) {
      
      // verify the required parameter 'order_number' is set
      if ($order_number === null) {
        throw new \InvalidArgumentException('Missing the required parameter $order_number when calling updateShippingStatus');
      }
      
      // verify the required parameter 'shipping_code' is set
      if ($shipping_code === null) {
        throw new \InvalidArgumentException('Missing the required parameter $shipping_code when calling updateShippingStatus');
      }
      

      // parse inputs
      $resourcePath = "/orders/{orderNumber}/shippings/{shippingCode}/status";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "PUT";
      $httpBody = '';
      $queryParams = array();
      $headerParams = array();
      $formParams = array();
      $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
      if (!is_null($_header_accept)) {
        $headerParams['Accept'] = $_header_accept;
      }
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

      
      
      // path params
      if($order_number !== null) {
        $resourcePath = str_replace("{" . "orderNumber" . "}",
                                    $this->apiClient->toPathValue($order_number), $resourcePath);
      }// path params
      if($shipping_code !== null) {
        $resourcePath = str_replace("{" . "shippingCode" . "}",
                                    $this->apiClient->toPathValue($shipping_code), $resourcePath);
      }
      
      // body params
      $_tempBody = null;
      if (isset($body)) {
        $_tempBody = $body;
      }

      // for model (json/xml)
      if (isset($_tempBody)) {
        $httpBody = $_tempBody; // $_tempBody is the method argument, if present
      } else if (count($formParams) > 0) {
        // for HTTP post (form)
        $httpBody = $formParams;
      }

      // authentication setting, if any
      $authSettings = array('client_id', 'access_token');

      // make the API Call
      $response = $this->apiClient->callAPI($resourcePath, $method,
                                            $queryParams, $httpBody,
                                            $headerParams, $authSettings);

      if(! $response) {
        return null;
      }

      $responseObject = $this->apiClient->deserialize($response,'StatusResource');
      return $responseObject;
  }
  

}
