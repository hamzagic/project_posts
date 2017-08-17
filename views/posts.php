<link rel="stylesheet" href="style.css">


<h2 class="placement">What's on your mind?</h2>
<form method="post" action="">
  <div class="form-group">
    <div class="placement"> 
  <input type="text" class="form-control" id="usr" name="usr" placeholder="Username"><br>
  <textarea class="form-control" rows="3" id="msg" name="msg" placeholder="Write your post"></textarea>
  <div class="form-group">
  <input type="hidden" name="post" id="post" value="posted">
    <button class="btn btn-primary" name="submit" id="bt-post">Submit</button>
</form>
<hr>
<div class="posts">

   

<?php

  $post = new SignLogin();
  $post->displayPost();

  if (isset($_POST['post'])) {
     if ($_POST['post'] == 'posted') {
      
       $user = new SignLogin();   
       $user->writePost();
     }

  }
  
  


?>
      </div> 
    </div> 
  </div>
</div>