


<HTML LANG=en>
<HEAD>
<TITLE>SKILL DEVELOPMENT INSTITUTE KOCHI </TITLE>   
<META HTTP-EQUIV="Content-Type" CONTENT="text/html">
<META NAME="GENERATOR" CONTENT="ReadyGo WCB, V4.100800">
<META NAME="Author" CONTENT="ReadyGo WCB: 1-0-930">
<meta name="viewport" content="width=device-width, initial-scale=1" /> 

<link rel='stylesheet' href="./css/login_style.css">
<link rel='stylesheet' href="./css/login_bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script>
    $(document).ready(function(){
      $("form").submit(function(event){
        event.preventDefault(); // prevent the form from submitting normally
        var data = $(this).serialize(); // serialize the form data
        $.ajax({
          url: "spot_registration_action_new.php",
          type: "post",
          data: data,
          success: function(message){
            $("#thankYouMsg").show(); // display the thank you message
          }
        });
      });
    });
  </script>
  <script>
  select = document.getElementById('select'); // or in jQuery use: select = this;
if (select.value) {
  // value is set to a valid option, so submit form
  return true;
}
return false;
</script> 
<!-- <script language="JavaScript">
function validate(frm)
{
	if(frm.frm_username.value=="")
	{
		alert("Please enter User name.");
		frm.frm_username.focus();
		return false;
	}
	if(frm.frm_password.value=="")
	{
		alert("Please enter Password.");
		frm.frm_password.focus();
		return false;
	}	
}
</script> -->

 <!-- <script>
 $.ajax({
      type: "POST",
      url: $(this).attr("action"), 
                  data: $(this).serialize(),
      success: function(result){
      $('#contact_form').html('<div>Thank you!</div>');
    },
    error: function (error) {
      alert("There is a problem");
    }
  });
</script>  -->

  
<style>
/*	p { border: 1px solid black; }*/
  /*.bookform_div {
    border: 1px solid #c7c1c1;
    padding: 30px;
}*/
section.contact {
    max-width: 719px;
    text-align: center;
    margin: auto;
    padding: 30px 0px;
}
div#thankYouMsg {
    font-size: 18px;
    font-weight: 900;
    color: #357ebd;
}

.bookform_div {
    border: 1px solid #c7c1c1;
    /* padding: 30px; */
    width: 482px;
    /* margin: 58px auto; */
    /* box-shadow: 10px 10px 40px #efefef; */
    padding: 50px 34px;
/*    height: 96%;*/
    margin-left: 83px;
    border-color: #e2e2e2;
    margin-top: 41px;
    /* border-top: 5px solid #105a7a; */
}
.form-control {
    font-size: 1rem;
    line-height: 1.5;
    /* border: 1px solid #ccc; */
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}
.form-control input[type="text"] {
    width: 67%;
    height: 53px;
    border: 1px solid #E2E2E2;
    color: #8F8F8F;
    font-size: 15px;
    font-weight: 400;
    /*margin-bottom: 22px;
    padding: 25px 43px;*/
    border-radius: 3px;
    margin-left: 81px;
}
.form-control input#dob {
width: 67%;
    height: 53px;
    border: 1px solid #E2E2E2;
    color: #8F8F8F;
    font-size: 15px;
    font-weight: 400;
    /*margin-bottom: 22px;
    padding: 16px 25px;*/
    border-radius: 3px;
    margin-left: 23px;
}
.form-control input#email {
width: 68%;
    height: 53px;
    border: 1px solid #E2E2E2;
    color: #8F8F8F;
    font-size: 15px;
    font-weight: 400;
    /*margin-bottom: 22px;
    padding: 16px 25px;*/
    border-radius: 3px;
    margin-left: 80px;
}

.form-control input#mobile {
width: 68%;
    height: 53px;
    border: 1px solid #E2E2E2;
    color: #8F8F8F;
    font-size: 15px;
    font-weight: 400;
    /*margin-bottom: 22px;
    padding: 16px 25px;*/
    border-radius: 3px;
  }
