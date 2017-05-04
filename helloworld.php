3nd changed<br>
<?php
  echo 'Hello, world!<br>';
  echo date("h:i:sa");
  $memcache = new Memcache;
  $memcache->set('asdf', 'qwer');
  $value=$memcache->get('asdf');
  echo $value;
?>
