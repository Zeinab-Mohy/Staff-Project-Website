<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,thead,th,td{
            border: 1px solid;
        } 
    </style>
</head>
<body>
<?php
    if(isset($_POST['sign_in'])){
        require("./log_in_submit.php");
        $ob=new DB();
        $table=$ob->index($_POST['email'],$_POST['password']);
        echo '<pre>';
        var_dump($table);
        echo '</pre>';
        if($table==-1){
            // echo "your log in is failed";
            header("location:login.php");
        }else{
            header("location:my_profile.php?id=$table[0]");
            // echo "your log in success";
        }
    }
?>
    <form action="./profile.php" method="post" >
    <input type="hidden" name="id" value=<?php echo htmlspecialchars($table[0]); ?>>
        <input type="hidden" name="email" value=<?php  echo htmlspecialchars($table[1]); ?>>
        <input type="hidden" name="password" value=<?php  echo htmlspecialchars($table[2]); ?>>
        <input type="submit" name="edit" value="edit">
    </form>
</body>
</html>