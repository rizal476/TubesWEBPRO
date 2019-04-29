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
    <link rel="stylesheet" type="text/css" href="../assets/css/profile_style.css"/>
</head>
<body>
    <section class="profilebody" style="width: 100%; height: 600px; background-color: #fafafa;">
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8"><p>Profile</p></div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-8">
                    <form action="<?php echo base_url()?>loggedHome/updateProfile" method="post">
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Depan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" value="<?php echo $this->session->userdata("nama_depan");?>" name="nama_depan">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Belakang</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" value="<?php echo $this->session->userdata("nama_belakang");?>" name="nama_belakang">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputPassword" value="<?php echo $this->session->userdata("email");?>" name="email">
                            </div>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary" style="background-color: black; border: black; float:right;">Edit Profile</button>
                    </form>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </section>

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
                            <a class="dropdown-item" href="<?php echo base_url()?>home/YAS">Yoga Arizona Series</a>
                            <a class="dropdown-item" href="<?php echo base_url()?>home/SN">Sneaker Series</a>
                            <a class="dropdown-item" href="<?php echo base_url()?>home/APPAREL">Apparel</a>
                            <a class="dropdown-item" href="<?php echo base_url()?>home/DRESS">Dress</a>
                            <a class="dropdown-item" href="<?php echo base_url()?>home/clearance">Clearance Sale</a>
                        </div>
                    </div>
                <!-- </a> -->
                <a href="#">CONTACT NAH PROJECT</a>
                <a href="<?php echo base_url()?>home/about">ABOUT NAH PROJECT</a>
                <a href="#">UPCOMING NAH PROJECT</a>
                <br>
                <br>
                <br>
                <?php if ($this->session->userdata("email") == "") { ?>
                    <a href="<?php echo base_url()?>home/login">Login</a>
                    <a href="<?php echo base_url()?>home/search">Search</a>
                    <a href="<?php echo base_url()?>home/logout">Log Out</a>
                <?php } else if ($this->session->userdata("email") == "admin@admin.com") {?>
                    <a href="<?php echo base_url()?>loggedHome/profile">Logged in as <?php echo $this->session->userdata("nama");?></a>
                    <a href="<?php echo base_url()?>loggedHome/listCustomer">List Customer</a>
                    <a href="<?php echo base_url()?>loggedHome/lihatSepatu">List Produk</a>
                    <a href="<?php echo base_url()?>home/search">Search</a>
                    <a href="<?php echo base_url()?>home/logout">Log Out</a>
                <?php } else {?>
                    <a href="<?php echo base_url()?>loggedHome/profile">Logged in as <?php echo $this->session->userdata("nama");?></a>
                    <a href="<?php echo base_url()?>home/search">Search</a>
                    <a href="<?php echo base_url()?>home/logout">Log Out</a>
                <?php };?>
                </div>
                <div class="menu" onclick="openNav()">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                </a>
            </div>
            <div class="col-4" style="padding: 15px;"><a class="foto1" href="<?php echo base_url()?>home"><img src="../assets/img/nah_hitam.png"></a></div>
            <div class="col-4" style="padding: 15px;"><a class="foto2" href="#"><img class="bag" src="../assets/img/bag.png"></a></div>
            </div>
        </div>

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