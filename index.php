<?php

require_once("connect.php");



$stmt = $pdo->query('SELECT * FROM books');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>

<?php
while ($row = $stmt->fetch()) {
    ?> 
    <li>
        <a href="book.php?id=<?= $row["id"]; ?>">
        <?=$row['title']; ?>
        
    </a>
    
    </li>;



    <?php
while ($row = $stmt->fetch()) {
    ?> 
    <select name="" id="">
    <li>
        <a href="book.php?id=<?= $row["id"]; ?>">
        <?=$row['first_name']; ?> <?= $row["last_name"]; ?>
        
    </a>
    
    </li>;
    </select>
<?php    
}
?>

</body>
</html>

<?php
