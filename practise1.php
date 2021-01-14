<!doctype html>
 <html>
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewreport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Aspire Grammar School</title>
        <link rel="stylesheet" href="practise1.css" type="text/css"/>
        <title>School Registration</title>
    </head>
    <body>
        <section id="sec">
            <img src="AGS_LOGO HD.jpg" alt="logo"/>
            <br/> <br/> <br/> 
            <h1>Play Group to Class - III </h1>
            <p id="txt">(*) Fields are Required</p>
            <div class="form-progress">
                <table border="0" width="700px">
                    <tr>
                       <td onclick="document.getElementById('sec').style.height='836px';">
                            <div id="form-progress-nav" class="step" onclick="currentSlide(1)">                <!-- 1 -->
                                <span id="form-progress-btn" style="color: white;"> 1 
                                    <button> Information</button>
                                </span>
                            </div>
                        </td>
                    <td onclick="document.getElementById('sec').style.height='760px';"> 
                        <div id="form-progress-nav"  class="step" onclick="currentSlide()">                <!-- 2 -->
                            <span id="form-progress-btn" style="color: white;"> 2  
                                <button>Registration</button>
                            </span>
                        </div>
                    </td>
                <td onclick="document.getElementById('sec').style.height='1300px';">
                    <div id="form-progress-nav"  class="step" onclick="currentSlide(3)" >                <!-- 3 -->
                        <span id="form-progress-btn" style="color: white;"> 3 
                                <button>Student Info</button>
                            </span>
                        </div>
                    </td>
                <td onclick="document.getElementById('sec').style.height='1060px';">
                   <div id="form-progress-nav"  class="step" onclick="currentSlide(4)">                <!-- 4 -->
                        <span id="form-progress-btn" style="color: white;"> 4 
                            <button>Family Info</button>
                        </span>
                    </div>
                </td>
            </tr>
    </table>
</div>

<form id="regForm" method="POST" action="practise3.php" enctype="multipart/form-data">

  <div class="tab">
  Aspire Grammar School, Bahadurabad Campus is pleased to announce the initiation of Online Registration, processing for Admission 2020.
         During the ongoing lockdown, parents seeking admission at AGS are welcome to apply and the admission process will be conducted as per parental convenience.
         <h4>Registration</h4>
         Fill out the online registration form below. Please ensure you have provided complete
              details, including your Whatsapp numbers to receive all information.
              <p>Field marked with an asterisk (*) are required for the form to be submitted. </p>
            
              <input type ="button" value="Next" onclick="nextPrev(1)"/>&nbsp;
              <div class="numbertext">1/ 4
                </div>

  </div>
  
  <div class="tab">
    Admissions in * 
    <br>
    <input type="radio" name="admission" value="Physical School Admission"/>

    Physical School Admission 

    <br> 
	
    <br>
    How did you get to know about AGS?
    <br>
    <input type="radio" name="gener" value = "Facebook Page" tabindex=""/>Facebook Page 
     <p><input type="radio" name="gener" value="Instagram" tabindex=""/>Instagram</p>
     <p><input type="radio" name="gener" value="AGS VirtuliaGroup" tabindex=""/>AGS VirtuliaGroup</p>
     <p><input type="radio" name="gener" value="Family Member or Friend" tabindex=""/>Family Member or Friend</p>
     <p><input type="text" name="gener2" placeholder="Other"/></p>
     <br>
     <input type ="button" value="Back"   onclick="nextPrev(-1)"/> &nbsp;
     <input type ="button" value="Next"  name="Next" onclick="nextPrev(1),document.getElementById('sec').style.height='1300px'" />  

    <div class="numbertext">2/ 4
    </div>
   </div> 
