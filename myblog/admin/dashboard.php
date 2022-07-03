<?php
include("../path.php");
?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");



adminOnly();


$sql = "SELECT COUNT(*) as totalPosts FROM posts";
$stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->get_result()->fetch_assoc();
$posts = $records["totalPosts"];

$sql = "SELECT COUNT(*) as totalUsers FROM users";
$stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->get_result()->fetch_assoc();
$users = $records["totalUsers"];

$sql = "SELECT COUNT(*) as totalTopics FROM topics";
$stmt = $conn->prepare($sql);
$stmt->execute();
$records = $stmt->get_result()->fetch_assoc();
$topics = $records["totalTopics"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom css -->
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/style.css">

    <!-- Line awesome -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <title>Dashboard</title>
</head>
<body>
<?php include(ROOT_PATH . "/app/includes/adminHeader.php")?>

    <div class="admin-wrapper">
    <?php include(ROOT_PATH . "/app/includes/adminSidebar.php")?>

        <div class="admin-content">

            <div class="content">
                <h2 class="page-title">Dashboard</h2>

                <?php include(ROOT_PATH . "/app/includes/messages.php")?>

                <div class="dashboard">
                    <div class="db-data">
                        <div class="box">
                            <div>Posts</div>
                            <div><?php echo $posts?></div>
                        </div>
                    </div>

                    <div class="db-data">
                        <div class="box">
                            <div>Users</div>
                            <div><?php echo $users?></div>
                        </div>
                    </div>

                    <div class="db-data">
                        <div class="box">
                            <div>Topics</div>
                            <div><?php echo $topics?></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Ckeditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>

    <!-- ckeditor -->
    <script>
        // let title;
        let postInformation;

        // ClassicEditor
        //     .create(document.querySelector(
        //         '#title'
        //     ))

        //     .then(editor => {
        //         title = editor;
        //     }).
        // catch(error => {
        //     console.error(error);
        // });

        ClassicEditor
            .create(document.querySelector(
                '#post-information'
            ))

            .then(editor => {
                title = editor;
            }).
        catch(error => {
            console.error(error);
        });

    </script>

</body>
</html>