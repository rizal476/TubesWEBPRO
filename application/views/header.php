<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    </style>
</head>
<body>
<section class="header">
        <div class="shopbtn">
            <a style="text-decoration:none" href=""><div class="shop">SHOP NOW</div></a>
        </div>
        <div id="navbar" class="container-fluid">
            <div class="row">
            <div class="col-4">
                <a href="#home">
                <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" id="closebtn" onclick="closeNav()">&times;</a>
                <a href="">PAYMENT CONFIRMATION</a>
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
                <a href="">ABOUT NAH PROJECT</a>
                <a href="#">UPCOMING NAH PROJECT</a>
                <br>
                <br>
                <br>
                <a href="">Login</a>
                <a href="">Create Account</a>
                <a href="">Search</a>
                </div>
                <div class="menu" onclick="openNav()">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                </a>
            </div>
            <div class="col-4" style="padding: 15px;"><a class="foto1" href=""><img src="assets/img/nah_hitam.png"></a></div>
            <div class="col-4" style="padding: 15px;"><a class="foto2" href="#"><img class="bag" src="assets/img/bag.png"></a></div>
            </div>
        </div>
    </section>
</body>
</html>