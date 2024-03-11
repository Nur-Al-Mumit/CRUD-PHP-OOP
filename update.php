<?php
include 'user.php';
$id = $_GET['user_id'];

$user = new User();
$user_info = $user->getUser($id);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $dob = $_POST['dateOfBirth'];
    $mobile = $_POST['mobile'];

    // echo $id, '<br>', $name,'<br>', $dob,'<br>', $mobile, '<br>';

    $user->updateUser($id, $name, $dob, $mobile);
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
            <h1 class="text-2xl font-bold mb-4 text-center">Update User's Info</h1>
            <form method="POST">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                    <input type="text" name="name" id="name" placeholder="Name" required value="<?php echo $user_info['name']; ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="dateOfBirth" class="block text-gray-700 text-sm font-bold mb-2">Date of Birth</label>
                    <input type="date" name="dateOfBirth" id="dateOfBirth" required value="<?php echo $user_info['dob']; ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="mb-4">
                    <label for="mobile" class="block text-gray-700 text-sm font-bold mb-2">Mobile</label>
                    <input type="tel" name="mobile" id="mobile" placeholder="Mobile Number" value="<?php echo $user_info['mobile']; ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>
                <div class="flex items-center justify-center">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </section>
</body>

</html>