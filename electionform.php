<!DOCTYPE html>
<html class="no-js">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>NSA ULM Officers Election 2019</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="election.css">
</head>

<body>
  <div class="container groove">
    <div class="text-center">
      <h1>NSA ULM Officers Application for year 2019-20</h1>
    </div>
    <div class="text-center">
      <img src="images/nsalogo.jpg" class="rounded" alt="nsalogo" height=200px width=200px>
    </div>
    <div class="text-center">
      <p>NSA ULM election for the year 2019-20 will take place on April 17, Wed and april 18, Thu. The election will
        start on April 17 at 8:00 am and end on April 18 at 11:59 pm. All candidates must show up on April 13, Sat 5-9
        pm for their election speech.
      </p>
    </div>

    <?php 
    if($_POST){
     $fname = $_POST['fname'];
     $mname = $_POST['mname'];
     $lname = $_POST['lname'];
     $name = $fname . ' ' . $mname . ' ' . $lname;
     $warhawksemail = $_POST['email'];
     $gmail = $_POST['gmail'];
     $cwid = $_POST['cwid'];
     $phone_number = $_POST['phoneNumber'];
     $address1 = $_POST['address1'];
     $address2 = $_POST['address2'];
     $city = $_POST['city'];
     $state = $_POST['state'];
     $zip = $_POST['zip'];
     $full_address = $address1 . ' ' . $address2 . ' ' . $city . ' '. $state . ' ' . $zip;
     $major = $_POST['major'];
     $classification = $_POST['classification'];
     $address1 = $_POST['membership'];
     $position_applied = $_POST['position'];
     
     $position="";
     if(empty($position_applied))
     {
         $performance="No option is selected";
     }
     else
     {
         for($i=0; $i<count($position_applied) ;$i++)
         {
             $position.=$position_applied[$i]."<br>";
             
         }
     }
     
     
     $reason = $_POST['reason'];
     $contribution = $_POST['contribution'];
     $change = $_POST['change'];
     $involvement = $_POST['involvement'];

     $commit = $_POST['commit'];

     $commit_nsa = "";

     if($commit == "yes")
     {
        $commit_nsa = "YES";
     }
    else if ($commit == "no")
    {
        $commit_nsa = "NO";
    }

    
$headers = "Content-Type: text/html; charset=ISO-8859-1\r\n";

$to = "contact@nsaulm.com";
$subject = "NSA Officers election application form for 2019-20";
$txt = "<em>Confirmation for NSA Officers election application form for 2019-20</em><hr><br><b> Name: </b>".$name."\n<br><b>Warhawks email:</b> ".$warhawksemail."\n<br><b>Gmail:</b> ".$gmail."\n<br><b>CWID:</b> ".$cwid.
"\n<br><b>Phone Number:</b> ".$phone_number."\n<br><b>Address:</b> ".$full_address."\n<br><b>Major: </b>".$major."\n<br><b>Classification:</b> ".$classification."\n<br><b>Membership started:</b> ".$membership."\n<br><br><b>Position applied: </b><br>" .$position.
"\n<b><br> Why did you apply for the position(s)?</b> <br>".$reason. "\n<b><br><br>What are the contributions that you have made being an NSA member?</b>".$contribution."\n<b><br><br>What are the changes that you plan to bring as a member of the Executive Council of NSA?</b><br> ".$change.
 "\n<b><br><br><b>List all your involvement at ULM and your High School(High School experiences for Freshmen only). </b>".$involvement. "\n<b><br>Are you willing to commit minimum of 6 hours per week for NSA?(Not including major events)</b>".$commit_nsa. ;
$headers.= "From: ".$email . "\r\n" ."CC:".$email;


mail($to,$subject,$txt,$headers);

?>
<div class = "text-center">
<p><h1>Your message has successfully been sent. Please check your email for confirmation.</h1></p>      
    </div>
<?php
}
else{
 
?>

    <form action="submitelection.php" method="POST">
      <div class="form-group row">
        <div class="col-md-4">
          <label for="firstName">First Name<span class="red">*</span></label>
          <input type="text" class="form-control" placeholder="First name" name="fname" required>
        </div>

        <div class="col-md-4">
          <label for="firstName">Middle Name</label>
          <input type="text" class="form-control" placeholder="Middle name" name="mname">
        </div>

        <div class="col-md-4">
          <label for="lastName">Last Name<span class="red">*</span></label>
          <input type="text" class="form-control" placeholder="Last name" name="lname" required>
        </div>
      </div>

      <!-- Email and Phone Number section        -->
      <div class="form-group row">
        <div class="col-md-6">
          <label for="inputEmail">Warhawk email<span class="red">*</span></label>
          <input type="email" class="form-control" id="inputEmail" placeholder="example@warhawks.ulm.edu" name="email"
            required>
        </div>

        <div class="col-md-6">
          <label for="inputEmail1">Gmail<span class="red">*</span></label>
          <input type="email" class="form-control" id="inputEmail1" placeholder="example@gmail.com" name="gmail"
            required>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-md-6">
          <label for="cwid">CWID<span class="red">*</span></label>
          <input type="text" pattern="[0-9]{8}" class="form-control" id="cwid" placeholder="3XXXXXXX" name="cwid"
            required>
        </div>

        <div class="col-md-6">
          <label for="phone">Phone Number<span class="red">*</span></label>
          <input type="tel" class="form-control" placeholder="XXX-XXX-XXXX" name="phoneNumber" required>

        </div>
      </div>


      <div class="form-group row">
        <div class="col-md-6">
          <label for="inputAddress">Address <span class="red">*</span></label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address1" required>
        </div>

        <div class="col-md-6">
          <label for="inputAddress2">Address 2 <span class="red">*</span></label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio,or floor"
            name="address2">
        </div>
      </div>


      <div class="form-group row">
        <div class="col-md-4">
          <label for="inputCity">City<span class="red">*</span></label>
          <input type="text" class="form-control" id="inputCity" name="city" placeholder="Enter your City" required>
        </div>
        <div class="col-md-4">
          <label for="inputState">State</label>
          <select id="inputState" class="form-control" name = "state">
            <option selected>Choose State</option>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
          </select>
        </div>
        <div class="col-md-4">
          <label for="inputZip">Zip<span class="red">*</span></label>
          <input type="text" class="form-control" id="inputZip" name="zip" placeholder="Enter ZIP code" required>
        </div>
      </div>


      <div class="form-group row">
        <div class="col-sm-1">
          <label for="majors">Majors<span class="red">*</span></label>
        </div>

        <div class="col-sm-3">
          <select class="custom-select" name="major">
            <option selected>Majors</option>
            <option value="1">Accounting</option>
            <option value="2">Agribusiness</option>
            <option value="3">Art</option>
            <option value="4">Atmospheric Science</option>
            <option value="5">Biology</option>
            <option value="6">Business</option>
            <option value="7">Communication</option>
            <option value="8">Computer Information Systems</option>
            <option value="9">Computer Science</option>
            <option value="10">Construction Management</option>
            <option value="11">Counseling</option>
            <option value="12">Criminal Justice</option>
            <option value="13">Dental Hygiene</option>
            <option value="14">Education: Curriculum and Instruction</option>
            <option value="15">Educational Leadership</option>
            <option value="16">English</option>
            <option value="17">Finance</option>
            <option value="18">General Studies</option>
            <option value="19">Gerontology</option>
            <option value="20">Health Studies</option>
            <option value="21">History</option>
            <option value="22">Kinesiology</option>
            <option value="23">Management</option>
            <option value="24">Marketing</option>
            <option value="25">Marriage & Family Therapy</option>
            <option value="26">Mathematics</option>
            <option value="27">Medical Laboratory Science</option>
            <option value="28">Music</option>
            <option value="29">Nursing</option>
            <option value="30">Occupational Therapy</option>
            <option value="31">Pharmacy</option>
            <option value="32">Political Science</option>
            <option value="33">Psychology</option>
            <option value="34">Radiologic Technology</option>
            <option value="35">Risk Management & Insurance</option>
            <option value="36">Social Work</option>
            <option value="37">Speech-Language Pathology</option>
            <option value="38">Toxicology</option>
            <option value="39">Unmanned Aircraft Systems Management</option>
            <option value="40">World Langauges: French</option>
            <option value="41">World Langauges: Spanish</option>

          </select>
        </div>

        <div class="col-sm-2">
          <label for="classification">Classification<span class="red">*</span></label>
        </div>

        <div class="col-sm-2">
          <select class="custom-select" name="classification">
            <option selected>Classification</option>
            <option value="1">Freshmen</option>
            <option value="2">Sophomore</option>
            <option value="3">Junior</option>
            <option value="4">Senior</option>
            <option value="5">Graduate</option>
            <option value="6">PhD</option>
          </select>
        </div>

        <div class="col-sm-1">
          <label for="memberSince">Member Since<span class="red">*</span></label>
        </div>

        <div class="col-sm-3">
          <select class="custom-select" name="membership">
            <option selected>Member Since</option>
            <option value="1">2014</option>
            <option value="2">2015</option>
            <option value="3">2016</option>
            <option value="4">2017</option>
            <option value="5">2018</option>
            <option value="6">2019</option>
          </select>
        </div>
      </div>


      <div class="form-group row">
        <div class="col-sm-3">Position applied for<span class="red">*</span></div>
        <div class="col-sm-9">
          <div class="form-check">
            <input class="form-check-input" value="President" type="checkbox" name='position[]' id="President">
            <label class="form-check-label" for="President">President</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" value="vpCampus" type="checkbox" name='position[]' id="vpCampus">
            <label class="form-check-label" for="vpCampus">Vice President: Campus Affairs</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" value="vpCulture" type="checkbox" name='position[]' id="vpCulture">
            <label class="form-check-label" for="vpCulture">Vice President: Cultural Affairs</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" value="Secretary" type="checkbox" name='position[]' id="Secretary">
            <label class="form-check-label" for="Secretary">Secretary</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" value="Treasurer" type="checkbox" name='position[]' id="Treasurer">
            <label class="form-check-label" for="Treasurer">Treasurer</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" value="actTreasurer" type="checkbox" name='position[]' id="actTreasurer">
            <label class="form-check-label" for="actTreasurer">Acting Treasurer</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" value="pro" type="checkbox" name='position[]' id="pro">
            <label class="form-check-label" for="pro">Public Relation Officer</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" value="webmaster" type="checkbox" name='position[]' id="gridCheck1">
            <label class="form-check-label" for="gridCheck4">Webmaster</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" value="creationExec" type="checkbox" name='position[]' id="creationExec">
            <label class="form-check-label" for="creationExec">Creation Executive</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" value="freshmen" type="checkbox" name='position[]' id="freshmen">
            <label class="form-check-label" for="freshmen">Freshmen Representative</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" value="sophomore" type="checkbox" name='position[]' id="sophomore">
            <label class="form-check-label" for="sophomore">Sophomore
              Representative
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" value="junior" type="checkbox" name='position[]' id="junior">
            <label class="form-check-label" for="junior">Junior Representative</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" value="senior" type="checkbox" name='position[]' id="senior">
            <label class="form-check-label" for="senior">Senior Representative</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" value="graduate" type="checkbox" name='position[]' id="graduate">
            <label class="form-check-label" for="graduate">Graduate/Post Graduate Chair</label>
          </div>
        </div>
      </div>


      <div class="form-group row">
        <div class="col-sm-3">Why did you apply for the position above?<span class="red">*</span> </div>
        <div class="col-sm-9">
            
          <textarea class="form-control" name="reason" rows="5" placeholder = "Please list all reasons" required></textarea> 
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-3">What are the contributions that you have made being an NSA member?<span
            class="red">*</span> </div>
        <div class="col-sm-9">
          <textarea class="form-control" name="contribution" rows="5" placeholder = "Please list all contributions" required></textarea>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-3">What are the changes that you plan to bring as a member of the Executive Council of
          NSA?<span class="red">*</span> </div>
        <div class="col-sm-9">
          <textarea class="form-control" name="change" rows="5" placeholder = "Please list all changes" required></textarea>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-3">List all your involvement at ULM and your High School(High School experiences for Freshmen
          only).<span class="red">*</span> </div>
        <div class="col-sm-9">
          <textarea class="form-control"  name="involvement" rows="5" placeholder = "Please list all involvements" required></textarea>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-3">Are you willing to commit minimum of 6 hours per week for NSA?(Not including major
          events)<span class="red">*</span></div>
        <div class="col-sm-9">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="commit" id="yes" value="yes" checked>
            <label class="form-check-label" for="yes">yes</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="commit" id="no" value="no">
            <label class="form-check-label" for="no">no</label>
          </div>
        </div>
      </div>

      <div class="form-group row">
        <label for="file">Please upload your class schedule, on and off campus work schedule.(include classes, on
          campus, off campus work hours as well as available hours in an EXCEL SHEET and upload)<span
            class="red">*</span></label>
        <input type="file" class="form-control-file" id="file1" name="file" required>
      </div>

      <div class="text-center">
        <img src="images/duty1.png" class="img-fluid" alt="duty1">
      </div>

      <div class="text-center">
        <img src="images/duty2.png" class="img-fluid" alt="duty2">
      </div>

      <div class="text-center">
        <img src="images/duty3.png" class="img-fluid" alt="duty3">
      </div>

      <div class="text-center">
        <img src="images/FreshElec.png" class="img-fluid" alt="freshmenElection">
      </div>
      <div class="form-group row"> 
          <div class="form-check">
              <input type="checkbox" class="form-check-input" id="agreement" name = "agreement" required>
              <label class="form-check-label" for="agreement">I have read and understood all above mentioned information and will serve under The Constitution of the University of Louisiana Monroe Nepalese Student Association if elected<span class="red">*</span></label>
            </div>
      </div>
      




      <button type="submit" class="btn btn-primary">Submit your application</button>
    </form>
    <?php
}
?>

  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>

  <script src="electionform.js" async defer></script>
</body>

</html>