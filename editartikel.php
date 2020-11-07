<?php 
    session_start();
    if($_SESSION['login'] == false){
    header('Location: ../login.php');
 }
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Animal</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/themify-icons.css">
    <link rel="stylesheet" href="../css/nice-select.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/gijgo.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/slicknav.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header_start  -->
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-8">
                            <div class="short_contact_list">
                                <ul>
                                    <li><a href="#">+880 4664 216</a></li>
                                    <li><a href="#">Mon - Sat 10:00 - 7:00</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 ">
                            <div class="social_media_links">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-pinterest-p"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a  href="index.php">home</a></li>
                                        
                                        <li><a href="../logout.php">Logout</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
	<?php
	include '../conn.php';
	$id_artikel = $_GET['id_artikel'];
	$data = mysqli_query($conn,"select * from t_artikel where id_artikel='$id_artikel'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update1.php">
		<div class="form-group">
                    <label for="Foto">Foto</label>
                    <input type="hidden" name="id_artikel" value="<?php echo $d['id_artikel']; ?>">
					<input type="file" name="id_image" class="form-control" id="id_image" value="<?php echo $d['id_image']; ?>"  required>
                  </div>
                <!-- <form method="post" enctype="multipart/form-data"> -->
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" name="judul" class="form-control" id="judul" value="<?php echo $d['judul']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="isi">Artikel</label>
					<input type ="text" class="form-control"  name="isi" id="isi" value="<?php echo $d['isi']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="preview">Preview</label>
                    <input type="text" class="form-control" name="preview" id="preview" value="<?php echo $d['preview']; ?>">
			      </div>

                   
                  <input type="submit" name="submit" class="btn btn-primary" value="Simpan"/>
                </form>
                <p></p>
		
			<?php 
	}
	?>
</body>
</html>
