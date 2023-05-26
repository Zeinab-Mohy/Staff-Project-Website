<?php
class DB{
    function __construct(){
    }
    public function index($email,$password){
        $email = $_POST["email"];
        $password = $_POST["password"];

        // echo strlen($email)." ".strlen($password)." ";
        

        $conn = new PDO('mysql:host=localhost;dbname=ia_project','root','');
        $query="SELECT *FROM staff";
        $sql=$conn->prepare($query);
        $sql->execute();
        $users=$sql->fetchALL();

        // echo '<pre>';
        // var_dump($users);
        // echo '<pre>';

        $query2="SELECT COUNT(*) FROM staff";
        $sql2=$conn->prepare($query2);
        $sql2->execute();
        $count=$sql2->fetch();

        // echo $count[0];

        $check=false;
        $xx=0;
        // while($count[0]!=0){
            foreach($users as $user):
                if($count[0]!=0){
                    //  echo strlen($user["email"])." ".strlen($email)."<br>";
                    //  echo strlen($user["passwordd"])." ".strlen($passwordd)."<br>";
                    // settype($user["email"],"string");
                    // echo strlen($user["password"])." ".strlen($password)."<br>";
                    if($email==$user["email"]&&
                    $password==$user["password"]){
                        // echo $user["email"];
                        // echo $user["id"];
                        // echo $user["password"];
                        $check=true;
                        $xx=$user['id'];
                        break;
                    }else{
                        echo "no";
                    }
                    echo "<br>";
                }else{
                    break;
                }
                $count[0]--;
            endforeach;
            // $count[0]--;
            // break;
        // }
        if($check==true){
            // echo "your log in is succeded";
            return [$xx,$email,$password];
        }else{
            // echo "your log in is failed";
            return -1;
        }
    }
    public function edit($data, $cond){
        $conn = new PDO('mysql:host=localhost;dbname=ia_project','root','');
        $query="UPDATE `staff`
        SET first_name='$data[0]',second_name='$data[1]',birth_date='$data[2]'
        ,email='$data[3]'
            ,scientific_degree='$data[4]',faculty='$data[5]'
            ,gender='$data[6]',id_number='$data[7]'
            ,nationality='$data[8]',phone_number='$data[9]'
            ,password='$data[10]',confirm_password='$data[11]',
            image='$data[12]'
        WHERE id=$cond";
        $sql=$conn->prepare($query);
        $result = $sql->execute();
        if( $sql){
            // echo "record was updated";
            header("location:login.php");
        }
    }
}
?>