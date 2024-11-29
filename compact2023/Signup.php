<?php 

include('dbconnection.php');
if(isset($_POST['submit']))
  {
  	//getting the post values
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $contno=$_POST['contactno'];
    $add=$_POST['address'];
    $email=$_POST['email'];
    $passwd=$_POST['password'];
   
  // Query for data insertion
     $query=mysqli_query($con, "insert into tblusers(FirstName,LastName, MobileNumber, Address, Email, Password) value('$fname','$lname', '$contno', '$add', '$email', '$passwd')");
    if ($query) {
    echo "<script>alert('You have successfully inserted the data');</script>";
    echo "<script type='text/javascript'> document.location ='Login.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>
<html>
    <head>
        <title>smartAtm</title>            
        <link rel="stylesheet" href="css/SignupStyle.css">
    </head>
    <body>
        <table style="width: 100%;">
            <tr>
                <td>
                    <table  style="width: 100%;">
                        <tr>
                            <td>
                                <img src="images/atmgif.gif" width="300" height="200" alt="Company Logo"> 
                            </td>
                            <td style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 70px;color: green;">
                                smartAtm
                            </td>
                        </tr>
                        <tr style="height: 5px;">
                           <td colspan="2" style="background-color:green;"></td> 
                        </tr>
                        <tr>
                            <td colspan="2">
                                <table>
                                    <tr>
                                        <td style="text-align:center; width: 100px;">
                                            <a href="Home.html">Home</a>                                            
                                        </td>
                                        <td style="text-align:center; width: 100px;">
                                            <a href="Login.php">Login</a>                                            
                                        </td>
                                        <td style="text-align:center; width: 100px;">
                                            <a href="Signup.php">Signup</a>                                            
                                        </td>
                                        <td style="text-align:center; width: 100px;">
                                            <a href="AboutUs.html">About Us</a>                                            
                                        </td>
                                        <td style="text-align:center; width: 100px;">
                                            <a href="ContactUs.html">Contact Us</a>                                            
                                        </td>
                                        <td style="text-align:center; width: 100px;">
                                            <a href="Help.html">Help</a>                                            
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr style="height: 2px;">
                            <td colspan="2" style="background-color:green;"></td> 
                         </tr>
                         <tr>
                             <td colspan="2">
                                 <table>
                                     <tr>
                                         <td></td>
                                     </tr>
                                 </table>
                             </td>
                         </tr>
                    </table>
                </td>
            </tr>
        </table>

        <div style="position: absolute;left:400px;top:265px;width: 500px; 
        height:400px; border-style: dotted;border-radius: 20px;">
        <form  method="POST">
        <table style="margin-top: 50px; margin-left: 30px;">
            <tr>
                <td colspan="3">
                    <div class="title">Signup</div> 
                </td>
            </tr>
            <tr>
                <td class="lbl">FName</td>
                <td>:</td>
                <td>
                    <input type="text" name="fname" class="txtbx" placeholder="Enter First Name" required autofocus>
                </td>
            </tr>
            <tr>
                <td class="lbl">LName</td>
                <td>:</td>
                <td>
                    <input type="text" name="lname" class="txtbx" placeholder="Enter Last Name" required>
                </td>
            </tr>
            <tr>
                <td class="lbl">Phone</td>
                <td>:</td>
                <td>
                    <input type="text" name="contactno" placeholder="Enter Mobile Number" class="txtbx" required="true" maxlength="10" pattern="[0-9]+">
                </td>
            </tr>           
            <tr>
                <td class="lbl">Address</td>
                <td>:</td>
                <td>                    
                    <textarea name="address" class="txtbx" cols="23" placeholder="Enter Your Address" required="true"></textarea>
                </td>
            </tr>
            <tr>
                <td class="lbl">Email</td>
                <td>:</td>
                <td>
                    <input type="email" name="email" class="txtbx" placeholder="Enter Email Id" required="true">
                </td>
            </tr>
            <tr>
                <td class="lbl">Password</td>
                <td>:</td>
                <td>
                    <input type="password" id="password" name="password" placeholder="Enter Password" class="txtbx" required>
                </td>
            </tr>            
                <tr>
                    <td colspan="2"></td>                    
                    <td style="text-align: right;">
                        <input type="submit" id="btn" name="submit" value="Submit">
                    </td>
                </tr>    
                <tr>
                    <td colspan="3">
                        <div style="text-align: center;">Aready Signup!!  <a href="Login.php">Login</a></div>
                    </td>
                </tr>                    
        </table>
        </form>
        </div>
    </body>
</html>