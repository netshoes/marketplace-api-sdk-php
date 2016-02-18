<?php

namespace ApiMktpNetshoesV1;

class ProductsApi {

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
   * listProducts
   *
   * Get the list of products.
   *
   * @param int $page  (required)
   * @param int $size  (required)
   * @param string $expand  (required)
   * @return ProductListResource
   */
   public function listProducts($page, $size, $expand) {
      

      // parse inputs
      $resourcePath = "/products";
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

      $responseObject = $this->apiClient->deserialize($response,'ProductListResource');
      return $responseObject;
  }
  
  /**
   * saveProduct
   *
   * Create a new product.
   *
   * @param ProductResource $body  (required)
   * @return ProductResource
   */
   public function saveProduct($body) {
      

      // parse inputs
      $resourcePath = "/products";
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

      $responseObject = $this->apiClient->deserialize($response,'ProductResource');
      return $responseObject;
  }
  
  /**
   * getProduct
   *
   * Get the product by product id.
   *
   * @param string $product_id  (required)
   * @param string $expand  (required)
   * @return ProductResource
   */
   public function getProduct($product_id, $expand) {
      
      // verify the required parameter 'product_id' is set
      if ($product_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $product_id when calling getProduct');
      }
      

      // parse inputs
      $resourcePath = "/products/{productId}";
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

      $responseObject = $this->apiClient->deserialize($response,'ProductResource');
      return $responseObject;
  }
  
  /**
   * updateProduct
   *
   * Update the product.
   *
   * @param string $product_id  (required)
   * @param ProductResource $body  (required)
   * @return ProductResource
   */
   public function updateProduct($product_id, $body) {
      
      // verify the required parameter 'product_id' is set
      if ($product_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $product_id when calling updateProduct');
      }
      

      // parse inputs
      $resourcePath = "/products/{productId}";
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

      $responseObject = $this->apiClient->deserialize($response,'ProductResource');
      return $responseObject;
  }
  
  /**
   * patchProduct
   *
   * Partialy update the product.
   *
   * @param string $product_id  (required)
   * @param ProductResource $body  (required)
   * @return ProductResource
   */
   public function patchProduct($product_id, $body) {
      
      // verify the required parameter 'product_id' is set
      if ($product_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $product_id when calling patchProduct');
      }
      

      // parse inputs
      $resourcePath = "/products/{productId}";
      $resourcePath = str_replace("{format}", "json", $resourcePath);
      $method = "PATCH";
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

      $responseObject = $this->apiClient->deserialize($response,'ProductResource');
      return $responseObject;
  }
  
  /**
   * listProductAttributes
   *
   * Get the list of product attributes.
   *
   * @param string $product_id  (required)
   * @return AttributeListResource
   */
   public function listProductAttributes($product_id) {
      
      // verify the required parameter 'product_id' is set
      if ($product_id === null) {
        throw new \InvalidArgumentException('Missing the required parameter $product_id when calling listProductAttributes');
      }
      

      // parse inputs
      $resourcePath = "/products/{productId}/attributes";
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

      $responseObject = $this->apiClient->deserialize($response,'AttributeListResource');
      return $responseObject;
  }
  

}
