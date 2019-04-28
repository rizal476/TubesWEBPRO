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
    <style>
        .quote{
            width: 100%;
            height: 400px;
            background-color: black;
        }
        .col-md-12{
            color: white;
            height: 400px;
        }
        .isiquote{
            width: 100%;
            height: 70px;
            margin: 150px auto;
            text-align: center;
            vertical-align: middle;
            line-height: 70px; 
        }
        .body_home{
            width: 100%;
            height: 800px;
        }
        .coba{
            width: 640px; /*can be in percentage also.*/
            height: 200px;
            margin: 0 auto 40px;
            position: relative;
            text-align: center;
            vertical-align: middle;
            line-height: 200px;
        }
        .shopbutton{
            width: 80px; /*can be in percentage also.*/
            height: 50px;
            margin: -50px auto 0px;
            position: relative;
            text-align: center;
            vertical-align: middle;
            line-height: 50px;
            background-color: black;
            color: white;
            font-size: 12px;
        }
        .caption{
            margin-bottom: -5rem;
            margin-top: -100px;
        }

        #navbar {
            background-color: #fff;
            position: fixed;
            top: 0;
            width: 100%;
            height: 95px;
            display: block;
            transition: top 0.3s;
            font-size: 17px;
            text-align: center;
        }

        .menu{
            cursor: pointer;
            margin: 30px 0px 50px 300px;
        }

        .bar1, .bar2, .bar3 {
            width: 35px;
            height: 5px;
            background-color: #333;
            margin: 6px 0;
            transition: 0.4s;
            cursor: pointer;
        }

        .change .bar1 {
            -webkit-transform: rotate(-45deg) translate(-9px, 6px);
            transform: rotate(-45deg) translate(-9px, 6px);
        }

        .change .bar2 {opacity: 0;}

        .change .bar3 {
            -webkit-transform: rotate(45deg) translate(-8px, -8px);
            transform: rotate(45deg) translate(-8px, -8px);
        }

        .bag{
            width: 50px;
            height: 50px;
        }

        body{
            padding: 0;
            margin: 0;
        }

        .header{
            position: relative;
            height: 800px;
            min-height: 500px;
            width: 100%;
            /* background-color:black; */
            background-image: url('../img/header.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .foto1{
            width: 320px; /*can be in percentage also.*/
            height: 50px;
            margin: 0 auto;
            position: relative;
            text-align: center;
            vertical-align: middle;
            line-height: 50px;
        }

        .footer{
            position: relative;
            height: 300px;
            min-height: 200px;
            width: 100%;
            background: #fafafa;
        }

        .shop{
            margin: 0px 0px 0px 680px;
            width:150px;
            height:50px;
            text-align: center;
            vertical-align: middle;
            line-height: 50px;
            border:1px solid black;
            color:white;
            background-color: black;
        }

        .shopbtn{
            width: 100%;
            height: 800px;
            padding-top: 500px;
            position: relative;
        }

        .underline{
            background-color: black;
            height: 2px;
            width: 300px;
            position: relative;
        }

        input{
            background-color: transparent;
            border: none; 
            border-width: 0; 
            box-shadow: none;
            outline: none;
        }

        .tombol{
            height: 20px;
            width: 300px;
            position: relative;
            
        }

        .btn--newsletter__submit{
            float: right;
            margin-top: -27px;
            padding: 0;
            border: none;
            background: none;
            outline: none;
        }

        .kalimat{
            margin-bottom: 60px;
        }

        .update{
            margin: 0px 0px 0px 800px;
            width:400px;
            height:50px;
        }

        .search{
            border: none;
            background: none;
            outline: none;
        }

        .cari{
            margin: 0px 10px 10px 250px;
            padding-top: 50px;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 3;
            top: 0;
            left: 0;
            background-color: white;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            color: black;
        }

            .sidenav a:hover {
            color: grey;
            text-decoration: none;
            }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 17px;
            color: black;
            display: block;
            transition: 0.3s;
        }
        #closebtn{
            text-align: right;
            margin-right: 450px;
        }

    	body .main-content {
    	opacity: 1;
		}

		/* body {
	    font-family: Futura,sans-serif;
	    font-style: normal;
	    font-weight: 400;
	    font-size: 1.6rem;
	    color: #4a4a4a;
	    line-height: 1.625;
		}

		div {
	    display: block;
		} */

		.page-width {
	    zoom: 1;
	    max-width: 980px;
	    padding: 0 20px;
	    margin: 0 auto;
		}

		*, *::before, *::after {
    	box-sizing: border-box;
		}

		.grid {
	    zoom: 1;
	    list-style: none;
	    margin: 0;
	    padding: 0;
	    margin-left: -20px;
		}

		.text-center {
    	text-align: center !important;
		}


		.gridtengah {
	    float: left;
	    padding-left: 20px;
	    width: 100%;
	    font-size:75%;
		}


		h1, h2{
    	letter-spacing: inherit;
    	text-transform: inherit;
    	font-family: Futura,sans-serif;
    	font-style: normal;
    	font-weight: 400;
    	margin: 0 0 20px;
        padding-top: 150px;
		}


		.filter-menu {
	    margin-bottom: 20px;
	    display: block;
	    background-color: rgba(0,0,0,0);
	    border-radius: 3px;
	    border-bottom: 2px solid #ddd;
	    padding: 0px;
	    border: 1px solid rgba(0,0,0,0);
		}

		a {
    	background-color: transparent;
		}

		.filter-group h2 {
	    text-align: left;
	    margin-bottom: 10px;
	    padding-bottom: 5px;
	    padding-right: 45px;
	    color: #4a4a4a;
	    border-bottom: 2px solid #ddd;
	    font-size: 18px;
	    font-weight: 300;
	    margin-top: 0;
	    padding-top: 0;
	    border-top: none;
		}

		.filter-group {
	    text-align: left;
	    padding: 0 10px;
		}

		.filter-group li a {
	    display: inline-block;
	    margin-left: 6px;
	    text-decoration: none;
	    padding: 0;
	    font-size: 13px;
	    text-indent: -18px;
	    padding-left: 18px;
	    color: #222;
    	font-size: 13px;
    	font-weight: 300;
    	line-height: 20px;
		}

		.filter-group li div {
    	line-height: 17px;
		}


		.filter-group ul {
	    display: block;
	    margin: 0;
	    padding: 0;
	    font-size: 0;
	    padding-left: 0;
		}

		.smallbox ul li .collection-name a {
	    text-align: center;
	    display: block;
	    min-width: 46px;
	    padding: 4px 10px;
	    margin: 0;
	    text-indent: 0;
		}

		li {
	    display: list-item;
	    text-align: -webkit-match-parent;
		}

		.smallbox ul li {
	    display: inline-block;
	    margin-left: 0px !important;
	    margin-bottom: 10px;
	    margin-right: 5px;
	    background-color: #ffffff;
	    border: 1px solid #b3b3b3;
	    border-radius: 4px;
	    box-shadow: 0 1px 0 0 rgba(110,110,110,0.5);
		}

		.collection-container:hover{
			background:#cccccc;
		}

		.collection-name:hover a{
			color:white;
		}

		.side-filter-menu {
	    float: left;
	    width: 20%;
	    width: calc(0% + 230px);
	    padding-right: 10px;
		}

		.icon-blue{

		}

		.icon-gray{

		}

        .isi{
            width: 100%; /*can be in percentage also.*/
            position:absolute; /*it can be fixed too*/
            left:0; right:0;
            top:0; bottom:0;
            margin: 250px auto 0px;
        }
	</style>
