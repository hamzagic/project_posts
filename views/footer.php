<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap.min.js"></script>
    <script src="controllers/scripts.js" type="text/javascript"></script> 
    
    <!--modal-->
    <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
        <h4 class="modal-title" id="title">Sign Up</h4>
      </div>
      <div class="alert alert-danger" role="alert" id="errors" style="visibility: hidden;">
        
      </div>
      <div class="modal-body">
      <form method="post" action="">
      <input type="hidden" id="hid" name="hid" value="1">
        <label for="recipient-name" class="control-label" id="fname-label">First Name:</label>
        <input type="text" class="form-control" name="fname" id="fname">
        <label for="recipient-name" class="control-label" id="lname-label">Last Name:</label>
        <input type="text" class="form-control" name="lname" id="lname">
        <label for="recipient-name" class="control-label" id="usr-label">Username:</label>
        <input type="text" class="form-control" name="username" id="username">
        <label for="recipient-email" class="control-label">Email:</label>
        <input type="email" class="form-control" name="email" id="email">
        <label for="recipient-password" class="control-label">Password:</label>
        <input type="password" class="form-control" name="pass" id="pass">
      </div>
      <div class="modal-footer">
        <a id="toggle"> Log In </a>
        <input type="hidden" name="sign" id="sign" value="signup">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-primary" name="submit" value="1" id="login3">Sign Up</button>
      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

    <!--form to test
    
    <form method="post" action="">
     <div class="row">
  <div class="col-md-4">
  <div class="form-group">
    <label for="exampleInputName1">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="pass" placeholder="Password">
  </div>-->
  
  <!--<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>
</div>-->



  </body>
</html>