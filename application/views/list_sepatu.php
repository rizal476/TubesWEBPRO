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
    <link rel="stylesheet" type="text/css" href="../assets/css/ListCustomer_style.css"/>
</head>
<body>  
    <section class="listcustomerBody" style="width: 100%; height: 1000px; background-color: #fafafa;">
        <div class="container">
            <div class="row mt-5">
                <div class="col">
                    <h3 class="text-center">List Sepatu</h3>
                    <?php if (empty($sepatu)) : ?>
                    <div class="alert alert-danger" role="alert">
                        Data tidak ditemukan
                    </div>
                    <?php endif; ?>

                    <table class="table mt-5">
                        <thead>
                            <tr>
                                <th class="text-center" scope="col">Nama Sepatu</th>
                                <th class="text-center" scope="col">Harga</th>
                                <th class="text-center" scope="col">Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><?php foreach ($sepatu as $item) :  ?>
                                <td class="text-center"><?= $item["nama"]; ?></td>
                                <td class="text-center"><?= $item["harga"]; ?></td>
                                <td class="text-center"><img src="<?php echo "../".$item["path"]?>" style="width: 50px; height: 50px;"/></td>
                                <td class="text-center">
                                    <a href="<?= base_url(); ?>loggedHome/hapusSepatu/<?= $item["id"] ?>" class="badge badge-danger float-center" onclick="return confirm('Apakah anda yakin menghapus data ini?');" ?>hapus</a>
                                    <a href="<?= base_url(); ?>loggedHome/ubahSepatu/<?= $item["id"] ?>" class="badge badge-success float-center" ?>ubah</a>
                                </td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
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
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                    </div>
                <!-- </a> -->
                <a href="#">CONTACT NAH PROJECT</a>
                <a href="<?php echo base_url()?>home/about">ABOUT NAH PROJECT</a>
                <a href="#">UPCOMING NAH PROJECT</a>
                <br>
                <br>
                <br>
                <a href="<?php echo base_url()?>loggedHome/profile">Logged in as <?php echo $this->session->userdata("nama");?></a>
                <a href="<?php echo base_url()?>loggedHome/listCustomer">List Customer</a>
                <a href="<?php echo base_url()?>loggedHome/lihatSepatu">List Sepatu</a>
                <a href="<?php echo base_url()?>home/search">Search</a>
                <a href="<?php echo base_url()?>home/logout">Log Out</a>
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