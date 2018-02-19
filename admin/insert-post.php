<?php 
$result=false;
if (!empty($_POST)) {
  $sql='INSERT INTO blog_posts(title,content) VALUES(:title,:content)';
  $query=$pdo->prepare($sql);
  $result=$query->execute([
    'title'=>$_POST['title'],
    'content'=>$_POST['content']
  ]);

}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Blog</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Blog Title</h1>
        </div>
      </div>
    <div class="row">

      <div class="col-md-8">
        <h2>New Posts</h2>
        <p>
            <a class="btn btn-default" href="posts.php">Back</a>
        </p>
        <p>
          <?php
          if($result){
            echo '<div class="alert alert-success">Post saved!!</div>';
          }
           ?>
        </p>

        <form class="" action="insert-post.php" method="post">
          <div class="form-group">
            <label for="inputTitle">Title</label>
            <input type="text" name="title" id="inputTitle" value="" class="form-control">
          </div>
          <textarea  class="form-control" name="content" id="inputContent" rows="5" cols="80"></textarea>
          <input type="submit" name="" value="Save" class="btn btn-primary">
        </form>
        <?php

         ?>

      </div>

      <div class="col-md-4">

          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>

    </div>
    <div class="row">
      <div class="col-md-12">
          <footer>This is a footer<br>
          <a href="admin/index.php">Admin Panel</a></footer>
      </div>

    </div>

    </div>
  </body>
</html>
