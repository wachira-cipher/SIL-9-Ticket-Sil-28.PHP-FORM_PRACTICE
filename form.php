<!DOCTYPE HTML>
<html>
    <head>
        <style>
            .error{
                background-color: brown;
            }
        </style>
    
    </head>
        <body>
           <?php 
            //variables WITHOUT SETTING VALUES
            $NameErr=  $EmailErr= $PasswordErr= $GenderErr= $AgeErr= $SchoolErr="" ;
            $Name= $Email= $Password= $Gender= $Age= $School="";

            if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(empty($_POST["Name"])){
                   $NameErr = "Name is required";       
        
        }else{
        $name =form_input($_POST["Name"]);
        }
        if(!preg_match("/^[a-zA-Z-' ]*$/")){
                   $NameErr = "only letters and whitespaces allowed";
        }
        if(empty($_POST["Email"])){
            $EmailErr="Email required";
        
        }else {
            $Email=form_input($_Post["Email"]);
        }
        if(filter_var(Email,FILTER_VALIDATE_EMAIL)){
            $EmailErr="Invalid email format";
        }
        if(empty($_POST["Password"])){
                   $PasswordErr = "Password is required";
        }
        else{
                   $Password = form_input($_Post("Password"));
        }
    if(!preg_match("/^[a-zA-Z-' ]*$/")){
                   $PasswordErr = "password should have characters and numerals";
    }
    if(empty($_POST["Gender"])){
                   $GenderErr = "Gender required";
    }else{
                   $Gender = form_input($_POST["Name"]);
    }
    if(empty($_Post["Age"])){
                   $AgeErr = "Enter age 1 to 25yrs";
    }else{
                   $Age = form_input($_Post["Post"]);

    }
    if(empty($_POST["School"])){
                   $SchoolErr = "Select school";
    }else{
                   $School = form_input($_POST["School"]);
    }
    function form_input($data){
                   $data = trim($data);
                   $data = stripslashes($data);
                   $data = htmlspecialchars($data);
    }
    ?>
    
        
    
    <h2>PHP FORM</h2>
    <span class="error">*required feild</span>
    <form method="POST" action="<?php echo($_SERVER(PHP_SELF))?>">
Name:<input type="text" name="Name">
    <span class="error">*<?php echo $NameErr;?></span>
    <br><br>

    Email:<input type="email" name="Email">
           <span class="error">*<?php echo $EmailErr;?></span>
    <br><br>
    Password:<input type="password" name="Password">
            <span class="error">*<?php echo $PasswordErr?></span>
     <br><br>
     Gender:<input type="radio button" name="Gender">
            <span class="error">*<?php echo $GenderErr?></span>
     <br><br>

     <label for="age">Age</label>
     <select name="Age" id="Age">
     <option value="1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25"></option>
     </select>
<br><br>
     <label for="school">School</label>
    <select name="School" id="School">
    <option value="Kianyaga"></option>
    <br><br>
    <option value="Meru school"></option>
    <br><br>
    <option value="Kiamutugu"></option>
    <br><br>

    </select>
    </form>
   </body>
</html>