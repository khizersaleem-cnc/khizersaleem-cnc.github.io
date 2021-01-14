<?php

if(isset($_POST['submit']))
{

$admission = $_POST['admission'];
echo "Admission in : $admission <br>";

$radioVal = $_POST['gener'];
echo "I got to know about AGS from: $radioVal <br>";

$name = $_POST['stdname'];
echo "Student Name: $name <br>"; 

$gender = $_POST['gender'];
echo "Gender: $gender <br>";

$class = $_POST['class'];
echo "Student Class: $class <br>";
  
$new_date = date('Y-m-d', strtotime($_POST['date']));
echo "Date: $new_date <br>";

$address = $_POST['addr'];
echo "Address: $address <br>";

$city =$_POST['city'];
echo "City: $city <br>";
  
$country =$_POST['countries'];
echo "Country: $country <br>";

$target1 = "imagefolder/" .basename($_FILES['image1']['name']);
$target2 = "imagefolder/" .basename($_FILES['image2']['name']);
$target3 = "imagefolder/" .basename($_FILES['image3']['name']);

$imagevar1 = $_FILES['image1']['name'];
$imagevar2 = $_FILES['image2']['name'];
$imagevar3 = $_FILES['image3']['name'];

move_uploaded_file($_FILES['image1']['tmp_name'], "imagefolder/ $imagevar1"); 
move_uploaded_file($_FILES['image2']['tmp_name'], "imagefolder/ $imagevar2"); 
move_uploaded_file($_FILES['image3']['tmp_name'], "imagefolder/ $imagevar3");

echo "Student Photograph: uploaded into $target1 <br>";
echo "NADRA Form. B: uploaded into $target2 <br>";
echo "Last Progress Report: uploaded into $target3 <br>";
    
$app = $_POST['app'];
echo "Applicant's Name: $app <br>"; 

$rel = $_POST['relation'];
echo "Relationship with Student : $rel <br>"; 

$cnic = $_POST['cnic'];
echo "CNIC Number : $cnic <br>"; 

$phone = $_POST['phone'];
echo "Mobile Number  : $phone <br>"; 

$wanum = $_POST['wanum'];
echo "WhatsApp Number: $wanum <br>"; 

$email =($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}
else{
  echo "Email: $email <br>";
}

$signup = $_POST['signup'];
echo "Signup:  $signup <br>";

}
?>  

<br><br>
<form action="pdf.php" method="post">

        <input type="hidden" name="admission" value="<?php echo $admission;  ?>">
        <input type="hidden" name="gener" value="<?php echo $radioVal;  ?>">
        <input type="hidden" name="stdname" value="<?php echo $name; ?>">
        <input type="hidden" name="gender" value="<?php echo $gender; ?>">
        <input type="hidden" name="class" value="<?php echo $class; ?>">
        <input type="hidden" name="date" value="<?php echo $new_date; ?>">
        <input type="hidden" name="addr" value="<?php echo $address; ?>">
        <input type="hidden" name="city" value="<?php echo $city; ?>">
        <input type="hidden" name="countries" value="<?php echo $country; ?>">
        <input type="hidden" name="app" value="<?php echo $app; ?>">
        <input type="hidden" name="relation" value="<?php echo $rel; ?>">
        <input type="hidden" name="cnic" value="<?php echo $cnic; ?>">
        <input type="hidden" name="phone" value="<?php echo $phone; ?>">
        <input type="hidden" name="wanum" value="<?php echo $wanum; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">
        <input type="hidden" name="signup" value="<?php echo $signup; ?>">


        <input type="submit" name="submit" value="Generate PDF">

    </form>
   
