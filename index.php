<!DOCTYPE html>
<html>
<head>
  <title>Main Page</title>
   <link rel = "stylesheet" type = "text/css" href = "\CodeIgniter-3.1.4\css\bootstrap.css">
    
</head>
<body>
<div class="container">
<br>
<br>
<?php echo form_open('login/check'); ?>
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
      <input type="email" class="form-control" name="email" placeholder="Email" required="required">
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
      <input type="password" class="form-control" name="password" placeholder="Password" required="required">
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>
</div>
</body>
</html>
