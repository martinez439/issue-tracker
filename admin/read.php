<?php
require 'database.php';

  $sql = 'SELECT * FROM issues';
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $post = $stmt->fetchAll();

  
 // echo $post;

/* Below Works
$data = $pdo->query("SELECT * FROM issues")->fetchAll();
// and somewhere later:
foreach ($data as $row) {
    echo $row['priority']."<br />\n";
}
*/

?>