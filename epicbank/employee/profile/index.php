<?php
    session_start();
        $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/conn.php";
    include_once($path);
    
$sql = "SELECT * FROM employee_info";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " . $row["Reg_No"]. " - Name: " . $row["username"]. " " . $row["password"]. "<br>";
    }
} else {
    echo "0 results";
}
?>
<!DOCTYPE html>

<html lang="en">
    <?php
       $path = $_SERVER['DOCUMENT_ROOT'];
       $path .= "/head.php";
       include_once($path);
    ?>
    <body>
        <div class="container">
            <div class="row">
              
              <?php
                   $path = $_SERVER['DOCUMENT_ROOT'];
                   $path .= "/epicbank/employee/sidebar.php";
                   include_once($path);
              ?>

              </br>
              <div class="col-md-8">
                  <div class="logout">
                    <span class="label label-info" style="font-size: 15px; padding: 8px; margin-top: 1%; font-family: 'Cuprum', sans-serif;"><?php echo $_SESSION["f_name"] . "&nbsp;" . $_SESSION["l_name"] ;?></span>
                    &nbsp;
                    &nbsp;
                    <button type="button" class="btn btn-danger">logout</button>
                </div>
                <!--<h1 style="font-family: 'Cuprum', sans-serif;">New Account</h1>               
                -->
                <div>
                    <h3 style="font-family: 'Cuprum', sans-serif; color: #1E824C;"><i class="fa fa-user-secret"></i>&nbsp;&nbsp;Profile</h3>
                </div>
                <div>
                    <div class="input-group" style="margin-top:3.5%">
                      <input type="text" class="form-control" placeholder="Search for User Account...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                      </span>
                    </div>
                </div>
                <div class="jumbotron">
                    <form class="form-inline" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <span class="label label-default nc">First Name&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " name="fname" id="exampleInputName2" placeholder="type your first name here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Last Name&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " id="exampleInputName2" placeholder="type your last name here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Date of Birth&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " id="exampleInputName2" placeholder=" DOB here.......">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Sex&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                          <input type="checkbox" aria-label="male">&nbsp;&nbsp;Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="form-group inp">
                          <input type="checkbox" aria-label="female">&nbsp;&nbsp;Female&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                        <div class="form-group inp">
                              <input type="checkbox" aria-label="others">&nbsp;&nbsp;others&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Father's Name&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " id="exampleInputName2" placeholder="type your father name here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Account Number&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " id="exampleInputName2" placeholder=" ACC no. here.......">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Account Type&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <div class="form-group inp">
                              <input type="checkbox" aria-label="current">&nbsp;&nbsp;Current Acc.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="form-group inp">
                              <input type="checkbox" aria-label="saving">&nbsp;&nbsp;Saving Acc.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            
                            <div class="form-group inp">
                              <input type="checkbox" aria-label="deposite">&nbsp;&nbsp;Deposite Acc.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="form-group inp">
                              <input type="checkbox" aria-label="student">&nbsp;&nbsp;Student Acc.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Registration Number Name&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " id="exampleInputName2" placeholder="type your Reg No. here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Home Address&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " id="exampleInputName2" placeholder="type your home address here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">National ID Card Number&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " id="exampleInputName2" placeholder="type your ID No. here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Religion&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <div class="form-group inp">
                              <input type="checkbox" aria-label="Islam">&nbsp;&nbsp;Islam&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="form-group inp">
                              <input type="checkbox" aria-label="Christian">&nbsp;&nbsp;Christian&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            
                            <div class="form-group inp">
                              <input type="checkbox" aria-label="Hinduism">&nbsp;&nbsp;Hinduism&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="form-group inp">
                              <input type="checkbox" aria-label="Budhasim">&nbsp;&nbsp;Budhaism&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                            <div class="form-group inp">
                              <input type="checkbox" aria-label="Others">&nbsp;&nbsp;others&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            </div>
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Contact No&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " id="exampleInputName2" placeholder="type your contact no. here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Nationality&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " id="exampleInputName2" placeholder="type your nationality here .....">
                        </div>
                        </br>
                        </br>
                        <span class="label label-default nc">Email&nbsp;:&nbsp;</span>
                        &nbsp;
                        &nbsp;
                        </br>
                        </br>
                        <div class="form-group inp">
                            <input type="text" style="width:250%"class="form-control " id="exampleInputName2" placeholder="type your email here .....">
                        </div>
                        </br>
                        </br>
                        </br>
                        </br>
                        <button type="button" class="btn btn-warning">Update</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="button" class="btn btn-primary">Preview</button>
                    </form>
                </div>
              </div>
            </div>
        </div>
          
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </body>
</html>

