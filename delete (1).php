
<?php
    include("connect.php");
    $id = $_GET['id'];
    $q = "delete from teacher.teacher_list where teacher_id = $id";
    mysqli_query($con,$q);    
?>
<html>
    <head>
        <title>Delete Teacher</title>
        <link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body style="background-color:rgb(125,175,75)">
    <div class="container mt-5" >
        <h1>Teacher has been deleted from table</h1>
        <a href="index.php">Go Back </a>
    </div>

</body>