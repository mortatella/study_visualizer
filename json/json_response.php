<?php
// Exit, if script is called directly (must be included via eID in index_ts.php)
if (!defined ('PATH_typo3conf')) die ('Must not access this script directly!');
class json_response
{
  var $isSuccess = true;
  var $messages = array();
  var $data;

  function asString()
  {
    return json_encode($this);
  }

  function addMessage($message)
  {
    $this->messages[] = $message;
  }
}
?>
