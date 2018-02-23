<html>
<head><title>PHP says hello</title></head>
<body>
<?php

$db = new PDO('sqlite:dinner.db');

$meals = array('breakfast', 'lunch', 'dinner');

if(in_array($_POST['meal'], $meals)) {
    $stmt = $db->prepare('SELECT dish,price FROM meals WHERE meal LIKE ?');
    $stmt->execute(array($_POST['meal']));
    $rows = $stmt->fetchAll();

    if(count($rows) == 0) {
        print "No dishes available";
    } else {
        print '<table><tr><th>Dish</th><th>Price</th></tr>';
        foreach ($rows as $row) {
            print "<tr><td>$row[0]</td><td>$row[1]</td></tr>";
        }
        print "</table>";
    }
} else {
    print "Unknown meal";
}

?>
</body>
</html>
