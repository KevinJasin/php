<?php

require_once("connect.php");

$search = $_GET["q"];

var_dump($search);


$stmt = $pdo->query('SELECT * FROM books WHERE * LIKE %');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>


<form method="GET" action="index.php">
  <input type="text" name="q" placeholder="Search..." required>
  <input type="submit" value="Search" name="submit">
</form>



<?php
while ($row = $stmt->fetch()) {
    ?> 
    <li>
        <a href="book.php?id=<?= $row["id"]; ?>">
        <?=$row['title']; ?>

    </a>

    </li>;



    <?php
}
?>

</body>
</html>
