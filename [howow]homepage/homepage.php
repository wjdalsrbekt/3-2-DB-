<?php
 include_once 'dbconfig.php';
   $dbname="project";
   mysqli_select_db($conn, $dbname) or die('DB selection failed');
   $query ="select * from logindata order by ID desc";
    $result = $conn->query($query);
    $total = mysqli_num_rows($result);
	
   session_start();?>
<!--$team_db=<<<'EOT'-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ninodezign.com, ninodezign@gmail.com">
    <meta name="copyright" content="ninodezign.com">
    <title>Mogo | OnePage Responsive Theme</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="images/ico/favicon.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">

    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />
    <link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" />
    <link rel="stylesheet" type="text/css" href="css/unslider.css" />
    <link rel="stylesheet" type="text/css" href="css/template.css" />
	<style>
    table, th, td {
		border: 1px solid #bcbcbc;
	}
	th {
		width:200px;
		height:60px;
		text-align:Center;
	}

	#nino-serviceForm2 {
		position: fixed;
		left: 0;
		top: -100%;
		width: 100%;
		height: 100%;
		background: rgba(0,0,0,.9);
		padding: 20px;
		z-index: 10;
		opacity: 1;
		-webkit-transition: all .3s ease-in-out;
		-moz-transition: all .3s ease-in-out;
			-o-transition: all .3s ease-in-out;
			-ms-transition: all .3s ease-in-out;
				transition: all .3s ease-in-out;
	}
	#nino-serviceForm2.open {
		top: 0;
		opacity: 1;
	}
	#nino-serviceForm2 .nino-service2Input {
		position: relative;
		top: 50%;
		height: 100px;
		box-shadow: none;
		font-size: 70px;
		background: none;
		border: none;
		border-bottom: 1px solid #333;
		font-weight: 700;
		padding: 20px 0;
		color: #fff;
		-webkit-transform: translateY(-50%);
		-moz-transform: translateY(-50%);
			-o-transform: translateY(-50%);
			-ms-transform: translateY(-50%);
				transform: translateY(-50%);
	}
	#nino-serviceForm2 .nino-close {
		position: absolute;
		top: 20px;
		right: 20px;
		font-size: 60px;
		cursor: pointer;
	}
	#nino-serviceForm2 .nino-close:hover {
		color: #fff;
	}
	/* =============== SERVICE3 FORM =============== */
	#nino-service3Form {
		position: fixed;
		left: 0;
		top: -100%;
		width: 100%;
		height: 100%;
		background: rgba(0,0,0,.9);
		padding: 20px;
		z-index: 10;
		opacity: 1;
		-webkit-transition: all .3s ease-in-out;
		   -moz-transition: all .3s ease-in-out;
			 -o-transition: all .3s ease-in-out;
			-ms-transition: all .3s ease-in-out;
				transition: all .3s ease-in-out;
	}
	#nino-service3Form.open {
		top: 0;
		opacity: 1;
	}
	#nino-service3Form .nino-service3Input {
		position: relative;
		top: 50%;
		height: 100px;
		box-shadow: none;
		font-size: 70px;
		background: none;
		border: none;
		border-bottom: 1px solid #333;
		font-weight: 700;
		padding: 20px 0;
		color: #fff;
		-webkit-transform: translateY(-50%);
		   -moz-transform: translateY(-50%);
			 -o-transform: translateY(-50%);
			-ms-transform: translateY(-50%);
				transform: translateY(-50%);
	}
	#nino-service3Form .nino-close {
		position: absolute;
		top: 20px;
		right: 20px;
		font-size: 60px;
		cursor: pointer;
	}
	#nino-service3Form .nino-close:hover {
		color: #fff;
	}
    </style>
</head>

