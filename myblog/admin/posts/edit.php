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

    <title>Edit post</title>
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
                <h2 class="page-title">Edit post</h2>

                <?php include(ROOT_PATH . "/app/helpers/formErrors.php")?>

                <form action="edit.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id ?>" >
                <div>
                        <label for="">Title</label>
                        <input type="text" name="title" value="<?php echo $title ?>" class="text-input">
                    </div>
                    <div>
                        <label for="">Body</label>
                        <textarea name="body" id="post-information" cols="30" rows="10"><?php echo $body ?></textarea>
                    </div>
                    <div>
                        <label>Image</label>
                        <input type="file" name="image" class="text-input">
                    </div>
                    <div>
                        <label>Topic</label>
                        <select name="topic_id" class="text-input">
                            <option value=""></option>
                            <?php foreach($topics as $key => $topic):?>
                                <?php if(!empty($topic_id) && $topic_id == $topic['id']):?>
                                    <option selected value="<?php echo $topic['id'] ?>"><?php echo $topic['name']?></option>
                                <?php else:?>
                                    <option value="<?php echo $topic['id'] ?>"><?php echo $topic['name']?></option>
                                <?php endif;?>

                            <?php endforeach;?>
                        </select>
                    </div>
                    <div>
                        <?php if(empty($published) && $published == 0):?>
                            <label>
                                <input type="checkbox" name="published">
                            publish 
                            </label>
                        <?php else:?>
                            <label>
                                <input type="checkbox" name="published" checked>
                            publish 
                            </label>
                        <?php endif;?>
                    </div>
                    <div><button type="submit" name="update-post" class="add-btn">Update Post</button></div>
                </form>
            </div>

        </div>

    </div>

    <!-- Ckeditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>

    <!-- ckeditor -->
    <script>
        let title;
        let postInformation;

        ClassicEditor
            .create(document.querySelector(
                '#title'
            ))

            .then(editor => {
                title = editor;
            }).
        catch(error => {
            console.error(error);
        });

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