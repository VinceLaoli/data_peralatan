<?php
$koneksi = new mysqli("localhost","root","","dbvince");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Peralatan</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">PERALATAN</a> 
            </div>
        </nav>   
           <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>		
                    <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
                    <li><a href="index.php?halaman=jenis"><i class="fa fa-tag"></i> Jenis Peralatan</a></li>
                    <li><a href="index.php?halaman=nama"><i class="fa fa-user"></i> Nama Peralatan</a></li>
                    <li><a href="index.php?halaman=gangguan"><i class="fa fa-book"></i> Gangguan Peralatan</a></li>
                    <li><a href="index.php?halaman=penanganan"><i class="fa fa-gear"></i> Penanganan Gangguan</a></li>
                    
                </ul>
            </div>
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php
                if (isset($_GET['halaman']))
                {
                    if ($_GET['halaman']=="jenis")
                    {
                        include 'jenis/data.php';
                    }
                    elseif ($_GET['halaman']=="tambahjenis") 
                    {
                        include 'jenis/tambah.php';
                    }
                    elseif ($_GET['halaman']=="hapusjenis") 
                    {
                        include 'jenis/hapus.php';
                    }
                    elseif ($_GET['halaman']=="editjenis") 
                    {
                        include 'jenis/edit.php';
                    }
                    elseif ($_GET['halaman']=="nama")
                    {
                        include 'nama/data.php';
                    }
                    elseif ($_GET['halaman']=="tambahnama")
                    {
                        include 'nama/tambah.php';
                    }
                    elseif ($_GET['halaman']=="hapusnama") 
                    {
                        include 'nama/hapus.php';
                    }
                    elseif ($_GET['halaman']=="editnama") 
                    {
                        include 'nama/edit.php';
                    }
                    elseif ($_GET['halaman']=="gangguan") 
                    {
                        include 'gangguan/data.php';
                    }
                    elseif ($_GET['halaman']=="hapusgangguan") 
                    {
                        include 'gangguan/hapus.php';
                    }
                    elseif ($_GET['halaman']=="editgangguan") 
                    {
                        include 'gangguan/edit.php';
                    }
                    elseif ($_GET['halaman']=="tambahgangguan") 
                    {
                        include 'gangguan/tambah.php';
                    }
                    elseif ($_GET['halaman']=="penanganan") 
                    {
                        include 'penanganan/data.php';
                    }
                    elseif ($_GET['halaman']=="tambahpen") 
                    {
                        include 'penanganan/tambah.php';
                    }
                    elseif ($_GET['halaman']=="editpen") 
                    {
                        include 'penanganan/edit.php';
                    }
                    elseif ($_GET['halaman']=="hapuspen") 
                    {
                        include 'penanganan/hapus.php';
                    }
                }
                else
                {
                    include 'home.php';
                }
                ?>
            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
<footer>
    <div class="container">
        <div class="row">
            <center>
            <p class="copyright text-muted">&copy; Create By. Vince Kris Hiburan</p>
            </center>
        </div>
    </div>
</footer>
   
</body>
</html>
