<?php
include("../../path.php");
?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");
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

    <title>Manage Posts</title>
</head>
<body>
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php")?>

    <div class="admin-wrapper">
    <?php include(ROOT_PATH . "/app/includes/adminSidebar.php")?>

        <div class="admin-content">
            <div class="button-group">
                <a href="create.php">Add Post</a>
                <a href="index.php">Manage Posts</a>
            </div>

            <div class="content">
                <h2 class="page-title">Manage posts</h2>

                <?php include(ROOT_PATH . "/app/includes/messages.php")?>

                <table>
                    <thead>
                        <th>SN</th>
                        <th>title</th>
                        <th>Author</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach($posts as $key => $post):?>
                        <tr>
                            <td><?php echo $key + 1;?></td>
                            <td><?php echo $post['title']?></td>
                            <td>Nelson</td>
                            <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">edit</a></td>
                            <td><a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="delete">delete</a></td>
                            <?php if($post['published']):?>
                                <td><a href="edit.php?published=0&p_id=<?php echo $post['id'] ?>" class="unpublish">unpublish</a></td>
                            <?php else:?>
                                <td><a href="edit.php?published=1&p_id=<?php echo $post['id'] ?>" class="publish">publish</a></td>
                            <?php endif;?>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>

            </div>

        </div>

    </div>

</body>
</html>