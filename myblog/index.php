<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");

$posts = array();
$postsTitle = 'Recent Posts';

if(isset($_GET['t_id'])){
  $posts = getPostsByTopicId($_GET['t_id']);
  $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
} else if(isset($_POST['search-term'])){
  $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
  $posts = searchPosts($_POST['search-term']);
} else{
  $posts = getPublishedPosts();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- custom css -->
  <link rel="stylesheet" href="css/style.css">
  <title>myblog</title>

  <!-- bootstrap css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <!-- Line awesome -->
  <link rel="stylesheet"
    href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


</head>

<body>

<?php include(ROOT_PATH . "/app/includes/header.php"); ?>
<?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

  <div class="post-slider">
    <h1 class="slider-title">Trending Posts</h1>
    <i class="fas fa-chevron-left prev"></i>
    <i class="fas fa-chevron-right next"></i>

    <div class="trending-post-wrapper">
      <?php foreach ($posts as $post): ?>
        <div class="trending-post">
          <img src="<?php echo BASE_URL . '/assets/images/' . $post['image'];?>" alt="" class="slider-image">
          <div class="trending-post-info">
            <h5><a href="post-content.php?id=<?php echo $post['id']; ?>"><?php echo $post['title'];?></a></h5>
            <i class="far fa-user author"> <strong><?php echo $post['username'];?></strong></i>&nbsp;
            <i class="far fa-calendar date"> <?php echo date('F j, Y', strtotime($post['created_at']));?></i>
          </div>
        </div>
      <?php endforeach;?>

    </div>
  </div>
  <!-- main content -->
  <div class="main-content">
    
    <div class="recent-posts">
      <h1><?php echo $postsTitle?></h1>
      <?php foreach ($posts as $post): ?>
        <div class="post">
          <img src="<?php echo BASE_URL . '/assets/images/' . $post['image'];?>" alt="" class="post-image">
          <div class="post-info">
            <div class="post-title">
              <h4><a href="post-content.php?id=<?php echo $post['id']; ?>"><?php echo $post['title'];?></a></h4>
              <i class="far fa-user author"> <strong><?php echo $post['username'];?></strong></i>&nbsp;
              <i class="far fa-calendar date"> <?php echo date('F j, Y', strtotime($post['created_at']));?></i>
            </div>
            <div class="post-description">
              <p><?php echo html_entity_decode(substr($post['body'], 0, 150) . '...');?></p>
            </div>
          </div>
        </div>
      <?php endforeach;?>
      

    </div>

    <div class="sidebar">
      <h2 class="sidebar-title">Topics</h2>
      <ul>
      <?php foreach ($topics as $key => $topic): ?>
        <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']?>"><?php echo $topic['name']; ?></a></li>
      <?php endforeach; ?>
      </ul>

      <div class="adverts">
        <span>Adverts</span>
      </div>

    </div>
  </div>

  <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
  

  <!-- bootstrap js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- custom js -->
  <script src="js/script.js"></script>
</body>

</html>