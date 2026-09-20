<?php


if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])
   && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{

  if (isset($_POST['request']))
  {
      echo $_POST['request'];

  }
  else
  {
      echo 'not found.';
  }
}


  header('Content-Type: text/plain; charset=UTF-8');

  $db = new SQLite3('edict.sqlite3');
  $str = $_POST['request'];

  $result = $db->query("select * from items where word='$str' ");
  while ($row = $result->fetchArray()) {
    print_r($row);
  }
