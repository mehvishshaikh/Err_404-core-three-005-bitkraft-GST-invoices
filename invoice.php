<?php
session_start();
if(isset($_SESSION['User'])){

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Invoice</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Bitkraft</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="assets/css/Bootstrap-4---Photo-Gallery.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar-1.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar-2.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar.css">
    <link rel="stylesheet" href="assets/css/Pretty-Search-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
     <style type="text/css">
        body
        {
            font-size: 12pt;
        }
        table
        {
            border: 1px solid #ccc;
            border-collapse: collapse;
        }
        table th
        {
            background-color: #F7F7F7;
            color: #333;
            font-weight: bold;
        }
        table th, table td
        {
            padding: 5px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
<div>
        <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean-button" style="background-color: #37434d;color: #ffffff;">
        <center><div class="container-fluid" style="text-align:center; font-size:20px;">INVOICE</div></center>
    </nav>
    </div>
     <div id="tblCustomers" cellspacing="0" cellpadding="0">
     <?php
include 'dbconnection.php';
if (isset($_POST['search'])){
    $searchq=$_POST['search'];
    $searchq=preg_replace("#[^0-9a-z]#i","",$searchq);
    $query="select * from gst_info where invoice_no like '%$searchq%' ";

    $result= mysqli_query($con,$query);
    echo"<center><h1>Invoice Details</h1></center>";

    while($row = mysqli_fetch_array($result)){
      echo"<div class='row'>";
        echo"<div class='col-md-12'>";
            echo "<p style='margin-left:80%;'>Invoice No.: ".$row['invoice_no']."</p>";
        echo"</div>";
        echo"<div class='col-md-12'>";
          echo "<p style='margin-left:80%;'>Invoice Date.: ".$row['invoice_date']."</p>";
        echo"</div>";
        echo"<div class='col-md-6'>";
          echo "<p style='margin-left:10%;'>PNR no: ".$row['pnr_no']."</p>";
          echo "<p style='margin-left:10%;'>Passenger Name: ".$row['passenger_name']."</p>";
          echo "<p style='margin-left:10%;'>Passenger Address: ".$row['passenger_add']."</p>";
        echo"</div>";
        echo"<div class='col-md-3'>";
          echo "Flight number: ".$row['flight_no']."</p>";
        echo"</div>";
        echo"<div class='col-md-3'>";
          echo "Flight Date: ".$row['flight_date']."</p>";
        echo"</div>";
        echo"<div class='col-md-6'>";
          echo "<p style='margin-left:10%;'>GSTIN of Customer: ".$row['gst_no']."</p>";
          echo "<p style='margin-left:10%;'>GSTIN Customer name: ".$row['gst_name']."</p>";
        echo"</div>";
        echo"<div class='col-md-3'>";
          echo "Flight from: ".$row['flight_from']."</p>";
        echo"</div>";
        echo"<div class='col-md-3'>";
          echo "Flight to: ".$row['flight_to']."</p>";
        echo"</div>";
      echo"</div>";
    }
}
    ?>
    <center><input type="button" id="btnExport" value="Print Invoice" /></center>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
            html2canvas($('#tblCustomers')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("invoice-details.pdf");
                }
            });
        });
    </script>
    <?php
    }else{
        header("location:index.html");
    }
    ?>
</body>
</html>