<body data-target="#nino-navbar" data-spy="scroll">

    <!-- Header
    ================================================== -->
    <header id="nino-header">
        <div id="nino-headerInner">
            <nav id="nino-navbar" class="navbar navbar-default" role="navigation">
                <div class="container">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nino-navbar-collapse">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                  </button>
                        <a class="navbar-brand" href="homepage.html">Create</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="nino-menuItem pull-right">
                        <div class="collapse navbar-collapse pull-left" id="nino-navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#nino-header">Home <span class="sr-only">(current)</span></a></li>
                                <li><a href="#nino-story">공지사항</a></li>
                                <li><a href="#nino-services">서비스</a></li>
                                <li><a href="#nino-ourTeam">시간예약</a></li>
                                <li><a href="#nino-portfolio">상품판매</a></li>
                                <li><a href="#nino-latestBlog">SNS</a></li>
                                <li><a style="cursor:pointer" >
                                    <?php
                                        if(isset($_SESSION['userid'])) {
                                            echo $_SESSION['userid'];
                                    ?>님 안녕하세요</a></li>
                                    <li><a onclick="location.href='./logout.php'" style="cursor:pointer">Logout</a></li>
                                    <?php
                                }
                                    else{
                                     ?>
                                        <li><a href="#" class="nino-search">Login</a></li>
                                     <?php 
                                        }
                                     ?>
                            </ul>
                     </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </nav>

            <section id="nino-slider" class="carousel slide container" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <h2 class="nino-sectionHeading">
                            <span class="nino-subHeading">Beauty Salon</span> Welcome <br>to Create
                        </h2>
                    </div>
                    <div class="item">
                        <h2 class="nino-sectionHeading">
                            <span class="nino-subHeading">
                     <img src="salon_image1.jpg">
                     </span>
                        </h2>
                    </div>
                    <div class="item">
                        <h2 class="nino-sectionHeading">
                            <span class="nino-subHeading">
                     <img src="salon_image2.jpg">
                     </span>
                        </h2>
                    </div>
                    <div class="item">
                        <h2 class="nino-sectionHeading">
                            <span class="nino-subHeading">
                     <img src="salon_image3.jpg">
                     </span>
                        </h2>
                    </div>
                </div>

                <!-- Indicators -->
                <ol class="carousel-indicators clearfix">
                    <li data-target="#nino-slider" data-slide-to="0" class="active">
                        <div class="inner">
                            <span class="number">01</span> main
                        </div>
                    </li>
                    <li data-target="#nino-slider" data-slide-to="1">
                        <div class="inner">
                            <span class="number">02</span> interior1
                        </div>
                    </li>
                    <li data-target="#nino-slider" data-slide-to="2">
                        <div class="inner">
                            <span class="number">03</span> interior2
                        </div>
                    </li>
                    <li data-target="#nino-slider" data-slide-to="3">
                        <div class="inner">
                            <span class="number">04</span> interior3
                        </div>
                    </li>
                </ol>
            </section>
        </div>
    </header>
    <!--/#header-->

    <!-- Story About Us
    ================================================== -->
    <section id="nino-story">
        <div class="container">
            <h2 class="nino-sectionHeading">
                <span class="nino-subHeading">Today's</span> 공지사항
            </h2>
            <p class="nino-sectionDesc"><?php $query3 = "select content from notice order by ID desc;";
                $result2 = $conn->query($query3);
                $rows = mysqli_fetch_assoc($result2);?>
				<?php echo $rows['content'] ?></p>
            <div class="sectionContent">
                <div class="row nino-hoverEffect";>
					<!-- 추가 -->
					<!-- 추가 -->
					<?php
					if(isset($_SESSION['userid'])){
							if($_SESSION['userid']=='정민규'||$_SESSION['userid']=='김일환'||$_SESSION['userid']=='이강령') {
							?><a onclick="location.href='./write.php'" style="border:1px solid; padding: 20px;">글쓰기</a>
						<?php	} 
					}
						else
							echo "공지사항 입니다 ";
						?>
                </div>
            </div>
        </div>
    </section>
    <!--/#nino-story-->

    <!-- Services
    ================================================== -->
    <section id="nino-services">
        <div class="container">
            <h2 class="nino-sectionHeading">
                <span class="nino-subHeading">We povide</span> Amazing Services
            </h2>
            <div class="sectionContent">
                <div class="fw" layout="row">
                    <div class="col-md-4 col-sm-6 item ">
                        <div layout="row">
                            <i class="mdi mdi-buffer nino-icon fsr"></i>
                            <div>
                                <?php
                                    $hairquery = "select * from service where ID = 1";
                                    $result = $conn->query($hairquery);
                                    $row=mysqli_fetch_array($result);
                                    printf("<h4 class='nino-serviceTitle'>%s</h4>",$row['KIND']);
                                    printf("<p> 가격 : %d </br> 남성 손님분들의 머리를 단정하게 잘라드립니다.</p>",$row['PRICE']);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 item ">
                        <div layout="row">
                            <i class="mdi mdi-buffer nino-icon fsr"></i>
                            <div>
                                 <?php
                                    $hairquery = "select * from service where ID = 2";
                                    $result = $conn->query($hairquery);
                                    $row=mysqli_fetch_array($result);
                                    printf("<h4 class='nino-serviceTitle'>%s</h4>",$row['KIND']);
                                    printf("<p> 가격 : %d </br> 여성 손님분들의 머리를 단정하게 잘라드립니다.</p>",$row['PRICE']);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 item ">
                        <div layout="row">
                            <i class="mdi mdi-buffer nino-icon fsr"></i>
                            <div>
                                 <?php
                                    $hairquery = "select * from service where ID = 3";
                                    $result = $conn->query($hairquery);
                                    $row=mysqli_fetch_array($result);
                                    printf("<h4 class='nino-serviceTitle'>%s</h4>",$row['KIND']);
                                    printf("<p> 가격 : %d </br> 머리길이가 짧은 손님분들이 원하는 정도의 굵기로 펌을 해드립니다.</p>",$row['PRICE']);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 item ">
                        <div layout="row">
                            <i class="mdi mdi-buffer nino-icon fsr"></i>
                            <div>
                                <?php
                                    $hairquery = "select * from service where ID = 4";
                                    $result = $conn->query($hairquery);
                                    $row=mysqli_fetch_array($result);
                                    printf("<h4 class='nino-serviceTitle'>%s</h4>",$row['KIND']);
                                    printf("<p> 가격 : %d </br> 머리길이가 긴 손님분들이 원하는 정도의 굵기로 펌을 해드립니다.</p>",$row['PRICE']);
                                ?>
                            </div>
                        </div>
                    </div>
               <div class="col-md-4 col-sm-6 item ">
                        <div layout="row">
                            <i class="mdi mdi-buffer nino-icon fsr"></i>
                            <div>
                            <?php
                                    $hairquery = "select * from service where ID = 5";
                                    $result = $conn->query($hairquery);
                                    $row=mysqli_fetch_array($result);
                                    printf("<h4 class='nino-serviceTitle'>%s</h4>",$row['KIND']);
                                    printf("<p> 가격 : %d </br> 뿌리 염색을 해드립니다.</p>",$row['PRICE']);
                                ?>
                            </div>
                        </div>
                    </div>
               <div class="col-md-4 col-sm-6 item ">
                        <div layout="row">
                            <i class="mdi mdi-buffer nino-icon fsr"></i>
                            <div>
                            <?php
                                    $hairquery = "select * from service where ID = 6";
                                    $result = $conn->query($hairquery);
                                    $row=mysqli_fetch_array($result);
                                    printf("<h4 class='nino-serviceTitle'>%s</h4>",$row['KIND']);
                                    printf("<p> 가격 : %d </br> 손님분들이 원하는 색상으로 염색을 해드립니다.</p>",$row['PRICE']);
                                ?>
                            </div>
                        </div>
                    </div>
               <div class="col-md-4 col-sm-6 item ">
                        <div layout="row">
                            <i class="mdi mdi-buffer nino-icon fsr"></i>
                            <div>
                            <?php
                                    $hairquery = "select * from service where ID = 7";
                                    $result = $conn->query($hairquery);
                                    $row=mysqli_fetch_array($result);
                                    printf("<h4 class='nino-serviceTitle'>%s</h4>",$row['KIND']);
                                    printf("<p> 가격 : %d </br> 머리길이가 짧은 손님분들의 머리를 펴드립니다.</p>",$row['PRICE']);
                                ?>
                            </div>
                        </div>
                    </div>
               <div class="col-md-4 col-sm-6 item ">
                        <div layout="row">
                            <i class="mdi mdi-buffer nino-icon fsr"></i>
                            <div>
                            <?php
                                    $hairquery = "select * from service where ID = 8";
                                    $result = $conn->query($hairquery);
                                    $row=mysqli_fetch_array($result);
                                    printf("<h4 class='nino-serviceTitle'>%s</h4>",$row['KIND']);
                                    printf("<p> 가격 : %d </br> 머리길이가 긴 손님분들이 머리를 펴드립니다.</p>",$row['PRICE']);
                                ?>
                            </div>
                        </div>
                    </div>
               <div class="col-md-4 col-sm-6 item ">
                        <div layout="row">
                            <i class="mdi mdi-buffer nino-icon fsr"></i>
                            <div>
                            <?php
                                    $hairquery = "select * from service where ID = 9";
                                    $result = $conn->query($hairquery);
                                    $row=mysqli_fetch_array($result);
                                    printf("<h4 class='nino-serviceTitle'>%s</h4>",$row['KIND']);
                                    printf("<p> 가격 : %d </br> 머리길이가 짧은 손님분들에게 아이롱 펌을 해드립니다.</p>",$row['PRICE']);
                                ?>
                            </div>
                        </div>
                    </div>
               <div class="col-md-4 col-sm-6 item ">
                        <div layout="row">
                            <i class="mdi mdi-buffer nino-icon fsr"></i>
                            <div>
                            <?php
                                    $hairquery = "select * from service where ID = 10";
                                    $result = $conn->query($hairquery);
                                    $row=mysqli_fetch_array($result);
                                    printf("<h4 class='nino-serviceTitle'>%s</h4>",$row['KIND']);
                                    printf("<p> 가격 : %d </br> 머리길이가 긴 손님분들에게 아이롱 펌을 해드립니다.</p>",$row['PRICE']);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 item ">
                        <div layout="row">
                            <i class="mdi mdi-buffer nino-icon fsr"></i>
                            <div>
                            <?php
                                    $hairquery = "select * from service where ID = 11";
                                    $result = $conn->query($hairquery);
                                    $row=mysqli_fetch_array($result);
                                    printf("<h4 class='nino-serviceTitle'>%s</h4>",$row['KIND']);
                                    printf("<p> 가격 : %d </br> 머리길이가 짧은 손님분들에게 핫핀펌을 해드립니다.</p>",$row['PRICE']);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 item ">
                        <div layout="row">
                            <i class="mdi mdi-buffer nino-icon fsr"></i>
                            <div>
                            <?php
                                    $hairquery = "select * from service where ID = 12";
                                    $result = $conn->query($hairquery);
                                    $row=mysqli_fetch_array($result);
                                    printf("<h4 class='nino-serviceTitle'>%s</h4>",$row['KIND']);
                                    printf("<p> 가격 : %d </br> 머리길이가 긴 손님분들에게 핫핀펌을 해드립니다.</p>",$row['PRICE']);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#nino-services-->

    <!-- What We Do
    ================================================== -->
    <section id="nino-whatWeDo">
        <div class="container">
            <h2 class="nino-sectionHeading">
                <span class="nino-subHeading">Service</span> what we do
            </h2>
            <p class="nino-sectionDesc">

             임직원의 간단한 인사말 및 다짐사항
         </p>
            <div class="sectionContent">
                <div class="row">
                    <div class="col-md-6">
                        <div class="text-center">
                            <img src="images/what-we-do/img-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="mdi mdi-chevron-up nino-icon arrow"></i>
                                            <i class="mdi mdi-camera nino-icon"></i>
                                 <?php
                                    $query = "select * from designer WHERE ID = 1;";
                                    $result = $conn->query($query);
                                    $row = mysqli_fetch_array($result);
                                    printf(" <h4 class='name'>%s</h4>",$row["NAME"]);
                           ?>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                           
                                <?php
                                    $query = "select * from designer WHERE ID = 1;";
                                    $result = $conn->query($query);
                                    $row = mysqli_fetch_array($result);
                                    printf("<span class='desc'>[ %s ]</span>",$row["GREETINGS"]);
                            ?>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="mdi mdi-chevron-up nino-icon arrow"></i>
                                            <i class="mdi mdi-owl nino-icon"></i> 
                                 <?php
                                    $query = "select * from designer WHERE ID = 2;";
                                    $result = $conn->query($query);
                                    $row = mysqli_fetch_array($result);
                                    printf(" <h4 class='name'>%s</h4>",$row["NAME"]);
                           ?>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                           
                                    <?php
                                    $query = "select * from designer WHERE ID = 2;";
                                    $result = $conn->query($query);
                                    $row = mysqli_fetch_array($result);
                                    printf("<span class='desc'>[ %s ]</span>",$row["GREETINGS"]);
                            ?>
                        </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="mdi mdi-chevron-up nino-icon arrow"></i>
                                            <i class="mdi mdi-laptop-mac nino-icon"></i> 
								<?php
                                    $query = "select * from designer WHERE ID = 3;";
                                    $result = $conn->query($query);
                                    $row = mysqli_fetch_array($result);
                                    printf(" <h4 class='name'>%s</h4>",$row["NAME"]);
                           ?>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                 <?php
                                    $query = "select * from designer WHERE ID = 3;";
                                    $result = $conn->query($query);
                                    $row = mysqli_fetch_array($result);
                                    printf("<span class='desc'>[ %s ]</span>",$row["GREETINGS"]);
                            ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      
