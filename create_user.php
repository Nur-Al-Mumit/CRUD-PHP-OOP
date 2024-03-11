<?php

include 'user.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name =  $_POST['name'];
    $dob =  $_POST['dateOfBirth'];
    $mobile =  $_POST['mobile'];

    $user = new User();
    $user->createUser($name, $dob, $mobile);
    header("Location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <section class="bg-gray-100 min-h-screen flex items-center justify-center">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 max-w-md w-full">

            <h1 class="text-3xl font-bold text-center mb-4">Create User</h1>

            <form action="./create_user.php" method="POST" class="space-y-4">
                <label for="name" class="block">Name</label>
                <input type="text" name="name" id="name" placeholder="Name" required class="w-full border border-gray-300 rounded-md px-4 py-2">

                <label for="dateOfBirth" class="block">Date of Birth</label>
                <input type="date" name="dateOfBirth" id="dateOfBirth" required class="w-full border border-gray-300 rounded-md px-4 py-2">

                <label for="mobile" class="block">Mobile</label>
                <input type="number" name="mobile" id="mobile" class="w-full border border-gray-300 rounded-md px-4 py-2" required>

                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md">
                    Create
                </button>
            </form>
        </div>
    </section>

</body>

</html>