<?php
    include "koneksi.php";
    include "config.php";
?>
<html>
    <head>
        <title>Simple Digital Order</title>
        <!-- Bootstrap 3.3.7 -->
        <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <!-- Default Style -->
        <link rel="stylesheet" href="css/style.php">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/js/accounting.min.js"></script>
        <script src="js/bootstrap-editable.min.js"></script>
        <script src="js/notify.min.js"></script>
        <script src="js/bootbox.min.js"></script> <script src="assets/js/datatables/dataTables.bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
    </head>
    <body>
        <div class="header-default">
            <?php include "header.php";?>
        </div>
        <div class="menu-default">
           <?php include "menu.php";?>
        </div>
        <div class="header-content">
            Home
        </div>
        <div class="container">
            <div class="row" style="height:74%; overflow:scroll;">
                <div class="col-12 col-xs-6">
                    <button class="btn-menu" style="background-image: url('image/menu.jpg'); width:100%;">
                        <img src="images/menu.jpg" class="gambar-menu"><p></p>
                        <span class="nama-menu">Nama Menu</span><p></p>
                        <span class="deskripsi-menu">Ini adalaha keterangan atau deskripsi tentang menu yang ditampilkan sebagai bahan pertimbangan customer</span>
                        <p></p>
                        <span class="harga-menu">Rp. 0.00</span><p></p>
                        <div class="order-menu">
                            ORDER
                        </div>
                    </button>
                </div>
                <div class="col-12 col-xs-6">
                    <button class="btn-menu">
                        <img src="images/menu.jpg" class="gambar-menu"><p></p>
                        <span class="nama-menu">Nama Menu</span><p></p>
                        <span class="deskripsi-menu">Ini adalaha keterangan atau deskripsi tentang menu yang ditampilkan sebagai bahan pertimbangan customer</span>
                        <p></p>
                        <span class="harga-menu">Rp. 0.00</span><p></p>
                        <div class="order-menu">
                            ORDER
                        </div>
                    </button>
                </div>
                <div class="col-12 col-xs-6">
                    <button class="btn-menu">
                        <img src="images/menu.jpg" class="gambar-menu"><p></p>
                        <span class="nama-menu">Nama Menu</span><p></p>
                        <span class="deskripsi-menu">Ini adalaha keterangan atau deskripsi tentang menu yang ditampilkan sebagai bahan pertimbangan customer</span>
                        <p></p>
                        <span class="harga-menu">Rp. 0.00</span><p></p>
                        <div class="order-menu">
                            ORDER
                        </div>
                    </button>
                </div>
                <div class="col-12 col-xs-6">
                    <button class="btn-menu">
                        <img src="images/menu.jpg" class="gambar-menu"><p></p>
                        <span class="nama-menu">Nama Menu</span><p></p>
                        <span class="deskripsi-menu">Ini adalaha keterangan atau deskripsi tentang menu yang ditampilkan sebagai bahan pertimbangan customer</span>
                        <p></p>
                        <span class="harga-menu">Rp. 0.00</span><p></p>
                        <div class="order-menu">
                            ORDER
                        </div>
                    </button>
                </div>
            </div>
            
        </div>
        <div class="footer-default">
            <?php echo $powered;?>
        </div>
    </body>
</html>