<section class="nino-testimonial">

        <div class="container">
         <div class="nino-testimonialSlider">
                <ul>
                    <li>
                        <div layout="row">
                            <div class="nino-symbol fsr">
                                <i class="mdi mdi-comment-multiple-outline nino-icon"></i>
                            </div>
                     <!--추가-->
                     <!--추가-->
                            <div><p class="quote"><?php 
                     $query3 = "select content from community where rownumber=1;";
                     $result2 = $conn->query($query3);
                     $rows = mysqli_fetch_assoc($result2);?>
                     <?php echo $rows['content'] ?>
                                </p>
                                <span class="name"><?php 
                     $query3 = "select name from customer where id=(select c_id from community where rownumber=1);";
                     $result2 = $conn->query($query3);
                     $rows = mysqli_fetch_assoc($result2);?>
                     <?php echo $rows['name'] ?></span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div layout="row">
                            <div class="nino-symbol fsr">
                                <i class="mdi mdi-wechat nino-icon"></i>
                            </div>
                            <div>
                     <!--추가-->
                     <!--추가-->
                                <p class="quote"><?php 
                     $query3 = "select content from community where rownumber=2;";
                     $result2 = $conn->query($query3);
                     $rows = mysqli_fetch_assoc($result2);?>
                     <?php echo $rows['content'] ?></p>
                                <span class="name"><?php 
                     $query3 = "select name from customer where id=(select c_id from community where rownumber=2);";
                     $result2 = $conn->query($query3);
                     $rows = mysqli_fetch_assoc($result2);?>
                     <?php echo $rows['name'] ?></span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div layout="row">
                            <div class="nino-symbol fsr">
                                <i class="mdi mdi-message-text-outline nino-icon"></i>
                            </div>
                            <div>
                     <!--추가-->
                     <!--추가-->
                                <p class="quote"><?php 
                     $query3 = "select content from community where rownumber=3;";
                     $result2 = $conn->query($query3);
                     $rows = mysqli_fetch_assoc($result2);?>
                     <?php echo $rows['content'] ?></p>
                                <span class="name"><?php 
                     $query3 = "select name from customer where id=(select c_id from community where rownumber=3);";
                     $result2 = $conn->query($query3);
                     $rows = mysqli_fetch_assoc($result2);?>
                     <?php echo $rows['name'] ?></span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
   <div class="row nino-hoverEffect";>
               <a onclick="location.href='./write2.php'" style="border:1px solid; padding: 5px;">글쓰기</a>
                </div>
   
    <!--/#nino-testimonial-->
   
    <!--/#nino-testimonial-->

    <!-- Our Team
    =============================================================23423423423===== -->
    <section id="nino-ourTeam">
        <div class="container">
            <h2 class="nino-sectionHeading">
                <span class="nino-subHeading">Artist</span> 미용사 선택
            </h2>
            <p class="nino-sectionDesc">
                마음에 드는 미용사와 원하는 서비스를 선택하세요.
            </p>
            <div class="sectionContent">
                <div class="row nino-hoverEffect">
                    <div class="col-md-4 col-sm-4">
                        <div class="item">
                            <div class="overlay" href="#">
                                <div class="content">
									<header id="nino-header2">
									<div style="position: relative;">
                                    <a href="#" class="nino-service"><b style="color:white;font-size:30px;">SELECT</b></a>
									</div>
									</header>
                                </div>
                                <img src="images/our-team/img-1.jpg" alt="">
                            </div>
                        </div>
                        <div class="info">
                            <?php
                                    $query = "select * from designer WHERE ID = 1;";
                                    $result = $conn->query($query);
                                    $row = mysqli_fetch_array($result);
                                    printf(" <h4 class='name'>%s</h4>",$row["NAME"]);
                                    printf("<span class='desc'>%s</span></br>",$row["POSITION"]);
                                    printf("<span class='desc'>[ %s ]</span>",$row["PHONE"]);
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="item">
                            <div class="overlay" href="#">
								<div class="content">
									<header id="nino-header2">
									<div style="position: relative;">
                                    <a href="#" class="nino-service2"><b style="color:white;font-size:30px;">SELECT</b></a>
									</div>
									</header>
                                </div>
                                <img src="images/our-team/img-2.jpg" alt="">
                            </div>
                        </div>
                        <div class="info">
                            <?php
                                    $query = "select * from designer WHERE ID = 2;";
                                    $result = $conn->query($query);
                                    $row = mysqli_fetch_array($result);
                                    printf(" <h4 class='name'>%s</h4>",$row["NAME"]);
                                    printf("<span class='desc'>%s</span></br>",$row["POSITION"]);
                                    printf("<span class='desc'>[ %s ]</span>",$row["PHONE"]);
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="item">
                            <div class="overlay" href="#">
                                <div class="content">
									<header id="nino-header2">
									<div style="position: relative;">
                                    <a href="#" class="nino-service3"><b style="color:white;font-size:30px;">SELECT</b></a>
									</div>
									</header>
                                </div>
                                <img src="images/our-team/img-3.jpg" alt="">
                            </div>
                        </div>
                        <div class="info">
                                                    <?php
                                    $query = "select * from designer WHERE ID = 3;";
                                    $result = $conn->query($query);
                                    $row = mysqli_fetch_array($result);
                                    printf(" <h4 class='name'>%s</h4>",$row["NAME"]);
                                    printf("<span class='desc'>%s</span></br>",$row["POSITION"]);
                                    printf("<span class='desc'>[ %s ]</span>",$row["PHONE"]);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#nino-ourTeam-->

    <!-- Portfolio
    ================================================== -->
    <section id="nino-portfolio">
        <div class="container">
            <h2 class="nino-sectionHeading">
                <span class="nino-subHeading">Items</span> 미용용품
            </h2>
            <p class="nino-sectionDesc">
                필요한 미용용품을 요청하세요
            </p>
        </div>
        <input type="hidden" id="session_name" value="<?php if(isset($_SESSION['userid'])) echo $_SESSION['userid'];?>">
        <script>
            function itembut_1_click() {
            var item1 = prompt("몇개를 요청하시겠습니까?");
            if(item1 == null || item1 == "0") {
                alert("취소하셨습니다.");
                history.back();
            } else {
                var index = 1;
                var name = document.getElementById("session_name").value;
                location.href='require.php?index='+index+'&item='+item1+'&name='+name;
            }
            }
            function itembut_2_click() {
            var item1 = prompt("몇개를 요청하시겠습니까?");
            if(item1 == null || item1 == "0") {
                alert("취소하셨습니다.");
                history.back();
            } else {
                var index = 2;
                var name = document.getElementById("session_name").value;
                location.href='require.php?index='+index+'&item='+item1+'&name='+name;
            }
            }
            function itembut_3_click() {
            var item1 = prompt("몇개를 요청하시겠습니까?");
            if(item1 == null || item1 == "0") {
                alert("취소하셨습니다.");
                history.back();
            } else {
                var index = 3;
                var name = document.getElementById("session_name").value;
                location.href='require.php?index='+index+'&item='+item1+'&name='+name;
            }
            }
            function itembut_4_click() {
            var item1 = prompt("몇개를 요청하시겠습니까?");
            if(item1 == null || item1 == "0") {
                alert("취소하셨습니다.");
                history.back();
            } else {
                var index = 4;
                var name = document.getElementById("session_name").value;
                location.href='require.php?index='+index+'&item='+item1+'&name='+name;
            }
            }
            function itembut_5_click() {
            var item1 = prompt("몇개를 요청하시겠습니까?");
            if(item1 == null || item1 == "0") {
                alert("취소하셨습니다.");
                history.back();
            } else {
                var index = 5;
                var name = document.getElementById("session_name").value;
                location.href='require.php?index='+index+'&item='+item1+'&name='+name;
            }
            }
            function itembut_6_click() {
            var item1 = prompt("몇개를 요청하시겠습니까?");
            if(item1 == null || item1 == "0") {
                alert("취소하셨습니다.");
                history.back();
            } else {
                var index = 6;
                var name = document.getElementById("session_name").value;
                location.href='require.php?index='+index+'&item='+item1+'&name='+name;
            }
            }
            function itembut_7_click() {
            var item1 = prompt("몇개를 요청하시겠습니까?");
            if(item1 == null || item1 == "0") {
                alert("취소하셨습니다.");
                history.back();
            } else {
                var index = 7;
                var name = document.getElementById("session_name").value;
                location.href='require.php?index='+index+'&item='+item1+'&name='+name;
            }
            }
            function itembut_8_click() {
            var item1 = prompt("몇개를 요청하시겠습니까?");
            if(item1 == null || item1 == "0") {
                alert("취소하셨습니다.");
                history.back();
            } else {
                var index = 8;
                var name = document.getElementById("session_name").value;
                location.href='require.php?index='+index+'&item='+item1+'&name='+name;
            }
            }
        </script>
        <div class="sectionContent">
            <ul class="nino-portfolioItems" style="cursor:pointer">
                <li class="item">
                    <a class="" rel="prettyPhoto[gallery1]" title="Development Mobile" onclick="itembut_1_click()">
                        <img src="images/our-work/item-1.jpg" />
                        <div class="overlay">
                            <div class="content">
                                <?php
                                //<i class="mdi mdi-crown nino-icon"></i>
                                      $query = "select * from item WHERE ID = 1;";
                                       $result = $conn->query($query);
                                       $row = mysqli_fetch_array($result);
                                      printf("<h4 class='title'>%s</h4>",$row["COMPANY"]);
                                      printf("<span class='desc'>%s</span></br>",$row["NAME"]);
                                      printf("<span class='desc'>가격 : %s</span>",$row["PRICE"]);
                                 ?>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a class="nino-prettyPhoto" rel="prettyPhoto[gallery1]" title="Development Mobile" onclick="itembut_2_click()">
                        <img src="images/our-work/item-2.jpg" />
                        <div class="overlay">
                            <div class="content">
                                <?php
                                //<i class="mdi mdi-cube-outline nino-icon"></i>
                                      $query = "select * from item WHERE ID = 2;";
                                       $result = $conn->query($query);
                                       $row = mysqli_fetch_array($result);
                                      printf("<h4 class='title'>%s</h4>",$row["COMPANY"]);
                                      printf("<span class='desc'>%s</span></br>",$row["NAME"]);
                                      printf("<span class='desc'>가격 : %s</span>",$row["PRICE"]);
                                 ?>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a class="nino-prettyPhoto" rel="prettyPhoto[gallery1]" title="Development Mobile" onclick="itembut_3_click()">
                        <img src="images/our-work/item-3.jpg" />
                        <div class="overlay">
                            <div class="content">
                                <?php
                                //<i class="mdi mdi-desktop-mac nino-icon"></i>
                                      $query = "select * from item WHERE ID = 3;";
                                       $result = $conn->query($query);
                                       $row = mysqli_fetch_array($result);
                                      printf("<h4 class='title'>%s</h4>",$row["COMPANY"]);
                                      printf("<span class='desc'>%s</span></br>",$row["NAME"]);
                                      printf("<span class='desc'>가격 : %s</span>",$row["PRICE"]);
                                 ?>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a class="nino-prettyPhoto" rel="prettyPhoto[gallery1]" title="Development Mobile" onclick="itembut_4_click()">
                        <img src="images/our-work/item-4.jpg" />
                        <div class="overlay">
                            <div class="content">
                                
                                <?php
                                //<i class="mdi mdi-flower nino-icon"></i>
                                      $query = "select * from item WHERE ID = 4;";
                                       $result = $conn->query($query);
                                       $row = mysqli_fetch_array($result);
                                      printf("<h4 class='title'>%s</h4>",$row["COMPANY"]);
                                      printf("<span class='desc'>%s</span></br>",$row["NAME"]);
                                      printf("<span class='desc'>가격 : %s</span>",$row["PRICE"]);
                                 ?>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a class="nino-prettyPhoto" rel="prettyPhoto[gallery1]" title="Development Mobile" onclick="itembut_5_click()">
                        <img src="images/our-work/item-5.jpg" />
                        <div class="overlay">
                            <div class="content">
                                
                                <?php
                                //<i class="mdi mdi-gamepad-variant nino-icon"></i>
                                      $query = "select * from item WHERE ID = 5;";
                                       $result = $conn->query($query);
                                       $row = mysqli_fetch_array($result);
                                      printf("<h4 class='title'>%s</h4>",$row["COMPANY"]);
                                      printf("<span class='desc'>%s</span></br>",$row["NAME"]);
                                      printf("<span class='desc'>가격 : %s</span>",$row["PRICE"]);
                                 ?>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a class="nino-prettyPhoto" rel="prettyPhoto[gallery1]" title="Development Mobile" onclick="itembut_6_click()">
                        <img src="images/our-work/item-6.jpg" />
                        <div class="overlay">
                            <div class="content">
                                
                                <?php
                                //<i class="mdi mdi-gnome nino-icon"></i>
                                      $query = "select * from item WHERE ID = 6;";
                                       $result = $conn->query($query);
                                       $row = mysqli_fetch_array($result);
                                      printf("<h4 class='title'>%s</h4>",$row["COMPANY"]);
                                      printf("<span class='desc'>%s</span></br>",$row["NAME"]);
                                      printf("<span class='desc'>가격 : %s</span>",$row["PRICE"]);
                                 ?>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a class="nino-prettyPhoto" rel="prettyPhoto[gallery1]" title="Development Mobile" onclick="itembut_7_click()">
                        <img src="images/our-work/item-7.jpg" />
                        <div class="overlay">
                            <div class="content">
                                
                                <?php
                                //<i class="mdi mdi-guitar-electric nino-icon"></i>
                                      $query = "select * from item WHERE ID = 7;";
                                       $result = $conn->query($query);
                                       $row = mysqli_fetch_array($result);
                                      printf("<h4 class='title'>%s</h4>",$row["COMPANY"]);
                                      printf("<span class='desc'>%s</span></br>",$row["NAME"]);
                                      printf("<span class='desc'>가격 : %s</span>",$row["PRICE"]);
                                 ?>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="item">
                    <a class="nino-prettyPhoto" rel="prettyPhoto[gallery1]" title="Development Mobile" onclick="itembut_8_click()">
                        <img src="images/our-work/item-8.jpg" />
                        <div class="overlay">
                            <div class="content">
                                
                                <?php
                                //<i class="mdi mdi-guitar-electric nino-icon"></i>
                                      $query = "select * from item WHERE ID = 8;";
                                       $result = $conn->query($query);
                                       $row = mysqli_fetch_array($result);
                                      printf("<h4 class='title'>%s</h4>",$row["COMPANY"]);
                                      printf("<span class='desc'>%s</span></br>",$row["NAME"]);
                                      printf("<span class='desc'>가격 : %s</span>",$row["PRICE"]);
                                 ?>
                            </div>
                        </div>
                    </a>
                </li>
                
            </ul>
        </div>
    </section>
    <!--/#nino-portfolio-->


    <!-- Map
    ================================================== -->
    <section id="nino-map">
        <div class="container">
            <h2 class="nino-sectionHeading">
                <i class="mdi mdi-map-marker nino-icon"></i>
                <span class="text">Open map</span>
                <span class="text" style="display: none;">Close map</span>
            </h2>
            <div class="mapWrap">
                <iframe src="https://maps.google.com/maps?q=%EC%84%9C%EC%B2%9C%20%EC%9E%A5%ED%95%AD%EC%9D%8D%20%EC%84%B1%EC%A3%BC%EB%A6%AC%20278-2&t=&z=13&ie=UTF8&iwloc=&output=embed" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <!--/#nino-map-->

    <!-- Footer
    ================================================== -->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="colInfo">
                        <div class="footerLogo">
                            <a href="#">CREATE</a>
                        </div>
                        <p>
                            항상 더 나은 서비스로 보답하기위해 최선을 다 하겠습니다.
                        </p>
                        <div class="nino-followUs">
                            <div class="totalFollow"><span>15k</span> followers</div>
                            <div class="socialNetwork">
                                <span class="text">Follow Us: </span>
                                <a href="" class="nino-icon"><i class="mdi mdi-facebook"></i></a>
                                <a href="" class="nino-icon"><i class="mdi mdi-twitter"></i></a>
                                <a href="" class="nino-icon"><i class="mdi mdi-instagram"></i></a>
                                <a href="" class="nino-icon"><i class="mdi mdi-pinterest"></i></a>
                                <a href="" class="nino-icon"><i class="mdi mdi-google-plus"></i></a>
                                <a href="" class="nino-icon"><i class="mdi mdi-youtube-play"></i></a>
                                <a href="" class="nino-icon"><i class="mdi mdi-dribbble"></i></a>
                                <a href="" class="nino-icon"><i class="mdi mdi-tumblr"></i></a>
                            </div>
                        </div>
                        <form action="" class="nino-subscribeForm">
                            <div class="input-group input-group-lg">
                                <input type="email" class="form-control" placeholder="Your Email" required>
                                <span class="input-group-btn">
                           <button class="btn btn-success" type="submit">Subscribe</button>
                        </span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="colInfo">
                        <h3 class="nino-colHeading">Blogs</h3>
                        <ul class="listArticles">
                            <li layout="row" class="verticalCenter">
                                <a class="articleThumb fsr" href="#"><img src="images/our-blog/img-4.jpg" alt=""></a>
                                <div class="info">
                                    <h3 class="articleTitle"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a></h3>
                                    <div class="date">Jan 9, 2016</div>
                                </div>
                            </li>
                            <li layout="row" class="verticalCenter">
                                <a class="articleThumb fsr" href="#"><img src="images/our-blog/img-5.jpg" alt=""></a>
                                <div class="info">
                                    <h3 class="articleTitle"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a></h3>
                                    <div class="date">Jan 9, 2016</div>
                                </div>
                            </li>
                            <li layout="row" class="verticalCenter">
                                <a class="articleThumb fsr" href="#"><img src="images/our-blog/img-6.jpg" alt=""></a>
                                <div class="info">
                                    <h3 class="articleTitle"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing</a></h3>
                                    <div class="date">Jan 9, 2016</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="colInfo">
                        <h3 class="nino-colHeading">instagram</h3>
                        <div class="instagramImages clearfix">
                            <a href="#"><img src="images/instagram/img-1.jpg" alt=""></a>
                            <a href="#"><img src="images/instagram/img-2.jpg" alt=""></a>
                            <a href="#"><img src="images/instagram/img-3.jpg" alt=""></a>
                            <a href="#"><img src="images/instagram/img-4.jpg" alt=""></a>
                            <a href="#"><img src="images/instagram/img-5.jpg" alt=""></a>
                            <a href="#"><img src="images/instagram/img-6.jpg" alt=""></a>
                            <a href="#"><img src="images/instagram/img-7.jpg" alt=""></a>
                            <a href="#"><img src="images/instagram/img-8.jpg" alt=""></a>
                            <a href="#"><img src="images/instagram/img-9.jpg" alt=""></a>
                            <a href="#"><img src="images/instagram/img-3.jpg" alt=""></a>
                            <a href="#"><img src="images/instagram/img-4.jpg" alt=""></a>
                            <a href="#"><img src="images/instagram/img-5.jpg" alt=""></a>
                        </div>
                        <a href="#" class="morePhoto">View more photos</a>
                    </div>
                </div>
            </div>
            <div class="nino-copyright">Copyright &copy; 2019 <a target="_blank" href="http://www.cbnu.ac.kr/" title="cbnu.ac.kr - Top quality open source resources for web developer and web designer">beauty salon</a>. All Rights Reserved. <br/> salon
                by <a href="http://www.cbnu.ac.kr/">HOWOW</a>
			</div>
    </footer>
    <!--/#footer-->

    <!-- Search Form - Display when click magnify icon in menu
    ================================================== -->
    <form method='get' action="login_action.php" id="nino-searchForm">
      <p>ID</p>
      <input style="width:350px;height:60px;font-size:30px;" type="text" name="id">
      <br/><br/>
      <p>PW</p>
      <input style="width:350px;height:60px;font-size:30px;" type="password" name="pw">
      <br/><br/>
      <button type ="button" onclick="location.href='join.php'" style="width:175px;height:40px;font-size:15px;background-color:gray;color:white;">회원가입</button>
      <!--<button type ="button" onclick="location.href='login.php'" style="width:175px;height:40px;font-size:15px;background-color:gray;color:white;">회원가입</button>-->
      
      <button style="width:175px;height:40px;font-size:15px;background-color:gray;color:white;"type="submit" value="로그인">로그인</button>
        <i class="mdi mdi-close nino-close"></i>
    </form>
    <!--/#nino-serviceForm-->
    <form method='get' action="reservation1.php" id="nino-serviceForm">
	
		<div style="text-align:center;">
		<table style="width:100%;">
			<caption>서비스 예약</caption>
			<thead>
				<tr>
					<th colspan="4" style="text-align:Center;">예약현황</th>
				</tr>
			</thead>
			<?php
				//<i class="mdi mdi-crown nino-icon"></i>
				$query = "select * from reservation_table;";
				$result = $conn->query($query);
				$index = 1;
				if($result->num_rows > 0){
					printf("<tbody>");
					while($row = $result->fetch_assoc()){
						if($row["D_ID"]==$index){
							printf("<tbody><tr><th> %s </th>",$row["RESERVATION_DATE"]);
							printf("<td colspan='3'> %s </td></tr></tbody>",$row["RESERVATION_TIME"]);
						}
					}
					printf("</tbody>");
				}else{
					$date = "예약된 시간이 없습니다.";
				}
			?>      
		</table>
		</div>

		<div style="text-align:center;">
			<br/>
			<hr width="100%">
			<input type="hidden" name="user" value="<?php if(isset($_SESSION['userid'])) echo $_SESSION['userid'];?>">
			<br/>
			<p>날짜 : <input type="date" name="date"></p>
			<br/>
			예약시간:
				<input type="text" name="time" value=" " >
			<br/>
			<br/>
			서비스:
			<select name="service" size="1">
				<option value="1" selected>남성 머리 커트</option>
				<option value="2" >여성 머리 커트</option>
				<option value="3" >짧은머리 파마</option>
				<option value="4" >긴 머리 파마</option>
				<option value="5" >뿌리염색</option>
				<option value="6" >염색</option>
				<option value="7" >짧은머리 매직</option>
				<option value="8" >긴 머리 매직</option>
				<option value="9" >짧은머리 아이롱펌</option>
				<option value="10" >긴 머리 아이롱펌</option>
				<option value="11" >짧은 머리 핫핀펌</option>
				<option value="12" >긴 머리 핫핀펌</option>
			</select>
			<button type ="submit" value="예약" style="width:100px;height:30px;font-size:10px;background-color:gray;color:white;">예약하기</button>
		</div>
		
        <i class="mdi mdi-close nino-close"></i>
    </form>
	<!--/#nino-service2Form-->
    <form method='get' action="reservation2.php" id="nino-serviceForm2">
		<div style="text-align:center;">
		<table style="width:100%;">
			<caption>서비스 예약</caption>
			<thead>
				<tr>
					<th colspan="4" style="text-align:Center;">예약현황</th>
				</tr>
			</thead>
			<?php
				//<i class="mdi mdi-crown nino-icon"></i>
				$query = "select * from reservation_table;";
				$result = $conn->query($query);
				$index = 2;
				if($result->num_rows > 0){
					printf("<tbody>");
					while($row = $result->fetch_assoc()){
						if($row["D_ID"]==$index){
							printf("<tbody><tr><th> %s </th>",$row["RESERVATION_DATE"]);
							printf("<td colspan='3'> %s </td></tr></tbody>",$row["RESERVATION_TIME"]);
						}
					}
					printf("</tbody>");
				}else{
					$date = "예약된 시간이 없습니다.";
				}
			?>      
		</table>
		</div>

		<div style="text-align:center;">
			<br/>
			<hr width="100%">
			<input type="hidden" name="user" value="<?php if(isset($_SESSION['userid'])) echo $_SESSION['userid'];?>">
			<br/>
			<p>날짜 : <input type="date" name="date"></p>
			<br/>
			예약시간:
				<input type="text" name="time" value=" " >
			<br/>
			<br/>
			서비스:
			<select name="service" size="1">
				<option value="1" selected>남성 머리 커트</option>
				<option value="2" >여성 머리 커트</option>
				<option value="3" >짧은머리 파마</option>
				<option value="4" >긴 머리 파마</option>
				<option value="5" >뿌리염색</option>
				<option value="6" >염색</option>
				<option value="7" >짧은머리 매직</option>
				<option value="8" >긴 머리 매직</option>
				<option value="9" >짧은머리 아이롱펌</option>
				<option value="10" >긴 머리 아이롱펌</option>
				<option value="11" >짧은 머리 핫핀펌</option>
				<option value="12" >긴 머리 핫핀펌</option>
			</select>
			<button type ="submit" value="예약" style="width:100px;height:30px;font-size:10px;background-color:gray;color:white;">예약하기</button>
		</div>
		
        <i class="mdi mdi-close nino-close"></i>
    </form>
	<!--/#nino-service3Form-->
    <form method='get' action="reservation3.php" id="nino-service3Form">
		<div style="text-align:center;">
		<table style="width:100%;">
			<caption>서비스 예약</caption>
			<thead>
				<tr>
					<th colspan="4" style="text-align:Center;">예약현황</th>
				</tr>
			</thead>
			<?php
				//<i class="mdi mdi-crown nino-icon"></i>
				$query = "select * from reservation_table;";
				$result = $conn->query($query);
				$index = 3;
				if($result->num_rows > 0){
					printf("<tbody>");
					while($row = $result->fetch_assoc()){
						if($row["D_ID"]==$index){
							printf("<tbody><tr><th> %s </th>",$row["RESERVATION_DATE"]);
							printf("<td colspan='3'> %s </td></tr></tbody>",$row["RESERVATION_TIME"]);
						}
					}
					printf("</tbody>");
				}else{
					$date = "예약된 시간이 없습니다.";
				}
			?>      
		</table>
		</div>

		<div style="text-align:center;">
			<br/>
			<hr width="100%">
			<input type="hidden" name="user" value="<?php if(isset($_SESSION['userid'])) echo $_SESSION['userid'];?>">
			<br/>
			<p>날짜 : <input type="date" name="date"></p>
			<br/>
			예약시간:
				<input type="text" name="time" value=" " >
			<br/>
			<br/>
			서비스:
			<select name="service" size="1">
				<option value="1" selected>남성 머리 커트</option>
				<option value="2" >여성 머리 커트</option>
				<option value="3" >짧은머리 파마</option>
				<option value="4" >긴 머리 파마</option>
				<option value="5" >뿌리염색</option>
				<option value="6" >염색</option>
				<option value="7" >짧은머리 매직</option>
				<option value="8" >긴 머리 매직</option>
				<option value="9" >짧은머리 아이롱펌</option>
				<option value="10" >긴 머리 아이롱펌</option>
				<option value="11" >짧은 머리 핫핀펌</option>
				<option value="12" >긴 머리 핫핀펌</option>
			</select>
			<button type ="submit" value="예약" style="width:100px;height:30px;font-size:10px;background-color:gray;color:white;">예약하기</button>
		</div>
		
        <i class="mdi mdi-close nino-close"></i>
    </form>
    <!-- Scroll to top
    ================================================== -->
    <a href="#" id="nino-scrollToTop">Go to Top</a>

    <!-- javascript -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.hoverdir.js"></script>
    <script type="text/javascript" src="js/modernizr.custom.97074.js"></script>
    <script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="js/unslider-min.js"></script>
    <script type="text/javascript" src="js/template.js"></script>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
     <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
   <![endif]-->
    <!-- css3-mediaqueries.js for IE less than 9 -->
    <!--[if lt IE 9]>
       <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
   <![endif]-->

</body>

</html>
<!-- EOT;echo $team_db;?> -->