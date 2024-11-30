<?php
    include("connect.php");
    if(isset($_POST['btn']))
    {
        $item_name=$_POST['iname'];
        $item_qty=$_POST['iqty'];
	$email=$_POST['iemail'];
	$contact=$_POST['icontact'];
        $id = $_GET['id'];
        $q= "update teacher.teacher_list set Name='$item_name', Department='$item_qty', email_id='$email', Contact='$contact'
	 where teacher_id=$id";
        $query=mysqli_query($con,$q);
        header('location:index.php');
    } 
    else if(isset($_GET['id'])) 
    {
        $q = "SELECT * FROM teacher.teacher_list WHERE Id='".$_GET['id']."'";
        $query=mysqli_query($con,$q);
        $res= mysqli_fetch_array($query);
    }
?>
<html>
  
<head>
    <meta http-equiv="Content-Type" 
        content="text/html; charset=UTF-8">
      
    <title>Update List</title>
  
    <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
  
<body style="background-color:rgb(125,175,75)">
    <div class="container mt-5">
        <h1>Update Teacher List</h1>
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" 
                    class="form-control" 
                    name="iname" 
                    placeholder="Name" 
                    value=
        "<?php echo $res['Name'];?>" />
            </div>
  
            <div class="form-group">
                <label>Department</label>
                <input type="text" 
                    class="form-control" 
                    name="iqty" 
                    placeholder="Department" 
value="<?php echo $res['Department'];?>" />
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" 
                    class="form-control" 
                    name="iemail" 
                    placeholder="email_id" 
                    value=
        "<?php echo $res['email_id'];?>" />
            </div>
           <div class="form-group">
                <label>Contact</label>
                <input type="text" 
                    class="form-control" 
                    name="icontact" 
                    placeholder="Contact" 
                    value=
        "<?php echo $res['Contact'];?>" />
            </div>

            <div class="form-group">
                <input type="submit" value="Update" 
                    name="btn" class="btn btn-danger">
            </div>
        </form>
    </div>
</body>
  
</html>
