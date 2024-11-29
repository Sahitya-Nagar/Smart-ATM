<?php
//database conection  file
include('dbconnection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        th{
            color:white;
            font-size:25px;
            font-weight: bold;
            background-color:black;
            width:150px;            
        }
        tr{
            color:green;
            font-size:20px;
            background-color:lightgray;
            height:50px;            
        }
        tr:nth-child(even) {
            background-color:lightyellow;
        }
        .footer {
   /* position: fixed; */
   
   width: 100%;
   background-color: black;
   color: white;   
   margin-top:50px;
   height:50px;
}
    </style>
</head>
<body style="background-color: gold;">
    <!-- navbar starts -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Compact</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="View.php">View Users</a>
        <a class="nav-link" href="Login.php">Logout</a>
        <a class="nav-link" href="Help.php">Help</a>        
      </div>
    </div>
  </div>
</nav>
<!-- navbar ends --><!-- navbar ends -->

<table style="margin-left:auto;margin-right:auto;margin-top:50px;">
                <thead >
                    <tr>
                        <th>&nbsp;&nbsp;Id</th>
                        <th>Name</th>                       
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>                        
                    </tr>
                </thead>
                <tbody>
                     <?php
$ret=mysqli_query($con,"select * from tblusers");
$cnt=1;
$row=mysqli_num_rows($ret);
if($row>0){
while ($row=mysqli_fetch_array($ret)) {

?>
<!--Fetch the Records -->
                    <tr>
                        <td>&nbsp;&nbsp;<?php echo $cnt;?></td>
                        <td><?php  echo $row['FirstName'];?> <?php  echo $row['LastName'];?></td>
                        <td><?php  echo $row['Email'];?></td>                        
                        <td><?php  echo $row['MobileNumber'];?></td>
                        <td> <?php  echo $row['Address'];?></td>                        
                    </tr>
                    <?php 
$cnt=$cnt+1;
} } else {?>
<tr>
    <th style="text-align:center; color:red;" colspan="6">No Record Found</th>
</tr>
<?php } ?>                 
                
                </tbody>
            </table>

            <div class="footer">
  <p>Create By : Amit Patni <br/>
  @Copyright Compact 2022- All Right Reserved.   </p>
</div>
            
</body>
</html>