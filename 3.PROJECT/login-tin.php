<?php
    include("include/header.php");
?>


  <div class="container">
    <form>
      <div class="form-login">
      <h5><span style="color:blue">L</span><span style="color:red">O</span><span style="color:yellow">G</span><span style="color:green">I</span><span style="color:violet">N</span></h5>
      <div class="form-group">
        <label for="">Username</label>
        <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Enter Username">
        <small id="helpId" class="form-text text-muted"></small>
      </div>
      <div class="form-group">
        <label for="">Password</label>
        <input type="password" class="form-control" name="" id="" placeholder="Enter Password">
      </div>
      <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
        <div class="modal-footer">
				<a href="#">Forgot Password?</a>
      </div>
      </div>
    </form>
  </div>

<?php
    include("include/footer.php");
?>