.form-control select#qualification {
  width: 68%;
    height: 53px;
    border: 1px solid #E2E2E2;
    color: #8F8F8F;
    font-size: 17px;
    font-weight: 400;
    /*margin-bottom: 22px;
    padding: 16px 25px;*/
    border-radius: 3px;
    margin-left: 18px;
}
.form-control label{
  font-size:20px;
  color: black;
}
input.btn_submit {
    padding: 10px 30px;
    color: #fff;
    font-size: 17px;
/*    background-color: #363c93;*/
    text-align: center;
    width: 173px;
    height: 49px;
    border-radius: 6px;
    line-height: 28px;
    margin-top: 14px;
    border: none;
    margin: 0px auto;
    display: block;
    background-color: #298EAC !important;
    border-color: #357ebd;
}
/*h1.common_title_frm {
    color: #363c93;
    font-size: 23px;
    font-weight: 700;
}*/
/*.form-control label {
    padding-right: 42px;
}*/
select#select{
  width: 68%;
    height: 53px;
    border: 1px solid #E2E2E2;
    color: #8F8F8F;
    font-size: 15px;
    font-weight: 400;
    margin-bottom: 22px;
    padding: 16px 25px;
    border-radius: 3px;
    margin-left: 17px;
}
#title {
    color: #000000;
    font-size: 150%;
    font-style: italic;
    font-weight: bold;
    margin: 15px 0 0 15px;
    text-align: center;
}
h1.heading_div {
    font-size: 24px;
    font-weight: bold;
/*    font-style: italic;*/
}
@media screen and (min-width:340px) and (max-width:767px){
  .bookform_div {
    border: 1px solid #c7c1c1;
    width: 275px;
    padding: 50px 34px;
    border-color: #e2e2e2;
    margin-top: 41px;  
    margin-left: 0px;
}
.form-control input[type="text"] {
    width: 103%;
    height: 53px;
    border: 1px solid #E2E2E2;
    color: #8F8F8F;
    font-size: 15px;
    font-weight: 400;
    /* border-radius: 3px; */
    /* margin-left: 81px; */
    margin-left: 0px;
}
.form-control input#dob {
    width: 102%;
    height: 53px;
    border: 1px solid #E2E2E2;
    color: #8F8F8F;
    font-size: 15px;
    font-weight: 400;
    border-radius: 3px;
    /* margin-left: 23px; */
    margin-left: 0px;
}
.form-control input#email {
    width: 103%;
    height: 53px;
    border: 1px solid #E2E2E2;
    color: #8F8F8F;
    font-size: 15px;
    font-weight: 400;
    border-radius: 3px;
    /* margin-left: 80px; */
    margin-left: 0px;
}
.form-control input#mobile {
    width: 103%;
    height: 53px;
    border: 1px solid #E2E2E2;
    color: #8F8F8F;
    font-size: 15px;
    font-weight: 400;
    border-radius: 3px;
}
.form-control select#qualification {
    width: 103%;
    height: 53px;
    border: 1px solid #E2E2E2;
    color: #8F8F8F;
    font-size: 17px;
    font-weight: 400;
    border-radius: 3px;
    /* margin-left: 18px; */
    margin-left: 0px;
}
}

</style>
</HEAD>

<section class="contact">
 <div class="img_div">
             <img class="img-responsive;" src="./images/logo.jpg" >
           
            </div>
           <h1 class="heading_div">SKILL DEVELOPMENT INSTITUTE - SPOT REGISTRATION</h1>
    <div class="container">
      <div class="row">
        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12"> 
         <div class="bookform_div">
           <!-- <form class="cnt_frm"> -->
           
            <!-- <div class="title_div">
        
            <h5>SKILL DEVELOPMENT INSTITUTE - KOCHI</h5>
           
            </div> -->
               <form method="post" action="spot_registration_action_new.php" class="form-control" style="
    text-align: initial;" id="myForm">
    <label for="name">Name:</label>
    <input type="text" name="name" class="form-control" id="name" required><br><br>
    
    <label for="dob">Date of Birth:</label>
    <input type="date" name="dob" class="form-control" id="dob" required><br><br>
     
      <label for="email">Email:</label>
    <input type="text" name="email" class="form-control" id="email" required><br><br>  
<!-- <label for="email">Email:</label>
    <input type="text" id="email" name="email">
    <?php if (in_array("Invalid email format", $errors)): ?>
      <p style="color: red;">Invalid email format</p>
    <?php endif; ?> -->

    <label for="mobile">Mobile Number:</label>
    <input type="tel" name="mobile" class="form-control" id="mobile" pattern="[0-9]{10}" required><br><br>
    
    <label for="qualification">Qualification:</label>
    <!-- <select id="select" required="required" class="form-control"> -->
     <select name="qualification" class="form-control" id="qualification" required> 
      <option value="">--Select--</option>
      <option value="ITI">ITI</option>
      <option value="PLUS TWO">PLUS TWO</option>
      <option value="VHSC">VHSC</option>
      <option value="DIPLOMA">DIPLOMA</option>
    </select><br><br>
    
    <input type="submit" name="submit" class="btn_submit" value="submit">
  </form>
                          <!-- </form>        -->
                          <div id="thankYouMsg" style="display: none;">
  <p>Thank you for submitting the form!</p>
</div> 
         </div> 
    </div>
                 
         </div>
      </div>
  </section>







	</div>
	</FONT>
</DIV ID="pagediv">
</DIV ID="outer1">
	<br>
	<table cellspacing="0" border="0" width="100%" class="main" align="center">
		<tr>
		<td align="center" bgcolor="White" style="text-align:center;">		
			<DIV ID="copyright" style="margin:0px 0px 0px 0px; display:none;">
				<FONT FACE="Tahoma"><SPAN ID="coursename" >Skill Development Society (SDS) Kochi. </SPAN>Powered by www.sdskochi.com  All rights reserved.</FONT><br>
			</DIV>
			
			<DIV ID="footer">
			<font size="2" face="Arial, Helvetica, sans-serif">
				<!--
				Skill Development Society(SDS) Kochi  is not affiliated with the DMV, and the department shall not be responsible for distributed materials, advertisements,etc.<br> <a href="https://www.dmv.ca.gov/portal/dmv/?1dmy&urile=wcm:path:/dmv_content_en/dmv/about/lad/lenodisc" target="_blank">Click here to read the DMV Disclaimer </a>&nbsp; (Adobe Acrobat Reader Required)
				-->
				&copy;2023 All Rights Reserved Skill Development Society(SDS) Kochi. Powered by <a href="http://www.tauruswebsolutions.com/" target="_blank">TaurusWebSolutions</a>.
			</font>
			</DIV>
		</td>
		</tr>
	</table>	
	<br>
</body>
</html>