<!DOCTYPE html>
<html lang="en">
<body onload="randomize('easy','minus')">
<?php include('header.php');?>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/home-bg.jpg')">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Calc.Q</h1>
                        <hr class="small">
                        <span class="subheading">Test Your Calculating Skill Here!</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
    </div>
    </div>
    </div>
    <!-- Main Page -->
    <div class="container">
        <center><table>
        <form class="form-horizontal col-xs-10 col-xs-offset-1" method="post" action="quiz.php">
        <div class="row">
        <div class="col-sm-12">
                <div class="form-group">
                        <div data-toggle="buttons">
                              <label>Select Operator :</label>
                              <label class="btn btn-info btn-circle btn-lg active" data-toggle="tooltip" title="Plus"><input type="radio" name="operatorc" value="add" checked="checked"><i class="glyphicon glyphicon-plus" checked></i></label>
                              <label class="btn btn-success btn-circle btn-lg" data-toggle="tooltip" title="Minus"><input type="radio" name="operatorc" value="minus"><i class="glyphicon glyphicon-minus"></i></label>
                              <label class="btn btn-primary btn-circle btn-lg" data-toggle="tooltip" title="Multiply"><input type="radio" name="operatorc" value="multiply"><i class="glyphicon glyphicon-asterisk"></i></label>
                        </div>
                        <div data-toggle="buttons">
                              <label>Select Level : </label>
                              <label class="btn btn-primary btn-circle btn-lg active" data-toggle="tooltip" title="Easy"><input type="radio" name="clevel" value="easy" checked="checked">E</label>
                              <label class="btn btn-warning btn-circle btn-lg" data-toggle="tooltip" title="Hard"><input type="radio" name="clevel" value="hard">H</i></label>
                              <label class="btn btn-danger btn-circle btn-lg" data-toggle="tooltip" title="Insane"><input type="radio" name="clevel" value="insane">I</i></label>
                        </div>
                </div>
                </div>
                <button type="submit" class="btn btn-lg btn-submit">Enter Test</button>
        </div>
        </div>
        </form>
    </div>    
    <?php include('footer.php');?>
    <script type="text/javascript">
       $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</body>

</html>
