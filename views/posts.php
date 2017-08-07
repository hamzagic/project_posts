<link rel="stylesheet" href="style.css">

<h2 class="placement">What's on your mind?</h2>
<form method="post" action="">
  <div class="form-group">
    <div class="placement"> 
  <input type="email" class="form-control" id="email" name="email" placeholder="Email"><br>
  <textarea class="form-control" rows="3" id="msg" name="msg" placeholder="Write your post"></textarea>
  <div class="form-group">
    <button type="submit" class="btn btn-primary" name="submitPost" id="bt-post">Submit</button>
</form>
<hr>
<div class="posts">
<?php

  $post = new SignLogin();
  $post->displayPost();
  
  $user = new SignLogin();   
  $user->writePost();


?>
</div> 
   </div> 
  </div>
</div>