<!-- <input type="submit" value="Submit" name="submit"/>
  -->
  

  
  <div class="tab">
    <label for="Stdname" >Student Name (as on Birth Certificate)*</label>
    <br>
    <input type="text" id="name" name="stdname"/>
    <br>
    <br>
   <label for="gender" >Gender *</label>
    <br>
    <br>
    <input type="radio" name="gender" value = "Boy"/><label >Boy</label>
    <br>
    <br>
    <input type="radio" name="gender" value = "Girl"/><label > Girl</label>
    <br>
    <br>
    <label for="grade"> Grade Applying</label>
    <br>
    <br>
    <select name="class">
        <option>-- Select 1 --</option>
        <option>Play Group</option>
        <option>Nursery</option>
        <option>Kindergarten</option>
        <option>Grade - I </option>
        <option>Grade - II</option>
        <option>Grade - III</option>
    </select>
    <br>
    <br>
    <label for="dob">Date of Birth (as on Birth Certificate)</label>
    <br>
    <input type="date" name="date"/>
    <br> 
    <br>
    <label for="address">Address</label> 
    <br>
    <input type="text" name="addr" placeholder="Address Line 1"/>
    <br>
    <br>
    <input type="text" name="city" placeholder="City"/>
    <br>
    <br>
    <select name="countries">
    <option>-- Select Country --</option>
      <?php  
       include 'countries.php';
      foreach($countries as $key => $value) { ?>
      <option value= "<?= htmlspecialchars($value); ?>" title="  "><?= htmlspecialchars($value) ; ?></option >
      <?php }
      ?>

    </select>
    <br>
    <br>
    <label for="photo">Student Photograph</label>
    <br>
    <br>
    <input type="file" value="Upload" name="image1"/> &nbsp; or drag files here.
    <br>
    <br>
    <label for="Nadra">NADRA Form. B</label>
    <br>
    <br>
    <input type="file" value="Upload" name="image2"/> &nbsp; or drag files here.
    <br>
    <br>
    <label for="progress report">Last Progress Report</label>
    <br>
    <br>
    <input type="file" value="Upload" name="image3"/> &nbsp; or drag files here.
    <br>
    <br> 
    Important: Please note that you will be required to submit all the 
    above mentioned documents to completed admission requirement.
    If you have not been able to upload them at this stage for any reason,
    email at <a>pr.bahadurabad@aspiregrammarschool.com.pk</a> for 
    completing the process.
    <br>
    <br>
    <input type ="button" value="Back"  onclick="nextPrev(-1),document.getElementById('sec').style.height='760px'" />  
    &nbsp;
    <input type ="button" value="Next" name="Next" onclick="nextPrev(1),document.getElementById('sec').style.height='1100px'" />  

 <div class="numbertext">3/ 4
 </div>
  </div>
  
  <div class="tab">
    Information mentioned in this section will be entirely confidential and 
    retained by school
    <br>
    <br>
    <label for="applicant">Applicant Name *</label>
    <br>
    <input type="text" name="app" />
    <br>
    <br>
    <label for="relationship">Relatonship with Student *</label>
    <br>
    <input type="text" name="relation" />
    <br>
    <br>
    <label for="CNIC#">CNIC#</label>
    <br>
    <input type="text" pattern="[0-9]{5}[-]{1}[0-9]{7}[-]{1}[0-9]{1}" name="cnic" placeholder="42401-1234567-1" />
    <br>
    <br>
    <label for="mobile">Mobile Number *</label>
    <br>
    <input type="text" name="phone"  pattern="[0-9]{4}[-]{1}[0-9]{7}"  placeholder="0314-1234567"/>
    <br>
    <br>
    <label for="whatsapp">Whatsapp Number *</label>
    <br>
    <input type="text" name="wanum" pattern="[+]{1}[0-9]{2}[0-9]{3}[-]{1}[0-9]{7}"  placeholder="+92 314-1234567" />
    <br>
    <br>
    <label for="email">Email ID (perferrably Gmail) *</label>
    <br>
    <input type="email" name="email" />
    <br>
    <br>
    <label for="singup">Sign me up for Campus tour.</label>
    <br>
    <br>
    <input type="radio" name="signup" value="Yes" />YES
    <br>
    <br>
    <input type="radio" name="signup" value="No" />NO
    <br>
    <br>
    <input type="button" value="Back" onclick="nextPrev(-1),document.getElementById('sec').style.height='1300px'"/>
        <!-- <input type="hidden" name="form_submitted" value="1" /> -->

  <input type="submit" value="Submit" name="submit"/>
  </form>
   
     <div class="numbertext">4 / 4
     </div>
    </div>
  </form>
</section>
</body>
 <script>
   var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
   x[n].style.display = "block";
 // ... and fix the Previous/Next buttons:
  // if (n == 0) {
  //   document.getElementById("prevBtn").style.display = "";
  // } else {
  //   document.getElementById("prevBtn").style.display = "inline";
  // }
  // if (n == (x.length - 1)) {
  //   document.getElementById("nextBtn").innerHTML = "Submit";
  // } else {
  //   document.getElementById("nextBtn").innerHTML = "Next";
  // }
  // and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false:
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}


</script>
</html>