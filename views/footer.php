<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap.min.js"></script>
    <script type="text/javascript" src="controllers/scripts.js"></script>
    
    <!--modal-->
    <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="title">Sign Up</h4>
      </div>
      <div class="modal-body">
      <form method="post" action="">
      <input type="hidden" id="hid" name="hid" value="1">
        <label for="recipient-name" class="control-label">Name:</label>
        <input type="text" class="form-control" name="name" id="name">
        <label for="recipient-email" class="control-label">Email:</label>
        <input type="email" class="form-control" name="email" id="email">
        <label for="recipient-password" class="control-label">Password:</label>
        <input type="password" class="form-control" name="pass" id="pass">
      </div>
      <div class="modal-footer">
        <a id="toggle"> Log In </a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit" id="login2">Sign Up</button>
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