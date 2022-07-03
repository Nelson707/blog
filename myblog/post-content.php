<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");


if(isset($_GET['id'])){
  $post = selectOne('posts', ['id' => $_GET['id']]);
}

$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/post-content.css">
    <title><?php echo $post['title'];?> | Nelson </title>

    <!-- bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Line awesome -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
  integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>
<body>
    
<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

      <!-- post content -->
      <div class="post-content">
          <div class="post-slider">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./assets/image_6.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./assets/image_7.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="./assets/image_3.png" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
          </div>

          <div class="post-container">
              <div class="post-text">
                <h1><?php echo $post['title'];?></h1>
                <i class="far fa-user"><?php echo $post['username'];?></i>&nbsp;
                <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at']));?></i>
                <?php echo html_entity_decode($post['body']);?>

                <div class="share-post">
                  <strong>Share to:</strong>
                  <div>
                    <i class="lab la-facebook-square fb"></i>
                    <i class="lab la-instagram ig"></i>
                    <i class="lab la-twitter tw"></i>
                  </div>
                </div>

                <div class="post-comments">
                  <h1>Leave A Comment</h1>
                  <input type="text" placeholder="Name*">
                  <input type="email" placeholder="Email*">
                  <textarea name="" id="" placeholder="Message*" cols="30" rows="5"></textarea>
                  <button type="submit">Submit</button>
                </div>
              </div>


              <div class="sidebar">
                <div class="popular-posts">
                  <h2>Popular Posts</h2>
                  <?php foreach($posts as $p):?>
                    <div class="p-post-card">
                      <img src="<?php echo BASE_URL . '/assets/images/' . $p['image'];?>" alt="">
                      <div class="post-desc">
                        <a href="#"><span><strong><?php echo $p['title']?></strong></span></a>
                      </div>
                    </div>
                  <?php endforeach;?>
                  
                </div>

                <h2 class="sidebar-title">Topics</h2>
                <ul>
                  <?php foreach ($topics as $topic): ?>
                    <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']?>"><?php echo $topic['name']; ?></a></li>
                  <?php endforeach; ?>
                </ul>
              </div>
          </div>


      </div>
    

      <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

</body>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- custom js -->
    <script src="script.js"></script>
</html>