<?php
    $first_name=$second_name=$birth_date=$email =$scientific_degree=$faculty=
    $gender=$id_number=$nationality=$phone_number =$password =$confirm_password
    =$image=$verify=$verify_confirm=$hash=$hash_confirm="";

    $first_nameErr=$second_nameErr=$birth_dateErr=$emailErr
     =$scientific_degreeErr=$facultyErr=
    $genderErr=$id_numberErr=$nationalityErr=
    $phone_numberErr =$passwordErr =$confirm_passwordErr
    ="";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if(empty($_POST['first_name'])){
            $first_nameErr = "first name is required";
        } else {
            $first_name = $_POST["first_name"];
            if (!preg_match("/^[a-zA-Z-' ]*$/",$first_name)) {
                $first_nameErr = "Only letters and white space allowed";
            }
        }

        if(empty($_POST['second_name'])){
            $second_nameErr = "second name is required";
        } else {
            $second_name = $_POST["second_name"];
            if (!preg_match("/^[a-zA-Z-' ]*$/",$second_name)) {
                $second_nameErr = "Only letters and white space allowed";
            }
        }

        function isEduEmail($email){
            $email = explode("@",$email);
            switch($email[count($email)-1]){
                case "fcai.usc.edu.eg":
                    return true;
                case "fop.usc.edu.eg":
                    return true;
                case "vet.usc.edu.eg":
                    return true;
                case "law.usc.edu.eg":
                    return true;
                case "com.usc.edu.eg":
                    return true;
                case "phed.usc.edu.eg":
                    return true;
                case "fch.usc.edu.eg":
                    return true;
                case "edu.usc.edu.eg":
                    return true;
                case "fth.usc.edu.eg":
                    return true;
                case "esri.usc.edu.eg":
                    return true;
                case "gepri.usc.edu.eg":
                    return true;
                default:
                    return false;
            }
              
        }

        if(empty($_POST['email'])){
            $emailErr = "email is required";
        } else {
            $email = $_POST["email"];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }else{
                if(!isEduEmail($email)){
                    $emailErr = "Invalid email format";
                }
            }
        }
        

        if (isset($_POST["landLineTelNo"]) && $_POST["landLineTelNo"] !== '') {
    // Check if non-digits were provided
    if (!ctype_digit($_POST['landLineTelNo'])) {
        $landLineTelNoErr = "Must contain only digits";
        $valid = false;
    }
    // Check if exactly 12 digits were provided
    elseif (strlen($_POST['landLineTelNo']) !== 12) {
        $landLineTelNoErr = "Must contain 12 digits";
        $valid = false;
    }
}

        if(empty($_POST['phone_number'])){
            $phone_numberErr = "phone number is required";
        } else if (isset($_POST['phone_number']) && $_POST['phone_number'] !== '') {
        // Check if non-digits were provided
        if (!ctype_digit($_POST['phone_number'])) {
            $phone_numberErr = "Must contain only digits";
            $valid = false;
        }
        // Check if exactly 12 digits were provided
        elseif (strlen($_POST['phone_number']) !== 11) {
            $phone_numberErr = "Must contain 11 digits";
            $valid = false;
        }
        } 
        else {
                $phone_number = $_POST["phone_number"];
            }


        if(empty($_POST['password'])){
            $passwordErr = "password is required";
        } elseif (strlen($_POST['password']) !== 6) {
            $passwordErr = "Must contain 6 digits";
            $valid = false;
        }
        else {
            $password = $_POST["password"];
            $hash = password_hash($password,PASSWORD_DEFAULT);
        }

        if(empty($_POST['confirm_password'])){
            $confirm_passwordErr = "confirm password is required";
        } else {
            if($_POST['confirm_password']==$password){
                $confirm_password = $_POST["confirm_password"];
                $hash_confirm = password_hash($password,PASSWORD_DEFAULT);
            }else{
                $confirm_passwordErr = "confirm password is not the same password";
            }
        }

        if(empty($_POST['faculty'])){
            $facultyErr = "faculty is required";
        } else {
            $faculty = $_POST["faculty"];
        }

        if(empty($_POST['birth_date'])){
            $birth_dateErr = "birth_date is required";
        } else {
            $birth_date = $_POST["birth_date"];
        }

        if(empty($_POST['scientific_degree'])){
            $scientific_degreeErr = "scientific_degree is required";
        } else {
            $scientific_degree = $_POST["scientific_degree"];
        }

        if(empty($_POST['gender'])){
            $genderErr = "gender is required";
        } else {
            $gender = $_POST["gender"];
        }

        if(empty($_POST['id_number'])){
            $id_numberErr = "id_number is required";
        }elseif (strlen($_POST['id_number']) !== 15) {
            $id_numberErr = "Must contain 15 digits";
            $valid = false;
        }
         else {
            $id_number = $_POST["id_number"];
        }

        if(empty($_POST['nationality'])){
            $nationalityErr = "nationality is required";
        } else {
            $nationality = $_POST["nationality"];
        }
        
        if($first_nameErr ==""&&$second_nameErr ==""&&$emailErr ==""&&
        $phone_numberErr==""&&$passwordErr ==""&&
        $confirm_passwordErr ==""&&$facultyErr 
        ==""&&$scientific_degreeErr ==""&& $genderErr ==""){

            $first_name=$_POST["first_name"];
            $second_name=$_POST["second_name"];
            $birth_date=$_POST["birth_date"];
            $email =$_POST["email"];
            $scientific_degree=$_POST["scientific_degree"];
            $faculty=$_POST["faculty"];
            $gender=$_POST["gender"];
            $id_number=$_POST["id_number"];
            $nationality=$_POST["nationality"];
            $phone_number =$_POST["phone_number"];
            $password =$hash;
            $confirm_password =$hash_confirm;

            if(isset($_POST['Register'])){
                // $conn = new PDO('mysql:host=localhost;dbname=ia_project','root','');
                require ('../Connection/connection.php');
                if($_FILES["image"]["error"] == 4){
                    echo
                    "<script> alert('Image Does Not Exist'); </script>"
                    ;
                  }
                  else{
                    $fileName = $_FILES["image"]["name"];
                    $fileSize = $_FILES["image"]["size"];
                    $tmpName = $_FILES["image"]["tmp_name"];
                
                    $validImageExtension = ['jpg', 'jpeg', 'png'];
                    $imageExtension = explode('.', $fileName);
                    $imageExtension = strtolower(end($imageExtension));
                    if ( !in_array($imageExtension, $validImageExtension) ){
                      echo
                      "
                      <script>
                        alert('Invalid Image Extension');
                      </script>
                      ";
                    }
                    else if($fileSize > 1000000){
                      echo
                      "
                      <script>
                        alert('Image Size Is Too Large');
                      </script>
                      ";
                    }
                    else{
                        $newImageName = uniqid();
                        $newImageName .= '.' . $imageExtension;
                        move_uploaded_file($tmpName, '../img/profile_img/' . $newImageName);
                        $query="INSERT INTO staff(first_name,
                        second_name,
                        birth_date,
                        email ,
                        scientific_degree,
                        faculty,
                        gender,
                        id_number,
                        nationality,
                        phone_number ,
                        password ,
                        confirm_password ,
                        image)
                        values(:first_name,:second_name,:birth_date,
                        :email ,
                        :scientific_degree,
                        :faculty,
                        :gender,
                        :id_number,
                        :nationality,
                        :phone_number ,
                        :password ,
                        :confirm_password ,
                        :image)";
                        $sql=$conn->prepare($query);
                        $data = [
                            ":first_name"=>$first_name
                            ,":second_name"=> $second_name
                            ,":birth_date"=>$birth_date
                            ,":email"=>$email
                            ,":scientific_degree"=>$scientific_degree
                            ,":faculty"=>$faculty
                            ,":gender"=>$gender
                            ,":id_number"=>$id_number
                            ,":nationality"=>$nationality
                            ,":phone_number"=>$phone_number
                            ,":password"=>$password
                            ,":confirm_password"=>$confirm_password
                            , ":image"=>$newImageName
                        ];
                        $result = $sql->execute( $data);
        
                        if($result)
                        {
                            header("location:../View/login.php");   
                            // echo 'Data inserted';
                        }else{
                            header("location:../View/signup.php");
                            // echo 'Data Not inserted';
                        }
                    }
                }
            }
        }
    }
    
?>
