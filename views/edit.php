<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php
        session_start();
        include "nav.php";

        include "../classes/User.php";
        $u = new User;
        $user = $u->getUser($_GET['id']);
    ?>

    <div class="container">
        <form action="../actions/edit-user.php?id=<?= $user['id'] ?>" method="post" class="w-50 mx-auto">
            <h2 class="display-6 mb-3 text-uppercase text-center">Edit User</h2>

            <label for="first-name" class="form-label">First Name</label>
            <input type="text" name="first_name" id="first-name" value="<?= $user['first_name'] ?>" class="form-control mb-2" required>

            <label for="last-name" class="form-label">Last Name</label>
            <input type="text" name="last_name" id="last-name" required value="<?= $user['last_name'] ?>" class="form-control mb-2">

            <label for="username" class="form-label fw-bold">Username</label>
            <input type="text" name="username" id="username" value="<?= $user['username'] ?>" required class="form-control mb-3">

            <button type="submit" class="btn btn-warning px-2">Save</button>
            <a href="dashboard.php" class="btn btn-secondary ms-2 px-2">Cancel</a>
        </form>
    </div>
</body>
</html>