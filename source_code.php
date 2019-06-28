/* 
Create a folder or directory if it does not already exist */
PHP code used in this video: https://www.youtube.com/watch?v=LuQsL7bY2kA 
*/

<?php
  $my_dir = "assets";
  if(!is_dir($my_dir)) {
    mkdir($my_dir);
    echo "Se ha creado el directorio $my_dir";
  } else {
    echo "El directorio $my_dir ya existe!";
  }
?>
