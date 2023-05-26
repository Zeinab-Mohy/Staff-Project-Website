<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
	<link rel="stylesheet" type="text/css" href="css/profile.css">

    <!-- Boxicons CSS -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<?php
        // echo $_POST["id"];
        // $cond=$id;
        if(isset($_POST['update'])){
            require("./log_in_submit.php");
            $ob=new DB();
            $id=$_POST['id']; 
            $first_name=$_POST['first_name'];
            $second_name=$_POST['second_name'];
            $birth_date=$_POST['birth_date'];
            $email=$_POST['email'];
            $scientific_degree=$_POST['scientific_degree'];
            $faculty=$_POST['faculty'];
            $gender=$_POST['gender'];
            $id_number=$_POST['id_number'];
            $nationality=$_POST['nationality'];
            $phone_number=$_POST['phone_number'];
            $password=$_POST['password'];
            $confirm_password=$_POST['confirm_password'];

            $fileName = $_FILES["image"]["name"];
            $fileSize = $_FILES["image"]["size"];
            $tmpName = $_FILES["image"]["tmp_name"];
            $imageExtension = explode('.', $fileName);
            $imageExtension = strtolower(end($imageExtension));
            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;
            move_uploaded_file($tmpName, 'profile_img/' . $newImageName);
            $image=$newImageName;

            $data=[$first_name,$second_name,$birth_date,$email
            ,$scientific_degree,$faculty
            ,$gender,$id_number
            ,$nationality,$phone_number
            ,$password,$confirm_password,$image];
            $cond=$id;
            var_dump($data);
            $ob->edit($data,$id);
            // var_dump($ob);
        }
    ?>
<div class="profile-card"> 
    
    <div >
    <img src="profile_img/<?php echo $_POST["image"]; ?>" width = 200 title="<?php echo $_POST['image']; ?>" class="image">
    </div>

    <div class="test-data">
    <div class="container">
    <form class="" action="#" method="post" autocomplete="off" enctype="multipart/form-data">
        <div class="user-details">
        <input type="hidden" name="id" value=<?php echo $_POST['id'] ;?>>
            <div class="input-box">
                <label class="details"> First Name </label>
                <input type="text" name="first_name" placeholder="Enter Your First Name" >
            </div>

            <div class="input-box">
                <label class="details">Second Name </label>
                <input type="text" name="second_name" placeholder="Enter Your Second Name" >
            </div>

            <div class="input-box">
                <label class="details">Birth Date </label>
                <input type="date" name="birth_date" placeholder="Enter Birth date" >
        </div>
 

            <div class="input-box">
                <label class="details">Email</label>
                <input type="text" name="email" placeholder="Enter Your email" >
         </div>

        <div class="input-box">
            <label class="details">Faculty</label>
                <select id="departements" name="faculty">
                    <option value="" selected disabled hidden> Select</option>
                    <option value="FCAI">Faculty of Computer Science and Artificial Intelligence </option>
                    <option value="FPH">Faculty of Pharmacy</option>
                    <option value="FVM">Faculty of Veterinary Medicine</option>
                    <option value="FL">Faculty of Low</option>
                    <option value="FC">Faculty of Commerce</option>
                    <option value="FPHE">Faculty of Physical Education</option>
                    <option value="FCHE">Faculty of Childhood Education</option>
                    <option value="FE">Faculty of Education </option>
                    <option value="FTH">Faculty of Tourism and Hotels</option>

                </select>
            </div>

        <div class="input-box">
                <label class="details">Scientific Degree</label>
                <select id="degree" name="scientific_degree">
                    <option value="" selected disabled hidden> Select </option>
                    <option value="Demonstrator">Demonstrator</option>
                    <option value="Assistant Lecturer">Assistant Lecturer </option>
                    <option value="professor">professor</option>
                    <option value="Assistant Professor">Assistant Professor </option>
                    <option value="Full-Time Teachers">Full-Time Teachers</option>
                    <option value="Replacement Teacher">Replacement Teacher</option>
                    <option value="Professor Doctor">Professor Doctor</option>
                    <option value="Dean of the Faculty">Dean of the Faculty</option>
                    <option value="University President">University President</option>
                </select>
            </div>

            <div class="input-box">
            <label class="details">Gender</label>
                <select id="gender" name="gender">
                    <option value="" selected disabled hidden> Select</option>
                    <option value="male">Male </option>
                    <option value="female">Female</option>
                </select>
            </div>

            <div class="input-box">
                <label class="details">ID Number  </label>
                <input type="text" name="id_number" placeholder="Enter Your  ID number" >
            </div>

            <div class="input-box">
                <label class="details">Nationality </label>
                <input type="text" name="nationality" placeholder="Enter Your Nationality" >
            </div>

             <div class="input-box">
                <label class="details">Phone Number  </label>
                <input type="text" name="phone_number" placeholder="Enter Your number" >
            </div>


            <div class="input-box">
                <label class="details">Password </label>
                <input type="password" name="password" placeholder="Enter Your password" >
            </div>

         


            <div class="input-box">
                <label class="details"> Confirm Password </label>
                <input type="password" name="confirm_password" placeholder="Confirm your password" >
            </div>

            <div class="input-box-image">
                <label class="details"> Change Image </label>
                <input type="file" name="image">
        </div>
      
        </div>
        <div class="button-container">
				<input type="submit" name="update" value="Update" class="button-update">
			</div> 
    </form>


</div>
</div>
</div>






    
	
</body>
</html>
