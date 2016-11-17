<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        .summary-profile-position{
            position: relative;
            bottom:20px;
            top:25px;
            left:10px;
        }
    </style>
</head>
<body>
<?php 
	include('header.php');
?>
<?php	
	require('koneksi.php');
	$username=$_SESSION['username'];
	$sql="select user.username,user.email,user.web,user.birthdate,user.img_user,MAX(score.score) as HighestScore from user inner join score on user.username=score.username and user.username='$username'";
	$query=mysql_query($sql,$koneksi);
	$data=mysql_fetch_array($query);
?>
<?php
    if(!isset($username)){
        header("location:index.php");
    }
?>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/about-bg.jpg')">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Profile</h1>
                        <hr class="small">
                        <span class="subheading"></span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    </div>
    </div>
    </div>

    <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-sm-offset-3">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4 summary-profile-position">
                 		<?php echo '<img class="img-circle " width="160" height="160" src="data:image/jpeg;base64,'.base64_encode( $data['img_user'] ).'"/>';?>
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                            <?php echo $data['username']?></h4>
                        	<small><cite title="San Francisco, USA">San Francisco, USA <i class="glyphicon glyphicon-map-marker">
                        	</i></cite></small>
                        <p>
                            <span class="glyphicon glyphicon-envelope"></span>&nbsp;<?php echo $data['email']?>
                            <br />
                            <span class="glyphicon glyphicon-globe"></span><?php echo"<a href='http://$data[web]'>"?>&nbsp;<?php echo $data['web']?></a>
                            <br />
                            <span class="glyphicon glyphicon-gift"></span>&nbsp;<?php echo $data['birthdate']?>
                            <br/>
                            <span class="glyphicon glyphicon-thumbs-up"></span>&nbsp;<?php echo $data['HighestScore']?> Point
                        <!-- Split button -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php')?>
</body>
</html>