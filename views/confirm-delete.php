<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Delete</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/dbc5b98639.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <?php 
        include "../classes/User.php";

        $u = new User;
        $user = $u->getUser($_GET['id']);
    ?>
    <div class="container text-center mt-5">
        <i class="fa-solid fa-triangle-exclamation text-warning"></i>
        <h1 class="h4 text-danger mt-3 mb-4">DELETE USER</h1>

        <p>Are you sure you want to delete user <strong><?= $user['username'] ?></strong>?</p>
        
        <a href="dashboard.php" class="btn btn-secondary me-3">Cancel</a>
        <form action="../actions/delete-user.php?id=<?= $user['id'] ?>" method="post" class="d-inline">
            <button type="submit" class="btn btn-outline-danger">Delete</button>
        </form>
    </div>
</body>
</html>