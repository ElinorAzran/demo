<!DOCTYPE html>
<!-- test -->
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Bootstrap -->
    <link href="/bower_components/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/bower_components/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/bower_components/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="/bower_components/gentelella/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/bower_components/gentelella/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <?php if(isset($_SESSION['message']) && $_SESSION['message']['is_error'] == true) { ?>
            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <?= $_SESSION['message']['text'] ?>
            </div>
            <?php
                
            } ?>

            <?php if(isset($_SESSION['message']) && $_SESSION['message']['is_error'] == false) { ?>
            <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <?= $_SESSION['message']['text'] ?>
            </div>
            <?php
            } ?>

            <form action="/login.php" method="post" onsubmit="return checkNumField()">
              <h1> הזנק לעתיד </h1>
              <div>
                <input type="text" style="text-align:right;" class="form-control" name="name" placeholder="ת.ז" pattern="[0-9]" title="נא להכניס רק ספרות" required/>
                  <span id="message"> </span>
              </div>
              <div>
                <input type="password" style="text-align:right;" class="form-control" name="password" placeholder="סיסמה" required />
              </div>
              <div>
                  <!--<input type="submit" value="התחבר" class="btn btn-default submit" >  -->
                <button class="btn btn-default submit">התחבר</button> 
                <!-- <a class="reset_pass" href="#">Lost your password?</a> -->
              </div>
              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">משתמש חדש?
                  <a href="#signup" class="to_register">צור חשבון</a>
                </p>

                <div class="clearfix"></div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <?php if(isset($_SESSION['message']) && $_SESSION['message']['is_error'] == true) { ?>
            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <?= $_SESSION['message']['text'] ?>
            </div>
            <?php
            } ?>

            <?php if(isset($_SESSION['message']) && $_SESSION['message']['is_error'] == false) { ?>
            <div class="alert alert-success alert-dismissible fade in" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                </button>
                <?= $_SESSION['message']['text'] ?>
            </div>
            <?php
                
            } ?>
            <form action="/register.php" method="post">
              <h1>צור חשבון</h1>
              <div>
                <input type="text" style="text-align:right;" name="username" class="form-control" placeholder="ת.ז" pattern="[0-9]" title="נא להכניס רק ספרות" required="" />
              </div>
              <div>
                <input type="text" style="text-align:right;" name="first_name" class="form-control" placeholder="שם פרטי" required="" />
              </div>
              <div>
                <input type="text" style="text-align:right;" name="last_name" class="form-control" placeholder="שם משפחה" required="" />
              </div>
              <div>
                <input type="password" style="text-align:right;" name="password" class="form-control" placeholder="סיסמה" required="" />
              </div>
              <div>
                <input type="password" style="text-align:right;" name="password_confirm" class="form-control" placeholder="אימות סיסמה" required="" />
              </div>
              <div>
                <button class="btn btn-default submit">אישור</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">יש לך כבר חשבון?
                  <a href="#signin" class="to_register">התחבר</a>
                </p>

                <div class="clearfix"></div>
                <br />
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>

    <?php unset($_SESSION['message']); ?>

    <script src="/bower_components/gentelella/vendors/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="/js/main.js"></script>
  </body>
</html>
