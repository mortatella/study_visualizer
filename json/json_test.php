<?php
// Exit, if script is called directly (must be included via eID in index_ts.php)
if (!defined ('PATH_typo3conf')) die ('Could not access this script directly!');

require_once(PATH_tslib.'class.tslib_pibase.php');
require_once(PATH_tslib.'class.tslib_content.php');

require_once($GLOBALS['TYPO3_LOADED_EXT']['ajaxdemo']['siteRelPath'].'json/json_response.php');



class json_test extends tslib_pibase
{
  var $request;
  var $response;
  var $MAX_REQUEST_LENGTH = 9999;     // limit size of json requests

  function main($actionName)
  {
    $content = '';

    $this->request = $this->getRequest();
    $this->response = new json_response();

    $content = $this->processRequest();

    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
    header('Last-Modified: ' . gmdate( "D, d M Y H:i:s" ) . 'GMT');
    header('Cache-Control: no-cache, must-revalidate');
    header('Pragma: no-cache');
    $charset = $GLOBALS["cfgApplCharset"]."";
    header('Content-Type: text/javascript; charset='.$charset.'');
    header('Content-Disposition: inline; filename=json.js');
    header('Content-Length: '.strlen($content));
    echo $content;

  }

  function getRequest()
  {
    $input = fopen("php://input", 'r');
    $content = fread($input, $this->MAX_REQUEST_LENGTH);

    return json_decode($content, true);
  }


  function processRequest()
  {
    // prepare a demo response
    $this->response->isSuccess = true;
    $this->response->addMessage("Request successful");
    $this->response->data = Array();
    $this->response->data["stringValue"] = "my string value";
    $this->response->data["num"] = 42;
    return $this->response->asString();
  }
}

$output = t3lib_div::makeInstance("json_test");
$output->main($action);

?>
