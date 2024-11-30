<html>
  
<head>
    <meta http-equiv="Content-Type" 
        content="text/html; charset=UTF-8">
  
    <title>Add List</title>
  
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
  
<body style="background-color:rgb(125,175,75)">
    <div class="container mt-5" >
        <h1>Add Teacher List</h1>
        <form action="add.php" method="POST">
            <div class="form-group">
                <label>Name</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="Name" 
                    name="iname" />
            </div>
  
            <div class="form-group">
                <label>Department</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="department" 
                    name="iqty" />
            </div>
 	    <div class="form-group">
                <label>Email</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="email" 
                    name="iemail" />
            </div>
	    <div class="form-group">
                <label>Contact</label>
                <input type="text" 
                    class="form-control" 
                    placeholder="contact" 
                    name="icontact" />
            </div>
           <div class="form-group">
                <input type="submit" 
                    value="Add" 
                    class="btn btn-danger" 
                    name="btn">
            </div>	 
        </form>
    </div>
  
    <?php
        if(isset($_POST["btn"])) {
            include("connect.php");
            $item_name=$_POST['iname'];
            $item_qty=$_POST['iqty'];
	    $email=$_POST['iemail'];
            $contact=$_POST['icontact'];
      
  
            $q="insert into teacher.teacher_list(Name,Department,email_id,Contact)
            values('$item_name','$item_qty','$email','$contact')";
  
            mysqli_query($con,$q);
            header("location:index.php");
        }
          
        // if(!mysqli_query($con,$q))
        // {
            // echo "Value Not Inserted";
        // }
        // else
        // {
            // echo "Value Inserted";
        // }
    ?>
</body>
  
</html>
