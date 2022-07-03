<?php
include("../../path.php");
?>
<?php include(ROOT_PATH . "/app/controllers/topics.php");
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

    <title>Edit Topic</title>
</head>
<body>
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php")?>

    <div class="admin-wrapper">
    <?php include(ROOT_PATH . "/app/includes/adminSidebar.php")?>

        <div class="admin-content">
            <div class="button-group">
                <a href="create.php">Add Topic</a>
                <a href="index.php">Manage Topics</a>
            </div>

            <div class="content">
                <h2 class="page-title">Edit Topic</h2>
                <?php include(ROOT_PATH . "/app/helpers/formErrors.php");?>

                <form action="edit.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>" >
                    <div>
                        <label>Name</label>
                        <input type="text" name="name" value="<?php echo $name; ?>" class="text-input">
                    </div>
                    <div>
                        <label>Description</label>
                        <textarea name="description" id="topic-description" cols="30" rows="10"><?php echo $description; ?></textarea>
                    </div>
                    <div><button type="submit" name="update-topic" class="add-btn">Update Topic</button></div>
                </form>
            </div>

        </div>

    </div>

    <!-- Ckeditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>

    <!-- ckeditor -->
    <script>
        // let name;
        let topicDescription;

        // ClassicEditor
        //     .create(document.querySelector(
        //         '#name'
        //     ))

        //     .then(editor => {
        //         title = editor;
        //     }).
        // catch(error => {
        //     console.error(error);
        // });

        ClassicEditor
            .create(document.querySelector(
                '#topic-description'
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