</head>
<body>
	<section class="body" style="width: 100%; height: 1050px; background-color: #fafafa;">
    <div class="container">
        <h1 class="header-title" style="text-align: center;">Apparel</h1>
        <div class="deskripsi-header" style="text-align: center;">
            <div></div>
		</div>
        <div class="row">
            <div class="col-3">
                <div class="main-content" style="margin: 30px auto 0px;">
                    <div class="page-width">
                        <div class="grid text-center">
                            <div class="gridtengah">
                                <br>
                            </div>
                            <div>
                                <div class="side-container">
                                    <div class="side-filter-menu">
                                        <div class="filter-menu">
                                            <div class="filter-group">
                                                <h2>Price</h2>
                                                <div class="content-baris">
                                                    <ul class="nav-price ">
                                                        <li class="collection-container">
                                                            <!-- &#9746 itu symbol kayak checkbox -->
                                                            <div class="collection-name" ><a href="">&#9746; Rp300,000 to Rp400,000</a></div>
                                                        </li>
                                                        <li class="collection-container">
                                                            <div class="collection-name"><a href="#">&#9746; Over Rp400,000</a></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="filter-group smallbox">
                                                <h2>Size</h2>
                                                <div class="content-baris">
                                                    <ul class="nav-size">
                                                        <!-- collection-container itu bukan container dari setiap box, jadi ya kalo mencet/hover area itu yang berubash -->
                                                        <li class="collection-container">
                                                            <div class="collection-name"><a href="">36</a></div>
                                                        </li>
                                                        <li class="collection-container">
                                                             <div class="collection-name"><a href="">37</a></div>
                                                        </li>
                                                        <li class="collection-container">
                                                            <div class="collection-name"><a href="">41</a></div>
                                                        </li>
                                                        <li class="collection-container">
                                                            <div class="collection-name"><a href="">42</a></div>
                                                        </li>
                                                        <li class="collection-container">
                                                            <div class="collection-name"><a href="">43</a></div>
                                                        </li>
                                                        <li class="collection-container">
                                                            <div class="collection-name"><a href="">44</a></div>
                                                        </li>
                                                        <li class="collection-container">
                                                            <div class="collection-name"><a href="">45</a></div>
                                                        </li>
                                                        <li class="collection-container">
                                                            <div class="collection-name"><a href="" >46</a></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="filter-group">
                                                <h2>Collections</h2>
                                                <ul class="nav-collections ">
                                                </ul>
                                            </div>
                                            <div class="filter-group">
                                                <h2>Color</h2>
                                                <div class="filter-group">
                                                    <ul class="nav-color ">
                                                        <li class="collection-container">
                                                            <!-- i class untuk bikin kotak warna,belum jadi -->
                                                            <div class="collection-name"><a href="#"><i class="icon-biru"></i> Blue</a></div>
                                                        </li>
                                                        <li class="collection-container">
                                                            <div class="collection-name"><a href="#"><i class="icon-gray"></i> Gray</a></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="filter-group">
                                                <h2>Collection</h2>
                                                <div class="content-baris">
                                                    <ul class="nav-collections">
                                                        <li class="collection-container">
                                                            <div class="collection-name">
                                                                <a href="#" title="YAS"></i>&#9746; YAS</a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="filter-group">
                                                <h2>Sort By</h2>
                                                <div class="content-baris">
                                                    <ul class="nav-sortby">
                                                        <li><div class="sortby"><a href="#" style="font-weight:bold;">Featured</a></div></li> 
                                                        <li class="collection-container"><div class="sortby"><a href="#">Price: Low to High</a></div></li>
                                                        <li class="collection-container"><div class="sortby"><a href="#">Price: High to Low</a></div></li>
                                                        <li class="collection-container"><div class="sortby"><a href="#">Newest</a></div></li>
                                                        <li class="collection-container"><div class="sortby"><a href="#">Newest Last</a></div></li>
                                                        <li class="collection-container"><div class="sortby"><a href="#">Best Selling</a></div></li>
                                                        <li class="collection-container"><div class="sortby"><a href="#">A-Z</a></div></li>
                                                        <li class="collection-container"><div class="sortby"><a href="#">Z-A</a></div></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9" style="margin-top: 40px;">
                <div class="row">
                    <?php if (count($sepatu) < 6){?>
                        <?php if (count($sepatu) == 1){?>
                            <div class="col-3" style="text-align: center; margin-right: 30px;">
                                <img src="<?php echo "../".$sepatu[0]["path"]?>" style="width: 100%; height: 100%;"/>
                                <h3><?php echo $sepatu[0]["nama"]?></h3>
                            </div>
                        <?php } else if (count($sepatu) == 2){?>
                            <?php for ($i = 0; $i < 2; $i++) {?>
                                <div class="col-3" style="text-align: center; margin-right: 30px;">
                                    <img src="<?php echo "../".$sepatu[$i]["path"]?>" style="width: 100%; height: 100%;"/>
                                    <h3><?php echo $sepatu[$i]["nama"]?></h3>
                                </div>
                            <?php };?>
                        <?php } else if (count($sepatu) >= 3) {?>
                            <?php for ($i = 0; $i < 3; $i++) {?>
                                <div class="col-3" style="text-align: center; margin-right: 30px;">
                                    <img src="<?php echo "../".$sepatu[$i]["path"]?>" style="width: 100%; height: 100%;"/>
                                    <h3><?php echo $sepatu[$i]["nama"]?></h3>
                                </div>
                            <?php };?>
                        <?php };?>  
                    <?php };?>
                </div>
                <div class="row">
                    <?php if (count($sepatu) >= 6) {?>
                        <?php if (count($sepatu) == 6) {?>
                            <?php for ($i = 3; $i < count($sepatu); $i++) {?>
                                <div class="col-3" style="text-align: center; margin-right: 30px;">
                                    <img src="<?php echo "../".$sepatu[$i]["path"]?>" style="width: 100%; height: 100%;"/>
                                    <h3><?php echo $sepatu[$i]["nama"]?></h3>
                                </div>
                            <?php };?>
                        <?php } else if (count($sepatu) > 6) {?>
                            <?php for ($i = 3; $i < 6; $i++) {?>
                                <div class="col-3" style="text-align: center; margin-right: 30px;">
                                    <img src="<?php echo "../".$sepatu[$i]["path"]?>" style="width: 100%; height: 100%;"/>
                                    <h3><?php echo $sepatu[$i]["nama"]?></h3>
                                </div>
                            <?php };?>
                        <?php };?>
                    <?php };?>
                    <?php if (count($sepatu) == 0) {?>
                        <?php echo "<h3>Tidak ada produk</h3>"?>
                    <?php };?>
                </div>
            </div>
            <?php if ($this->session->userdata("email") == "admin@admin.com") {?>
                <button class="button-add-item btn-outline-secondary btn-lg" onclick="window.location.href = '<?php echo base_url()?>loggedHome/addSepatu';">Add Product</button>
            <?php };?>
        </div>     
    </div>
    </section>

    <!-- HEADER -->
    <div id="navbar" class="container-fluid">
        <div class="row">
            <div class="col-4">
                <a href="#home">
                    <div id="mySidenav" class="sidenav">
                        <a href="javascript:void(0)" class="closebtn" id="closebtn" onclick="closeNav()">&times;</a>
                        <a href="<?php echo base_url()?>home/payment">PAYMENT CONFIRMATION</a>
  
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
     
                        <a href="#">CONTACT NAH PROJECT</a>
                        <a href="<?php echo base_url()?>home/about">ABOUT NAH PROJECT</a>
                        <a href="#">UPCOMING NAH PROJECT</a>
                        <br><br><br>
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
            <div class="col-4" style="padding: 15px;"><a class="foto1" href="<?php echo base_url()?>home"><img src="http://localhost/TUBES/assets/img/nah_hitam.png"></a></div>
            <div class="col-4" style="padding: 15px;"><a class="foto2" href="#"><img class="bag" src="http://localhost/TUBES/assets/img/bag.png"></a></div>
        </div>
    </div>
    <!-- FOOTER -->
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