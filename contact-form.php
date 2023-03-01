<html>
<head>
	<title>Contact us</title>
<!-- define some style elements-->
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="mystyle.css" rel="stylesheet">
<style>
h1
{
	font-family : Arial, Helvetica, sans-serif;
	font-size : 16px;
    font-weight : bold;
}
label,a 
{
	font-family : Arial, Helvetica, sans-serif;
	font-size : 12px; 
}
.required:after 
{
	content:"*";
	color:red;
}
</style>	
<script>
function validateForm() {
  var name = document.forms["contactform"]["name"].value;
  var email = document.forms["contactform"]["email"].value;
  var message = document.forms["contactform"]["message"].value;
  if (name == "") {
    document.getElementById("name_required").innerHTML = "This field is required";
    return false;
  }
  if (email == "") {
    document.getElementById("email_required").innerHTML = "This field is required";
    return false;
  }
  if (message == "") {
    document.getElementById("message_required").innerHTML = "This field is required";
    return false;
  }
}
</script>		
</head>
<body>
<!-- nav bar file -->
	<?php include('nav.php'); ?>
<h1>Contact us</h1>
<form method="POST" name="contactform" action="contact-form-handler.php" onsubmit="return validateForm()">
        <p>
            <label for='name'>Your Name:</label><span class="required" id="name_required"></span><br>
            <input type="text" name="name" required>
        </p>
        <p>
            <label for='email'>Email Address:</label><span class="required" id="email_required"></span><br>
            <input type="email" name="email" required><br>
        </p>
		<p>
            <label for='message'>Message:</label><span class="required" id="message_required"></span><br>
            <textarea name="message" required></textarea>
        </p>
        <p>
            <label for='phone'>Phone:</label><span class="required" id="phone_required"></span><br>
            <input type="tel" name="phone" required pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890"><br>
            <small>Format: 123-456-7890</small>
        </p>
        <p>
            <label for='subject'>Subject:</label><span class="required" id="subject_required"></span><br>
            <input type="text" name="subject" required><br>
        </p>
        <p>
            <label for='category'>Category:</label><span class="required" id="category_required"></span><br>
            <select name="category" required>
                <option value="" selected disabled>Please select a category</option>
                <option value="General Inquiry">General Inquiry</option>
                <option value="Product Support">Product Support</option>
                <option value="Sales">Sales</option>
            </select>
        </p>
        <p>
            <label for='newsletter'>Subscribe to Newsletter:</label>
            <input type="checkbox" name="newsletter" value="yes">
        </p>
		<p>
            <label for='subject'>Company:</label><span class="required" id="company_required"></span><br>
            <input type="text" name="company" required><br>
        </p>
		<p>
            <label for='subject'>Department:</label><span class="required" id="department_required"></span><br>
            <input type="text" name="department" required><br>
        </p>
		<p>
            <label for='subject'>Country:</label><span class="required" id="country_required"></span><br>
            <input type="text" name="country" required><br>
        </p>
		<p>
            <label for='subject'>City:</label><span class="required" id="city_required"></span><br>
            <input type="text" name="city" required><br>
        </p>
        <input type="submit" value="Submit"><br>
    </form>

<script language="JavaScript">
var frmvalidator = new Validator("contactform");
    frmvalidator.addValidation("name", "req", "Please provide your name");
    frmvalidator.addValidation("email", "req", "Please provide your email");
    frmvalidator.addValidation("email", "email", "Please enter a valid email address");
    frmvalidator.addValidation("phone", "regexp=^[0-9]{3}-[0-9]{3}-[0-9]{4}$", "Please enter a valid phone number");
    frmvalidator.addValidation("subject", "req", "Please provide a subject");
    frmvalidator.addValidation("message", "req", "Please provide a message");
    frmvalidator.addValidation("category", "dontselect=Please select a category", "Please select a category");
	frmvalidator.addValidation("company", "req", "Please provide your company");
	frmvalidator.addValidation("department", "req", "Please provide your department");
	frmvalidator.addValidation("country", "req", "Please provide your country");
	frmvalidator.addValidation("city", "req", "Please provide your city");
</script>

</body>
</html>