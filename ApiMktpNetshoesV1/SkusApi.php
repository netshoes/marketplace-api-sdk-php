<?php

namespace ApiMktpNetshoesV1;

class SkusApi {

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
   * listProductSkus
   *
   * Get the list of product skus.
   *
   * @param string $product_id  (required)
   * @param int $page  (required)
   * @param int $size  (required)
   * @param string $expand  (required)
   * @return SkuListResource
   */
   public function listProductSkus($product_id, $page, $size, $expand) {
      
      // verify the required parameter 'product_id' is set
      if ($product_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $product_id when calling listProductSkus');
      }
      

      // parse inputs
      $resourcePath = "/products/{productId}/skus";
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
      }
      
      // path params
      if($product_id !== null) {
        $resourcePath = str_replace("{" . "productId" . "}",
                                    $this->apiClient->toPathValue($product_id), $resourcePath);
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

      $responseObject = $this->apiClient->deserialize($response,'SkuListResource');
      return $responseObject;
  }
  
  /**
   * saveProductSku
   *
   * Create a new sku for a product.
   *
   * @param string $product_id  (required)
   * @param SkuResource $body  (required)
   * @return SkuResource
   */
   public function saveProductSku($product_id, $body) {
      
      // verify the required parameter 'product_id' is set
      if ($product_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $product_id when calling saveProductSku');
      }
      

      // parse inputs
      $resourcePath = "/products/{productId}/skus";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
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
      if($product_id !== null) {
        $resourcePath = str_replace("{" . "productId" . "}",
                                    $this->apiClient->toPathValue($product_id), $resourcePath);
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

      $responseObject = $this->apiClient->deserialize($response,'SkuResource');
      return $responseObject;
  }
  
  /**
   * getProductSku
   *
   * Get the a sku by product Id and sku Id.
   *
   * @param string $product_id  (required)
   * @param string $sku  (required)
   * @param string $expand  (required)
   * @return SkuResource
   */
   public function getProductSku($product_id, $sku, $expand) {
      
      // verify the required parameter 'product_id' is set
      if ($product_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $product_id when calling getProductSku');
      }
      
      // verify the required parameter 'sku' is set
      if ($sku === null) {
        throw new \InvalidArgumentException('Missing the required parameter $sku when calling getProductSku');
      }
      

      // parse inputs
      $resourcePath = "/products/{productId}/skus/{sku}";
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
      if($product_id !== null) {
        $resourcePath = str_replace("{" . "productId" . "}",
                                    $this->apiClient->toPathValue($product_id), $resourcePath);
      }// path params
      if($sku !== null) {
        $resourcePath = str_replace("{" . "sku" . "}",
                                    $this->apiClient->toPathValue($sku), $resourcePath);
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

      $responseObject = $this->apiClient->deserialize($response,'SkuResource');
      return $responseObject;
  }
  
  /**
   * updateProductSku
   *
   * Update a product based on SKU.
   *
   * @param string $product_id  (required)
   * @param string $sku  (required)
   * @param SkuResource $body  (required)
   * @return SkuResource
   */
   public function updateProductSku($product_id, $sku, $body) {
      
      // verify the required parameter 'product_id' is set
      if ($product_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $product_id when calling updateProductSku');
      }
      
      // verify the required parameter 'sku' is set
      if ($sku === null) {
        throw new \InvalidArgumentException('Missing the required parameter $sku when calling updateProductSku');
      }
      

      // parse inputs
      $resourcePath = "/products/{productId}/skus/{sku}";
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
      if($product_id !== null) {
        $resourcePath = str_replace("{" . "productId" . "}",
                                    $this->apiClient->toPathValue($product_id), $resourcePath);
      }// path params
      if($sku !== null) {
        $resourcePath = str_replace("{" . "sku" . "}",
                                    $this->apiClient->toPathValue($sku), $resourcePath);
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

      $responseObject = $this->apiClient->deserialize($response,'SkuResource');
      return $responseObject;
  }
  
  /**
   * listSkuImages
   *
   * Get the list of sku images.
   *
   * @param string $product_id  (required)
   * @param string $sku  (required)
   * @return ImageListResource
   */
   public function listSkuImages($product_id, $sku) {
      
      // verify the required parameter 'product_id' is set
      if ($product_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $product_id when calling listSkuImages');
      }
      
      // verify the required parameter 'sku' is set
      if ($sku === null) {
        throw new \InvalidArgumentException('Missing the required parameter $sku when calling listSkuImages');
      }
      

      // parse inputs
      $resourcePath = "/products/{productId}/skus/{sku}/images";
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

      
      
      // path params
      if($product_id !== null) {
        $resourcePath = str_replace("{" . "productId" . "}",
                                    $this->apiClient->toPathValue($product_id), $resourcePath);
      }// path params
      if($sku !== null) {
        $resourcePath = str_replace("{" . "sku" . "}",
                                    $this->apiClient->toPathValue($sku), $resourcePath);
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

      $responseObject = $this->apiClient->deserialize($response,'ImageListResource');
      return $responseObject;
  }
  
  /**
   * getStatus
   *
   * Get product status.
   *
   * @param string $sku  (required)
   * @param string $bu_id  (required)
   * @return BusinessUnitResponse
   */
   public function getStatus($sku, $bu_id) {
      
      // verify the required parameter 'sku' is set
      if ($sku === null) {
        throw new \InvalidArgumentException('Missing the required parameter $sku when calling getStatus');
      }
      
      // verify the required parameter 'bu_id' is set
      if ($bu_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $bu_id when calling getStatus');
      }
      

      // parse inputs
      $resourcePath = "/skus/{sku}/bus/{buId}/status";
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
      $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

      
      
      // path params
      if($sku !== null) {
        $resourcePath = str_replace("{" . "sku" . "}",
                                    $this->apiClient->toPathValue($sku), $resourcePath);
      }// path params
      if($bu_id !== null) {
        $resourcePath = str_replace("{" . "buId" . "}",
                                    $this->apiClient->toPathValue($bu_id), $resourcePath);
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

      $responseObject = $this->apiClient->deserialize($response,'BusinessUnitResponse');
      return $responseObject;
  }
  
  /**
   * updateStatus
   *
   * Enable or disable sku for sale.
   *
   * @param string $sku  (required)
   * @param string $bu_id  (required)
   * @param BusinessUnitResource $body  (required)
   * @return BusinessUnitResource
   */
   public function updateStatus($sku, $bu_id, $body) {
      
      // verify the required parameter 'sku' is set
      if ($sku === null) {
        throw new \InvalidArgumentException('Missing the required parameter $sku when calling updateStatus');
      }
      
      // verify the required parameter 'bu_id' is set
      if ($bu_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $bu_id when calling updateStatus');
      }
      

      // parse inputs
      $resourcePath = "/skus/{sku}/bus/{buId}/status";
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
      if($sku !== null) {
        $resourcePath = str_replace("{" . "sku" . "}",
                                    $this->apiClient->toPathValue($sku), $resourcePath);
      }// path params
      if($bu_id !== null) {
        $resourcePath = str_replace("{" . "buId" . "}",
                                    $this->apiClient->toPathValue($bu_id), $resourcePath);
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

      $responseObject = $this->apiClient->deserialize($response,'BusinessUnitResource');
      return $responseObject;
  }
  
  /**
   * listSchedules
   *
   * Get a list of price schedules.
   *
   * @param string $sku  (required)
   * @return PriceList
   */
   public function listSchedules($sku) {
      
      // verify the required parameter 'sku' is set
      if ($sku === null) {
        throw new \InvalidArgumentException('Missing the required parameter $sku when calling listSchedules');
      }
      

      // parse inputs
      $resourcePath = "/skus/{sku}/priceSchedules";
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

      
      
      // path params
      if($sku !== null) {
        $resourcePath = str_replace("{" . "sku" . "}",
                                    $this->apiClient->toPathValue($sku), $resourcePath);
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

      $responseObject = $this->apiClient->deserialize($response,'PriceList');
      return $responseObject;
  }
  
  /**
   * saveSchedule
   *
   * Save a price schedule.
   *
   * @param string $sku  (required)
   * @param PriceScheduleResource $body  (required)
   * @return PriceScheduleResource
   */
   public function saveSchedule($sku, $body) {
      
      // verify the required parameter 'sku' is set
      if ($sku === null) {
        throw new \InvalidArgumentException('Missing the required parameter $sku when calling saveSchedule');
      }
      

      // parse inputs
      $resourcePath = "/skus/{sku}/priceSchedules";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "POST";
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
      if($sku !== null) {
        $resourcePath = str_replace("{" . "sku" . "}",
                                    $this->apiClient->toPathValue($sku), $resourcePath);
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

      $responseObject = $this->apiClient->deserialize($response,'PriceScheduleResource');
      return $responseObject;
  }
  
  /**
   * listPrices
   *
   * Get a base price.
   *
   * @param string $sku  (required)
   * @return PriceResource
   */
   public function listPrices($sku) {
      
      // verify the required parameter 'sku' is set
      if ($sku === null) {
        throw new \InvalidArgumentException('Missing the required parameter $sku when calling listPrices');
      }
      

      // parse inputs
      $resourcePath = "/skus/{sku}/prices";
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

      
      
      // path params
      if($sku !== null) {
        $resourcePath = str_replace("{" . "sku" . "}",
                                    $this->apiClient->toPathValue($sku), $resourcePath);
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

      $responseObject = $this->apiClient->deserialize($response,'PriceResource');
      return $responseObject;
  }
  
  /**
   * updatePrice
   *
   * Save a base price.
   *
   * @param string $sku  (required)
   * @param PriceResource $body  (required)
   * @return PriceResource
   */
   public function updatePrice($sku, $body) {
      
      // verify the required parameter 'sku' is set
      if ($sku === null) {
        throw new \InvalidArgumentException('Missing the required parameter $sku when calling updatePrice');
      }
      

      // parse inputs
      $resourcePath = "/skus/{sku}/prices";
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
      if($sku !== null) {
        $resourcePath = str_replace("{" . "sku" . "}",
                                    $this->apiClient->toPathValue($sku), $resourcePath);
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

      $responseObject = $this->apiClient->deserialize($response,'PriceResource');
      return $responseObject;
  }
  
  /**
   * getStock
   *
   * Get stock info by sku.
   *
   * @param string $sku  (required)
   * @return StockResponse
   */
   public function getStock($sku) {
      
      // verify the required parameter 'sku' is set
      if ($sku === null) {
        throw new \InvalidArgumentException('Missing the required parameter $sku when calling getStock');
      }
      

      // parse inputs
      $resourcePath = "/skus/{sku}/stocks";
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

      
      
      // path params
      if($sku !== null) {
        $resourcePath = str_replace("{" . "sku" . "}",
                                    $this->apiClient->toPathValue($sku), $resourcePath);
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

      $responseObject = $this->apiClient->deserialize($response,'StockResponse');
      return $responseObject;
  }
  
  /**
   * updateStock
   *
   * Update stock quantity by sku.
   *
   * @param string $sku  (required)
   * @param StockResource $body  (required)
   * @return StockResponse
   */
   public function updateStock($sku, $body) {
      
      // verify the required parameter 'sku' is set
      if ($sku === null) {
        throw new \InvalidArgumentException('Missing the required parameter $sku when calling updateStock');
      }
      

      // parse inputs
      $resourcePath = "/skus/{sku}/stocks";
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
      if($sku !== null) {
        $resourcePath = str_replace("{" . "sku" . "}",
                                    $this->apiClient->toPathValue($sku), $resourcePath);
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

      $responseObject = $this->apiClient->deserialize($response,'StockResponse');
      return $responseObject;
  }
  

}
