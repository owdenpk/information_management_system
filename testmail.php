
<div class="container">

  <form class="form-horizontal" role="form" method="post" action="register.php">
  	
    <?php include('error.php'); ?>
    <br>

  	<div class="row">
      <div class="col-md-3 field-label-responsive">
                <label for="name"><b>Username</b></label>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                        <input type="text" name="username" class="form-control" id="name" value="<?php echo $username; ?>"
                               placeholder="someone someone" required autofocus>
                    </div>
                </div>
            </div>
             <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put name validation error messages here -->
                        </span>
                      </div>
                    </div>
                  </div>

      <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="email"><b>E-Mail Address</b></label>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                        <input type="text" name="email" class="form-control" id="email" value=""
                               placeholder="you@example.com" required autofocus>
                    </div>
                </div>
            </div>

              <div class="row">
      <div class="pp"></div>
            <div class="col-md-3">
                <button type="submit" class="btn btn-success" name="reg_user"><i class="fa fa-user-plus"></i><b> Register</b></button>
    </div>

  </div>
</div>
</form>
</div>
