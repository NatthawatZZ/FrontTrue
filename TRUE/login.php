
  <?php $msg="Login"; ?>
  <?php include 'include/inc-css.php'; ?>
  <?php include 'include/inc-nav-login.php'; ?>
  <style>
  p{color: #aaa}
  p.ex {display: inline;}
  a{color: #0000FF;}

  </style>

  <body id="page-top">

  <div id="home" class="intro route bg-image" style="background-image: url(#fff)">
      <!-- <div class="overlay-itro"></div> -->
      <div class="intro-content display-table">
        <div class="table-cell">
          <div class="container">
            <div class="row">
              <div class="col"></div>
                <div class="col">
            <form action="" method="post" role="form" class="contactForm" >
            <div id="errormessage"></div>
            <div class="row">
              <div class="col-md-12 mb-3">
              </div>
              <div class="col-md-12 mb-3">
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Username" required  />
                  <div class="validation"></div>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                  <div class="form-group">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required  />
                    <div class="validation"></div>
                  </div>
              </div>
              <div class="col-md-12">
                <button type="submit" class="button button-a btn-lg w-100">Login</button>
              </div>
            <div class="col-md-12 mb-3">
              <br><br>
                <a href="forget.php">forgot password</a>
                <p class="ex">or</p>
                <a href="signup.php" >sign up</a>
              </div>
            </div>
          </form>

            </div>
            <div class="col"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>
    <?php include 'include/inc-js.php'; ?>
  </body>
