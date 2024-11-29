<?php 
include('dbconnection.php');

if(isset($_POST['submit']))  //if submit button is clicked
  {  	
    $email=$_POST['email'];
    $passwd=$_POST['password'];
     
  $sql = "SELECT * FROM `tblusers` WHERE `Email` ='{$email}' and `Password` ='{$passwd}' LIMIT 1";
  $query = mysqli_query($con,$sql);
  $row = mysqli_fetch_assoc($query);
    if ($row) {        
    echo "<script>alert('Your Login is Successfull');</script>";
    echo "<script type='text/javascript'> document.location ='index.php'; </script>";
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
        <link rel="stylesheet" href="css/LoginStyle.css">
        <style>
            .bnb {
              background-color: lightgrey;
              
              border: 15px solid green;
              padding: 50px;               
              margin: 20px;
            }
            </style>
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
                            <td style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;font-size: 70px;color:green;">
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
        <form  method="POST">
            <table class="bnb">
                <tr>
                    <td colspan="3" class="title">Login Page</td>
                </tr>
                <tr style="height: 50px;">
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td style="font-family: Arial, Helvetica, sans-serif; color:black;font-size: 25; font-weight: bold;">UserName</td>
                    <td>:</td>
                    <td>
                    <input type="email" name="email" class="txtbx" placeholder="Enter Email Id" required="true">
                    </td>
                </tr>
                <tr>
                    <td style="font-family: Arial, Helvetica, sans-serif; color:black;font-size: 25; font-weight: bold; ">Password</td>
                    <td>:</td>
                    <td>
                    <input type="password" id="password" name="password" placeholder="Enter Password" class="txtbx" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                    <td style="text-align: right;">
                        <input type="submit" id="btn" name="submit" value="Login">
                    </td>
                </tr>                
            </table>
        </form>
    </body>
</html>