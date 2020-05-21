<?php
if ( !isset($loginError) ) {
        $loginError = "";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reuben Pena | Dash</title>
    <link href="https://fonts.googleapis.com/css?family=Alegreya|Nanum+Myeongjo|Oleo+Script&display=swap" rel="stylesheet"> 
    <link href="../styles/bootstrap.css" rel="stylesheet">
    <link href="../styles/main.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/974871ddab.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
      <div id="secondTopNav">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-dark px-0 back-dark"><a class="text-primary navbar-brand" href="?action=home"><img src="../images/Joelle-logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#da-navbarNav" aria-controls="da-navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse text-uppercase" id="da-navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link smooth-scroll text-white font-bold" href="#learn">Areas of Focus</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll text-white font-bold" href="#about-me">About Me</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll text-white font-bold" href="#plans">Plans</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll text-white font-bold" href="#testimonial-section">Testimonials</a></li>
                <li class="nav-item"><a class="nav-link smooth-scroll text-white font-bold" href="#contact-section">Contact</a></li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
<div class="da-section da-work" id="about-me">
  <div class="container">
    <div class="col-md-12">
      <div class="card mb-3" data-aos="flip-right">
        <div class="card-body mt-4 mb-1">
          <h3>Contact Joelle</h3>
          <div class="border-line"></div>
          <div class="row">
            <div class="login-form">
                <div id="form-header">
                    <h1>Login</h1>
                    <i class="fas fa-user"></i>
                </div>
                <form action="authentication.php" method="post"> 
                    <input type="text" name="username" placeholder="Username" id="username" required>
                    <input type="password" name="password" placeholder="Password" id="password" required>
                    <input type="submit" value="Login">
                </form>
            </div>
          <div class="border-line mt-4"></div>
        </div>
      </div>
    </div>
  </div>
</div>
    <div class="login-body">
        <div class="rp-max-w rp-p-x-2 login-wrapper">
            
        </div>
    </div>
    </div>
    <?php if (!empty($loginError)) : ?>
    <div id="errorWrapper">
        <p><?php echo $loginError; ?></p>
        <button id="closeButton" onClick="btnClose()">Close</button>
    </div>
    <?php endif; ?>
    <script>
        function btnClose() {
            document.getElementById("errorWrapper").style.display = "none";
        }
    </script>
</body>
</html>