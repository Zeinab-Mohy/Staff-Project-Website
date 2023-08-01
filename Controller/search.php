<!DOCTYPE html>
<html lang="English">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search result</title>
    <link rel="stylesheet" href="../css/search.css">
</head>
<body>
    <?php
       require ('../Connection/connection.php');
       $searchf= $_POST['faculty'];
       if($searchf=="select"){
            $searchf=NULL;
       }
       $search= $_POST['search'];
      if($searchf!=NULL&&$search!=NULL){
        // $conn = new PDO('mysql:host=localhost;dbname=ia_project','root','');
        // require ('../Connection/connection.php');
        $query="SELECT *FROM staff where first_name='$search' and faculty='$searchf'";
        $sql=$conn->prepare($query);
        $sql->execute();
        $users=$sql->fetchALL();
            if($users==NULL){
              echo "<p>No search result found ,please Try Again</p>";
              exit();
          }
       }
       else if($searchf==NULL){
        // $conn = new PDO('mysql:host=localhost;dbname=ia_project','root','');
        // require ('./connection.php');
        $query="SELECT *FROM staff where first_name='$search'";
        $sql=$conn->prepare($query);
        $sql->execute();
        $users=$sql->fetchALL();
            if($users==NULL){
              echo "<p>No search result found ,please Try Again</p>";
              exit();
          }

       }else if($search==NULL){
        // $conn = new PDO('mysql:host=localhost;dbname=ia_project','root','');
        // require ('./connection.php');
        $query="SELECT *FROM staff where faculty='$searchf'";
        $sql=$conn->prepare($query);
        $sql->execute();
        $users=$sql->fetchALL();
            if($users==NULL){
              echo "<p>No search result found ,please Try Again</p>";
              exit();
          }
       }else{
        echo "<p>No search result found ,please Try Again</p>";
       }
    //    var_dump($users);
    ?>
        <h1>Search Result</h1>
 <section class="main">
              <?php foreach($users as $user):?>
        <div class="profile-card">
            <div class="image">
                <img src="../img/profile_img/<?php $image=$user["image"];echo $user["image"]; ?>" alt="" class="profile-pic">
            </div>
            <div class="data">
                <h2><?php $a=$user['first_name'];echo $user['first_name']?> <?php echo $user['second_name']?></h2>
                <span><?php echo $user['faculty']?></span>
            </div>
            
            <div class="buttons">
                <!-- <a href="#" class="btn">  </a> -->
                 <form action="../View/profile_search.php" method="POST">
                            <input type="hidden" name="first_name" value=<?php echo $a; ?>>
                            <input type="hidden" name="second_name" value=<?php echo $user['second_name']; ?>>
                            <input type="hidden" name="email" value=<?php echo $user['email']; ?>>
                            <input type="submit" name="visit" value="   Visit Profile" class="btn" >
                        </form>
              
            </div>
        </div>
         <?php endforeach;?>
    </section>
</body>
</html>
