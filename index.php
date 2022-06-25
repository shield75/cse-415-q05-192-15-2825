<!DOCTYPE html>
<html>
<body>

  <?php
  $str1= '092007';
  echo "String: $str1 <br>";

  echo substr(chunk_split($str1, 2, ':'), 0, -1)."\n";
  ?>
</body>
</html>
