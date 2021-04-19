<?php include "header.php"; ?>


<br></br>

<div class="container">
<div class="row"> 
<div class="col-7"> 
<?php
$query = "SELECT * FROM posts ORDER BY post_id DESC";
        $select_posts = mysqli_query($connection,$query);  
        while($row = mysqli_fetch_assoc($select_posts)){
        $post_id            = $row['post_id'];
        $post_title         = $row['post_title'];
        $post_status        = $row['post_status'];
        $post_image         = $row['post_image'];
        $post_content       = substr($row['post_content'],0,100);
        $post_tags          = $row['post_tags'];
        $post_date          = $row['post_date']; ?>
<br></br>
<div class="card text-white bg-dark border-primary" >
<div class="card-header">

<?php echo $post_title ; ?>
  </div>
  <img src="images/<?php echo $post_image ; ?>" class="card-img-top" alt="...">
 
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text"><?php echo $post_content ; ?></p>
    <a href="post.php?p=<?php echo $post_id ; ?>" class="btn btn-primary">Read more</a> </div> 
    <div class="card-footer">
     <small> <?php echo $post_date ; ?> </small>
  </div>
</div>

<?php } ?>

</div>

<div class="col-5"> <br></br>
<div class="card text-white bg-danger mb-3 border-primary">
<div class="card-header">
    Featured
  </div>
  <img src="images/28.jpg" class="card-img-top" alt="...">
 
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
</div></div>
</div> </div>
<br></br><br></br><br></br>

<?php include "footer.php"; ?>
