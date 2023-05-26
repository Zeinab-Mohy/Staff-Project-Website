<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" href="css/signup.css">
</head>
<body>
 <?php
        require('./sign_up_submit.php'); 
    ?> 
<div class="container">
    <div class="title">Sign Up</div>
    <form class="" action="#" method="post" autocomplete="off" enctype="multipart/form-data">
        <div class="user-details">

            <div class="input-box">
                <label class="details"> First Name </label>
                <input type="text" name="first_name" placeholder="Enter Your First Name" >
                <span class="error">* <?php echo $first_nameErr;?></span>
            </div>

            <div class="input-box">
                <label class="details">Second Name </label>
                <input type="text" name="second_name" placeholder="Enter Your Second Name" >
                <span class="error">* <?php echo $second_nameErr;?></span>
            </div>

            <div class="input-box">
                <label class="details">Birth Date </label>
                <input type="date" name="birth_date" placeholder="Enter Birth date" >
                <span class="error">*<?php echo $birth_dateErr;?></span>
        </div>
 

            <div class="input-box">
                <label class="details">Email</label>
                <input type="text" name="email" placeholder="Enter Your email" >
                <span class="error">* <?php echo $emailErr;?></span>
            </div>

        <div class="input-box">
            <label class="details">Faculty</label>
                <select id="departements" name="faculty">
                    <option value="" selected disabled hidden> Select</option>
                     <option value="FCAI">Faculty of Computer Science and Artificial Intelligence </option>
                                        <option value="FOP">Faculty of Pharmacy</option>
                                        <option value="VET">Faculty of Veterinary Medicine</option>
                                        <option value="LAW">Faculty of Law</option>
                                        <option value="COM">Faculty of Commerce</option>
                                        <option value="PHED">Faculty of Physical Education</option>
                                        <option value="FCH">Faculty of Childhood Education</option>
                                        <option value="EDU">Faculty of Education </option>
                                        <option value="FTH">Faculty of Tourism and Hotels</option>
                                        <option value="ESRI">Environmental Studies and Research Institute</option>
                                        <option value="GEPRI">Genetic Engineering and Biotechnology Research Institute</option>

                </select>
                <span class="error">* <?php echo $facultyErr;?></span>
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
                <span class="error">* <?php echo $scientific_degreeErr;?></span>
            </div>

            <div class="input-box">
            <label class="details">Gender</label>
                <select id="gender" name="gender">
                    <option value="" selected disabled hidden> Select</option>
                    <option value="male">Male </option>
                    <option value="female">Female</option>
                </select>
                <span class="error">*<?php echo $genderErr;?></span>
            </div>

            <div class="input-box">
                <label class="details">ID Number  </label>
                <input type="text" name="id_number" placeholder="Enter Your  ID number" >
                <span class="error">*<?php echo $id_numberErr;?></span>
            </div>

            <div class="input-box">
                <label class="details">Nationality </label>
                <input type="text" name="nationality" placeholder="Enter Your Nationality" >
                <span class="error">* <?php echo $nationalityErr;?></span>
            </div>

             <div class="input-box">
                <label class="details">Phone Number  </label>
                <input type="text" name="phone_number" placeholder="Enter Your number" >
                <span class="error">* <?php echo $phone_numberErr;?></span>
            </div>


            <div class="input-box">
                <label class="details">Password </label>
                <input type="password" name="password" placeholder="Enter Your password" >
                <span class="error">* <?php echo $passwordErr;?></span>
            </div>

         


            <div class="input-box">
                <label class="details"> Confirm Password </label>
                <input type="password" name="confirm_password" placeholder="Confirm your password" >
                <span class="error">* <?php echo $confirm_passwordErr;?></span>
            </div>
            
      
        
     <div class="input-box-image">
                <label class="details"> Add Image </label>
                <input type="file" name="image">
                <span class="error">*</span>
        </div>
      
        </div>
        <div class="button">
            <input type="submit" name="Register" value = "Register">
        </div> 
    </form>


</div>
</body>
</html>

<!-- 	<h1>Registration Form</h1>
	<form>
        <div class="container">
            <div class="title">Regist</div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
    
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
    
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
    
            
            <div class="gender_details"> 
                <span class="gender_detail">Gender</span>
                <div class="category">
                    <label for="">
                        <span class="dot one">
                            <span class="gender">Male</span>
                        </span>
                    </label>
                    <label for="">
                        <span class="dot one">
                            <span class="gender">Female</span>
                        </span>
                    </label>
                </div>
            </div>
    
            <input type="submit" value="Register">
        </form>

        </div>ner
		 -->

