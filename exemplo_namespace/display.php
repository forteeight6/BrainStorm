<?php
require 'classe_html.php';
require 'classe_furniture.php';
?>

<!DOCTYPE html>
<html>
<body>

<?php
echo "classe_html: ";
$table = new Html\Table();
$table->title = "My table";
$table->numRows = 5;
$table->message();
echo "</br></br>";
?>

<?php
echo "classe_furniture: ";
$obj = new Furniture\Table();
$obj->message();
echo "</br></br>";
?>

</body>
</html>