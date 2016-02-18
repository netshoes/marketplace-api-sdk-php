<?php

namespace ApiMktpNetshoesV1\client;

class Configuration {

  /**
   * Associate array to store API key(s)
   */
  public static $apiKey = array();

  /**
   * Associate array to store API prefix (e.g. Bearer)
   */
  public static $apiKeyPrefix = array();

  /**
   * Username for HTTP basic authentication
   */
  public static $username = '';

  /**
   * Password for HTTP basic authentication
   */
  public static $password = '';

  /**
   * The default instance of ApiClient
   */
  public static $apiClient;

  /**
   * Debug switch (default set to false)
   */
  public static $debug = false;

  /**
   * Debug file location (log to STDOUT by default)
   */
  public static $debug_file = 'php://output';

  /*
   *  manually initalize  ApiClient
   */
  public static function init() {
    if (self::$apiClient === null)
      self::$apiClient = new ApiClient();
  }

}

