<?php
include("../../path.php");
?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom css -->
    <link rel="stylesheet" href="../../css/admin.css">
    <link rel="stylesheet" href="../../css/style.css">

    <!-- Line awesome -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <title>Create user</title>
</head>
<body>
<?php include(ROOT_PATH . "/app/includes/adminHeader.php")?>

    <div class="admin-wrapper">
    <?php include(ROOT_PATH . "/app/includes/adminSidebar.php")?>

        <div class="admin-content">
            <div class="button-group">
                <a href="create.php">Add User</a>
                <a href="index.php">Manage Users</a>
            </div>

            <div class="content">
                <h2 class="page-title">Add User</h2>

                <?php include(ROOT_PATH . "/app/helpers/formErrors.php")?>

                <form action="create.php" method="post">
                    <div>
                        <label>Username</label>
                        <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
                    </div>
                    <div>
                        <label>Email</label>
                        <input type="email" name="email" value="<?php echo $email; ?>"class="text-input">
                    </div>
                    <div>
                        <label>Password</label>
                        <input type="password" name="password" value="<?php echo $password; ?>"class="text-input">
                    </div>
                    <div>
                        <label>Confirm Password</label>
                        <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>"class="text-input">
                    </div>
                    <div>
                        <?php if(isset($admin) && $admin == 1): ?>
                            <label>
                                <input type="checkbox" name="admin" checked>
                            Admin
                            </label>
                        <?php else: ?>
                            <label>
                                <input type="checkbox" name="admin">
                            Admin
                            </label>
                        <?php endif;?>
                    </div>
                    <div><button type="submit" name="create-admin" class="add-btn">Add User</button></div>
                </form>
            </div>

        </div>

    </div>
</body>
</html>