<?php
require_once('database.php');

// Get all categories
$query = 'SELECT * FROM categories1
                       ORDER BY categoryID';
$statement = $db->prepare($query);
$statement->execute();
$categories = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<!-- the body section -->
<body>
<header><h1>Product Manager</h1></header>
<main>
    <h1>Category List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
        
        <!-- add code for the rest of the table here -->
    
    </table>

    <h2>Add Category</h2>
    
    <!-- add code for the form here -->
    
    <br>
    <p><a href="guitar_shop_ch4.php">List Products</a></p>

    </main>

<?php include ('footer.php')?>
</body>
</html>
