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
            Order's Confirmation
        </div>
        
        <div class="container">
            <hr class="solid">
            <div class="row" style="height:35%; overflow:scroll;">
                <table class="table table-borderless">
                    
                    <tbody id="TabelDetailOrder">
                        <tr>
                            <td class="cnama-item" align="left">Nama Item</td><td class="cqty-item" align="center"><i class="fa fa-pencil">&nbsp;</i><i class="fa fa-minus"></i>&nbsp;10&nbsp;<i class="fa fa-plus"></i></td><td class="ctotal-item" align="right">Rp. 0.00</td>
                        </tr>
                        <tr>
                            <td colspan="3" align="left" class="remarks">Keterangan/Remarks</td>
                        </tr>
                        <tr>
                            <td class="cnama-item" align="left">Nama Item</td><td class="cqty-item" align="center"><i class="fa fa-pencil">&nbsp;</i><i class="fa fa-minus"></i>&nbsp;10&nbsp;<i class="fa fa-plus"></i></td><td class="ctotal-item" align="right">Rp. 0.00</td>
                        </tr>
                        <tr>
                            <td colspan="3" align="left" class="remarks">Keterangan/Remarks</td>
                        </tr>
                        <tr>
                            <td class="cnama-item" align="left">Nama Item</td><td class="cqty-item" align="center"><i class="fa fa-pencil">&nbsp;</i><i class="fa fa-minus"></i>&nbsp;10&nbsp;<i class="fa fa-plus"></i></td><td class="ctotal-item" align="right">Rp. 0.00</td>
                        </tr>
                        <tr>
                            <td colspan="3" align="left" class="remarks">Keterangan/Remarks</td>
                        </tr>
                        <tr>
                            <td class="cnama-item" align="left">Nama Item</td><td class="cqty-item" align="center"><i class="fa fa-pencil">&nbsp;</i><i class="fa fa-minus"></i>&nbsp;10&nbsp;<i class="fa fa-plus"></i></td><td class="ctotal-item" align="right">Rp. 0.00</td>
                        </tr>
                        <tr>
                            <td colspan="3" align="left" class="remarks">Keterangan/Remarks</td>
                        </tr>
                    </tbody>
                </table>        
            </div>    
            <div class="row" style="height:30%; overflow:scroll;" id="RowTotalOrder">
                <table class="table table-borderless">
                    
                    <tbody id="TotalOrder">
                        <tr>
                            <td class="subtotal" align="left">Subtotal</td><td class="subtotal" align="right">Rp. 0.00</td>
                        </tr>
                        <tr>
                            <td class="tax" align="left">Tax & Service</td><td class="tax" align="right">Rp. 0.00</td>
                        </tr>
                        <tr>
                            <td class="grandtotal" align="left">Subtotal</td><td class="grandtotal" align="right">Rp. 0.00</td>
                        </tr>
                    </tbody>
                </table>        
                <div class="col-12 col-xs-12">
                    <button class="btn btn-confirm btn-block">CONFIRM ORDER</button>
                </div>
            </div>   
                
        </div>
        <div class="footer-default">
            Powered By Simple IT Solutions
        </div>
    </body>
</html>