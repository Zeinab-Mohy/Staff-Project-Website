<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
	<link rel="stylesheet" type="text/css" href="../css/profile.css">
    <style>
        table,thead,th,td{
            border: 1px solid;
            width: 2000px;
            height: 50px;
            text-align: center;
        } 
    </style>
</head>
<body>
    <?php
        $a=$_POST['first_name'];
        $b=$_POST['second_name'];
        $c=$_POST['email'];

        // $conn = new PDO('mysql:host=localhost;dbname=ia_project','root','');
        require ('../Connection/connection.php');
        $query="SELECT *FROM staff where first_name='$a' and
        second_name='$b' and email='$c'";
        $sql=$conn->prepare($query);
        $sql->execute();
        $users=$sql->fetchALL();
        // var_dump($users);
    ?>
	<div class="container">
		
			
        <div class="profile-card"> 

        <h1>My Profile</h1>
		<form action="" method="post" name="display">
        <?php foreach($users as $user):?>
            <div >
            <img src="../img/profile_img/<?php $image=$user["image"];echo $user["image"]; ?>" width = 200 title="<?php echo $user['image']; ?>" class="image">
            </div>

    <!-- <div class="test-data"> -->
    <!-- <form class="" action="#" method="post" autocomplete="off" enctype="multipart/form-data"> -->
        <div class="user-details">
            <div class="input-box">
                <label class="profile-details"> First Name </label>
                <p><?php $first_name=$user['first_name'] ;echo $user['first_name']." ";?></p>
                
            </div>

            <div class="input-box">
                <label class="profile-details">Second Name </label>
                <p><?php $second_name=$user['second_name'] ;echo $user['second_name']." ";?></p>
            </div>

            <div class="input-box">
                <label class="profile-details">Email</label>
                <p><?php $email=$user['email'];echo $user['email'];?></p>
            </div>

            <div class="input-box">
                <label class="profile-details">Faculty</label>
                <p><?php $faculty=$user['faculty'];echo $user['faculty'];?></p>
            </div>

            <div class="input-box">
                <label class="profile-details">Scientific Degree</label>
                <p><?php $scientific_degree=$user['scientific_degree'];echo $user['scientific_degree'];?></p>
            </div>

            <div class="input-box">
                <label class="profile-details">Gender</label>
                <p><?php $gender=$user['gender'];
                            $password=$user["password"] ;
                            $id=$user["id"];
                            echo $user['gender'];?></p>
            </div>


            <div class="input-box">
                <label class="profile-details">Nationality </label>
                <p><?php $nationality=$user['nationality'];echo $user['nationality'];?></p>
            </div>
            <?php endforeach;?>
        </form>
    </div>
</div>
</div>
</body>
</html>
