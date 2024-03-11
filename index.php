<?php
include 'user.php';
$user = new User();
$users =  $user->getUsers();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <section class="p-10">
        <a href="./create_user.php" class="px-5 py-2 bg-green-600 text-white rounded font-bold hover:bg-green-700">Create User +</a>
        <table class="w-full border mt-4">
            <thead>
                <th class="border border-black">ID</th>
                <th class="border border-black">Name</th>
                <th class="border border-black">Age</th>
                <th class="border border-black">Mobile</th>
                <th class="border border-black">Action</th>
                <th class="border border-black">Created at</th>
                <th class="border border-black">Updated at</th>
            </thead>
            <tbody>
                <?php
                foreach ($users->fetch_all(MYSQLI_ASSOC) as $row) {
                    echo "
                    <tr class='text-center'>
                        <td class='border border-black'>{$row['id']}</td>
                        <td class='border border-black'>{$row['name']}</td>
                        <td class='border border-black'>{$row['dob']}</td>
                        <td class='border border-black'>{$row['mobile']}</td>
                        <td class='border border-black p-1'>
                        <a href='./update.php?user_id={$row['id']}'>
                        <button class='px-5 py-1 rounded bg-blue-400 hover:bg-blue-500 text-white font-bold'>Update</button>
                        </a>
                        <a href='./delete_user.php?user_id={$row['id']}'>
                        <button type='submit' class='px-5 py-1 rounded bg-red-500 hover:bg-red-400 text-white font-bold ml-2'>Delete</button>
                        </a>
                        </td>
                        <td class='border border-black'>{$row['created_at']}</td>
                        <td class='border border-black'>{$row['updated_at']}</td>
                    </tr>
                    ";
                }
                ?>

            </tbody>
        </table>
    </section>
</body>

</html>