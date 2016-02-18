<?php
// load models defined for endpoints
foreach (glob(dirname(__FILE__) . "/" . str_replace("\\", "/", "ApiMktpNetshoesV1\model") . "/*.php") as $filename)
{
      require_once $filename;
}

// load client classes for accessing the endpoints
foreach (glob(dirname(__FILE__) . "/" . str_replace("\\", "/", "ApiMktpNetshoesV1\client") ."/*.php") as $filename)
{
      require_once $filename;
}

// load APIs defined for endpoints
foreach (glob(dirname(__FILE__) . "/" . str_replace("\\", "/", "ApiMktpNetshoesV1") ."/*.php") as $filename)
{
      require_once $filename;
}
?>
