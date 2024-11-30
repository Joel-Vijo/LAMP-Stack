<?php
    include("connect.php");
  
    $q="select * from teacher.teacher_list";
    $query=mysqli_query($con,$q);
    
?>
  
<html>
  
<head>
    <meta http-equiv="Content-Type" 
        content="text/html; charset=UTF-8">
  
    <title>View List</title>
   <!--<link rel="stylesheet" 
        href="style.css"> --> 
   <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
  
<body style="background-color:rgb(125,175,75)">
    <div class="container mt-5">
          
        <!-- top -->

        <div class="row">
            <div class="col-lg-8">
                <h1>Teacher List</h1>
                <a href="add.php" style="color:blue">Add Teacher</a>
            </div>
            <div class="col-lg-4">
                <div class="row">
                </div>
            </div>
        </div>
  
        <!-- Grocery Cards -->
        <div class="row mt-4" style="border:2px;border-color:black">
            <?php
                while ($qq=mysqli_fetch_array($query)) 
                {
            ?>
  
            <div class="col-lg-4" >
                <div class="card" >
                    <div class="card-body" style="border-radius:200px;border-color:black;">
                        <h5 class="card-title" >
                            <?php echo $qq['Name']; ?>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <?php echo 
                            $qq['teacher_id']; ?>
                        </h6>
                        <a href=
                        "delete.php?id=<?php echo $qq['teacher_id']; ?>" 
                            class="card-link">
                            Delete
                        </a>
                        <a href=
                        "update.php?id=<?php echo $qq['teacher_id']; ?>" 
                            class="card-link">
                            Update
                        </a>
                    </div>
                </div><br>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>
  
</html>
