
<?php $msg="Sign UP";?>
<?php include 'include/inc-css.php'; ?>
<?php include 'include/inc-nav-login.php'; ?>
<style>

label{color: #aaa}
.form-check{
  margin-top: 68%;
  margin-right: 70%;
}
</style>

<body id="page-top">


<div class="intro route bg-image" style="background-image: url(#fff)">
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
              <div class="form-group">
                <input type="text" class="form-control" name="displayname" id="displayname" placeholder="Displayname" required  />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-12 mb-3">
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required  />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-12 mb-3">
              <div class="form-group">
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Mobile phone" required  />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="form-group">
                  <select id="inputState" class="form-control" required>
                            <option selected>University 1 </option>
                            <option>University 2</option>
                            <option>University 3</option>
                            <option>University 4</option>
                            <option>University 5</option>
                            <option>University 6</option>
                            <option>University 7</option>
                            <option>University 8</option>
                            <option>University 9</option>
                            <option>University 10</option>

                  </select>
                  <div class="validation"></div>
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="form-group">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password" required  />
                  <div class="validation"></div>
                </div>
            </div>
            <div class="col-md-12 mb-3">
                <div class="form-group">
                  <input type="password" class="form-control" name="confirmpassword" id="password" placeholder="Confirm password" required  />
                  <div class="validation"></div>
                </div>
            </div>

            <div class="col-md-12">
              <button type="submit" class="button button-a btn-lg w-100">Sign up</button>
            </div>
          </div>
        </form>

          </div>
          <div class="col">
            <div class="col ">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="autoSizingCheck2">
                <label class="form-check-label" >
                  graduated
                </label>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>
  <?php include 'include/inc-js.php'; ?>
</body>
