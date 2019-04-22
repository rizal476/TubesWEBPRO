<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NAH Project</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/css/home_style.css"/>
    <link rel="stylesheet" type="text/css" href="../assets/css/forgotpass_style.css"/>
</head>
<body>
    <div id="navbar" class="container-fluid">
        <div class="row">
            <div class="col-4">
                <a href="#home">
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" id="closebtn" onclick="closeNav()">&times;</a>
                        <a href="<?php echo base_url()?>home/payment">PAYMENT CONFIRMATION</a>
                        <!-- <a href="#"> -->
                        <div class="dropdown">
                            <button type="button" class="dropdown-toggle" data-toggle="dropdown" onclick="">
                                    ALL PRODUCTS
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Link 1</a>
                                <a class="dropdown-item" href="#">Link 2</a>
                                <a class="dropdown-item" href="#">Link 3</a>
                            </div>
                        </div>
                        <!-- </a> -->
                        <a href="#">CONTACT NAH PROJECT</a>
                        <a href="<?php echo base_url()?>home/about">ABOUT NAH PROJECT</a>
                        <a href="#">UPCOMING NAH PROJECT</a>
                        <br><br><br>
                        <a href="<?php echo base_url()?>home/login">Login</a>
                        <a href="<?php echo base_url()?>home/createAccount">Create Account</a>
                        <a href="<?php echo base_url()?>home/search">Search</a>
                    </div>
                    <div class="menu" onclick="openNav()">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </a>
            </div>
            <div class="col-4" style="padding: 15px;"><a class="foto1" href="<?php echo base_url()?>home"><img src="http://localhost/TUBES/assets/img/nah_hitam.png"></a></div>
            <div class="col-4" style="padding: 15px;"><a class="foto2" href="#"><img class="bag" src="http://localhost/TUBES/assets/img/bag.png"></a></div>
        </div>
    </div>
  

   <section class="forgotpassbody" style="width: 100%; height: 600px; background-color: #fafafa;">
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-10"><p>Forgot Password</p></div>
            </div>

            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <form method="post" action="" class="form1">
                            <input type="email" placeholder="  Email" class="input">
                    </form>
                </div>
                <div class="col-2"></div>
            </div>

            <br>

            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                        <div class="column forgotpass"><a href="">FORGOT</a></div> 
                </div>
                <div class="col-2"></div>
            </div>
        </div>
   </section>

    <section class="footer">
        <div class="cari">
        <button class="search">
            <label>
            <a class="tulisan" style="text-decoration: none;color: #333" href="<?php echo base_url()?>home/search">SEARCH</a>
            </label>
        </button>
        </div>
        <div class="update">
            <form method="post" action="">
                <label>SIGN UP FOR UPDATE</label>
                <div class="kalimat"><p style="font-size:14px;">Promotions, new products and sales. Directly to your inbox.</p></div>
                <div><input type="email" name="email" placeholder="My email address"><div class="underline"></div></div>
                <div class="tombol">
                    <button type="submit" class="btn--newsletter__submit">Subscribe</button>
                </div>
            </form>
        </div>
    </section>
    <script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
      } else {
        document.getElementById("navbar").style.top = "-95px";
      }
      prevScrollpos = currentScrollPos;
    }
  </script>

  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
  </script>
</body>
</html>