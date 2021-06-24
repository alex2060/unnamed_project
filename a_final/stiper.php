

<?


  function the_striper($value) {
  $value = str_replace('"',  '(!A???!???A!)', $value);
  $value = str_replace('',   '(!B???!???B!)', $value);
  return $value;
  }

  function replacer($value) {
  $value = str_replace('(!A???!???A!)',  '"', $value);
  $value = str_replace('(!B???!???B!)', '\'', $value);
  return $value;
  }

  function user_striper($value) {
  $value = str_replace('_',  '', $value);
  return $value;
  }








?>


