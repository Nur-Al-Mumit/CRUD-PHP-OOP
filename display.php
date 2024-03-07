<?php
include 'index.php';
$user = new User();
$users =  $user->getUsers();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>

<body>
    <table border="1px">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Age</th>
            <th>Mobile</th>
        </thead>
        <tbody>
            <?php
            foreach ($users->fetch_all(MYSQLI_ASSOC) as $row) {
                // echo "<tr>{$row['id']}</tr>";
                echo "
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['dob']}</td>
                    <td>{$row['mobile']}</td>
                </tr>
                ";
            }
            ?>

        </tbody>
    </table>
</body>

</html>