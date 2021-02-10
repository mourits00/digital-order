<?php
    header("Content-type: text/css; charset: UTF-8");
    include "../config.php";
?>
    body {
        background-color: white;
        font-family: 'Times New Roman', Times, serif;
      }
      
      .header-default {
        background-color: <?php echo $defaultcolor;?>;
        width : 100%;
        height : 55px;
        
        
      }
      
      .logo-default {
        font-size : 30px;
        color : white;
        margin-left : 15px;
        font-style : normal;
      }
      
      .harga-default {
        font-size : 18px;
        color : white;
        margin-left : 22%;
        
      }
      
      .shopping-default {
        color : white;
        border : 0;
        font-size : 30px;
        margin-right : -5%;
        margin-left : 1%;
        background-color : transparent;
      }
      
      
      .menu-default {
        background-color : <?php echo $defaultcolor;?>;
        width : 100%;
        height : 43px;
        color : white;
        margin-right : 50px;
      }
      a {
        color : white !important;
      }
      .content-default {
        width : 80%;
        align-items : center;
        max-height :80%;
        overflow-y: auto;
      }
      
      .footer-default {
        background-color: white;
        color : gray;
        width : 100%;
        text-align: center;
        vertical-align: middle;
      }

      .btn-category {
          background-color : <?php echo $defaultcolor;?>;
          color : white;
          font-size : 18px;
          font-weight : bold;
          width : 100%;
          height : 47px;
          margin-bottom : 20px;
      }
      
      .header-content {
        color : <?php echo $defaultcolor;?>;
        font-size: 18px;
        font-weight: bold;
        
        padding-top : 10px;
        padding-left : 15px;
        padding-bottom : 10px;
        
      }
      
      .pilihan-menu {
        color : white;
        font-size : 18px !important;
        width : 100%;
        background-color: transparent;
        padding-left : -5px;
        padding-right : -10px;
      }
      
      #RowMenu {
          margin-bottom : 15px;
      }
      
      
      
      .btn-menu {
        margin-top: 5px;
        margin-bottom : 30px;
        height : 230px;
        background-color: white;
        border : 0;
        box-shadow: 5px 10px 8px #888888;
        width : 100%;
        
      }
      
      .gambar-menu {
        width : 100%;
        margin-left: auto;
        margin-right: auto;
        align : center;
        height : 40%;
        border:solid 2px;
        border-bottom-color:#ffe;
        border-left-color:#eed;
        border-right-color:#eed;
        border-top-color:#ccb;
        
      }
      
      .nama-menu, .harga-menu {
        font-size : 13px;
        color : <?php echo $defaultcolor;?>;
        font-weight: bold;
        margin-top: -50px;
      }
      
      .deskripsi-menu {
        font-size : 9px;
        font-style: normal;
        color : gray;
        margin-top: -50px;
      }
      
      .order-menu {
        border : 1px;
        width : 100%;
        font-size : 18px;
        color : white;
        background-color: <?php echo $defaultcolor;?>;
        border-radius: 5px;
        vertical-align: middle;
        height: 25px;
        margin-top : -10px;
      }
      
      .col-xs-3 {
        padding : 0px;
      
      }
      
      .text-menu-left {
        margin-left : 15px;
      }
      
      .text-menu-right {
        margin-right : 15px;
      }

     .btn-itemconfirm {
        margin-top: 5px;
        margin-bottom : 30px;
        height : 90px;
        background-color: white;
        border : 0;
        box-shadow: 5px 10px 8px #888888;
        width : 100%;
     }

     .confirm-orderan {
        
        margin-bottom : 30px;
        height : 60px;
        background-color: white;
        border : 0;
        box-shadow: 5px 10px 8px #888888;
        width : 100%;
     }

     .nama-itemconfirm {
         color : <?php echo $defaultcolor;?>;
         font-weight : bold;
         font-size : 18px;
         padding-top : 100px;

     }

        .table-borderless > tbody > tr > td,
        .table-borderless > tbody > tr > th,
        .table-borderless > tfoot > tr > td,
        .table-borderless > tfoot > tr > th,
        .table-borderless > thead > tr > td,
        .table-borderless > thead > tr > th {
        border: none;
    }

    .cnama-item, .cqty-item, .ctotal-item {
        color : <?php echo $defaultcolor;?>;
        font-size : 18px;
        font-weight : bold;
    }

    .remarks {
        color : <?php echo $defaultcolor;?>;
        font-size : 10px;
        font-style : none;
    }

    .subtotal, .tax {
        font-size : 15px;
        color : <?php echo $defaultcolor;?>;
        font-style : none;
    }

    .grandtotal {
        font-size : 18px;
        color : <?php echo $defaultcolor;?>;
        font-weight : bold;
    }

    .btn-confirm {
        background-color : <?php echo $defaultcolor;?>;
        color : white;
    }

    
      
    
