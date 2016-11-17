<!DOCTYPE html>
<html>
<?php 
    $operatorc=$_POST['operatorc'];
    $clevel=$_POST['clevel'];
?>
<?php
    if(empty($operatorc)||empty($clevel)){
        header("location:index.php");
    }
?>
<body onload="randomize('<?php echo "$clevel";?>','<?php echo "$operatorc";?>')">
<?php require ('header.php');?>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Calc.Q</h1>
                        <hr class="small">
                        <span class="subheading">Good Luck!</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    </div>
    </div>
    </div>
    
<div class="container">
<form method="POST" action="savescore.php?level=<?php echo $clevel?>">
    <div class="table-responsive">
    <table class="table table-striped" width="20px">
            <thead>
                 <tr>
                    <th colspan="6"><h1 style="text-align:center;" name="judul" id="judul"><span id="difficult"></span> Level</h1></th>
                </tr> 
                <tr>
                    <th colspan="3">Score : <input type="text" id="score" name="score" size="2" readonly="true" style="border:none;background-color:white;padding:3px 5px;"></th>
                    <th colspan="3" id="timeleft">Time Left: <b id="time"></b></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td id="number"><b>1.</b></td>
                    <td><span id="question0"></span>&nbsp;<span name="oper"></span>&nbsp;<span id="question1"></span>&nbsp;=</td>
                    <td><input type="text" name="answer0" id="answer0"></td>
                    <td id="number"><b>6.</b></td>
                    <td><span id="question10"></span>&nbsp;<span name="oper"></span>&nbsp;<span id="question11"></span>&nbsp;=</td>
                    <td><input type="text" name="answer5" id="answer5"></td>
                </tr>
                <tr>
                    <td id="number"><b>2.</b></td>
                    <td><span id="question2"></span>&nbsp;<span name="oper"></span>&nbsp;<span id="question3"></span>&nbsp;=</td>
                    <td><input type="text" name="answer1" id="answer1"></td>
                    <td id="number"><b>7.</b></td>
                    <td><span id="question12"></span>&nbsp;<span name="oper"></span>&nbsp;<span id="question13"></span>&nbsp;=</td>
                    <td><input type="text" name="answer6" id="answer6"></td>
                </tr>
                <tr>
                    <td id="number"><b>3.</b></td>
                    <td><span id="question4"></span>&nbsp;<span name="oper"></span>&nbsp;<span id="question5"></span>&nbsp;=</td>
                    <td><input type="text" name="answer2" id="answer2"></td>
                    <td id="number"><b>8.</b></td>
                    <td><span id="question14"></span>&nbsp;<span name="oper"></span>&nbsp;<span id="question15"></span>&nbsp;=</td>
                    <td><input type="text" name="answer7" id="answer7"></td>
                </tr>
                <tr>
                    <td id="number"><b>4.</b></td>
                    <td><span id="question6"></span>&nbsp;<span name="oper"></span>&nbsp;<span id="question7"></span>&nbsp;=</td>
                    <td><input type="text" name="answer3" id="answer3"></td>
                    <td id="number"><b>8.</b></td>
                    <td><span id="question16"></span>&nbsp;<span name="oper"></span>&nbsp;<span id="question17"></span>&nbsp;=</td>
                    <td><input type="text" name="answer8" id="answer8"></td>
                </tr>
                <tr>
                    <td id="number"><b>5.</b></td>
                    <td><span id="question8"></span>&nbsp;<span name="oper"></span>&nbsp;<span id="question9"></span>&nbsp;=</td>
                    <td><input type="text" name="answer4" id="answer4"></td>
                    <td id="number"><b>10.</b></td>
                    <td><span id="question18"></span>&nbsp;<span name="oper"></span>&nbsp;<span id="question19"></span>&nbsp;=</td>
                    <td><input type="text" name="answer9" id="answer9"></td>
                </tr>
                <tr>
                    <?php if(isset($_SESSION['username'])){
                    echo'
                    <td colspan=3>
                        <button onclick="hasil()" id="cekscore" class="btn btn-danger pull-right">Check Score</button>
                    </td>
                    <td colspan=3>
                        <button class="btn btn-primary pull-left" disabled="true" id="savescore" type="submit">Save Score
                        </button>
                    </td>';
                    }else{
                        echo'<td colspan=6>
                    <center>
                        <button onclick="hasil()" id="cekscore" class="btn btn-primary">Check Score</button>
                    </center>
                    </td>';
                    }
                    ?>
                </tr>
            </tbody>
    </table>
    </div>
    </form>
</div>
    <!-- Generate Number Javascript -->
    <script src="js/randomizer.js"></script>
<?php include('footer.php')?>
</body>
</html>