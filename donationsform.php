<!--
Comp420
Created by Giovanni Toledo
This script creats a form that will upload data into a database table.
Things to do: Implement a way to save donated items into a seperate table that summarizes all the donation items available. 
The user will be able to get an accurate report of all items used and all items available.
-->
<?php

/*Template Name:DonationsForm */

get_header();

?>
<body>
<HTML>
<style>
	h2 {font-weight: bold; text-align: center;}
	h3 {font-weight: bold; width: 21%;}
	.donationTop {  margin: auto; border-radius: 25px; border: 2px outset black; text-align: center; width: 50%; padding: 70px;}
	.donationBottom {  margin: auto; border-radius: 25px; border: 2px outset black; width: 50%;   padding: 70px; }
	.donationList {margin: auto; width: 80%;}
	.submitButton {display: flex; justify-content: center; align-items: center;}
	
	
	input::placeholder {color: #1c87c9; opacity: 0.3;}
	 
</style>
<!-- CSS Layout - horizontal and vertical align at https://www.w3schools.com/css/css_align.asp, padding https://www.w3schools.com/css/css_padding.asp-->
<div class="donationTop">
<p style="text-align: center; max-width: 600px;  margin: auto; font-size: 20px;" align="center" > 
  Donations to Starting Point are tax deductible. Our nonprofit EIN number is 82-2055439.
</p>
<br>
<p style="text-align: center; max-width: 600px; margin-left: 300px; font-size: 20px;" align="center" > 
  <h2>Two Ways To Give:</h2>
</p>
<h3>Monetary Donation</h3>
<p>
Monetary donations support our community programs and projects as well 
as enable us to purchase other immediate necessities for children and their families.  Click to be linked to Kindful:
</P>
<br>
<input type="submit" name="Donate" value="Donate" onclick="donation()"/>
</div>
<br>
<br>
<div class="donationBottom">
<form action="" method="post" id="donationsform" onsubmit="">

<h3>Item Donation</h3>
<p>Show some love to young newcomers through a donation. We are in need of</p>
<div class="donationList">
 <ul>
  <li>socks (new only)</li>
  <li>children's shoes (new only)</li>
  <li>$20 Walmart gift cards for clothing</li>
</ul> 
</div>

<p>Please complete the following form, and we will contact you soon!</p>

<label>First Name:</label><input type="text" name="firstnametextbox" placeholder="John" size="30"/>

<label>Last Name:</label><input type="text" name="lastnametextbox" placeholder="Smith" size="30"/>

<label>Email:</label><input type="text" name="emailtextbox" placeholder="johnsmith@gmail.com" size="30"/>

<label>Phone:</label><input type="text" name="phonetextbox" size="30" placeholder="123-345-6789" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"/>

<label>Address</label><input type="text" name="addresstextbox" size="30"/>
<!-- https://www.w3schools.com/tags/att_input_placeholder.asp -->
<label for="items">Choose an Item:</label>
<select name="itemdropbox" id="itemdropbox">
<option value="sock">Sock</option>
<option value="shirt">Shirt</option>
<option value="giftcard">Giftcard</option>
</select>


<label for="gender">Choose a Gender:</label>
<select name="genderdropbox" id="genderdropbox">
<option value="male">Male</option>
<option value="female">Female</option>
<option value="unisex">Unisex</option>
<option value="giftcard">Giftcard</option>
</select>
<label>Item Details</label><input type="text" name="detailstextbox" size="30" placeholder="Please enter giftcard information or item size."/>

<br>
<div  class="submitButton"> <input type="submit" name="Submit" value="SUBMIT"/> </div>

</form></div>
</body>
</HTML>

<script type="text/javascript">

function donation() {
	window.open("https://startingpointworld.kindful.com/")
}

function validation()
{
	var errormessage="";
	
	if(document.forms["donationsform"]["nametextbox"].value=="")
	{
		errormessage+="Missing name\n";
		document.forms["donationsform"]["nametextbox"].style.borderColor="red";
	}
	else
	{
		document.forms["donationsform"]["nametextbox"].style.borderColor="black";
	}
	
	
	if(document.forms["donationsform"]["emailtextbox"].value=="")
	{
		errormessage+="Missing email\n";
		document.forms["donationsform"]["emailtextbox"].style.borderColor="red";
	}
	else
	{
		document.forms["donationsform"]["emailtextbox"].style.borderColor="black";
	}
	
	
	if(document.forms["donationsform"]["phonetextbox"].value=="")
	{
		errormessage+="Missing phone\n";
		document.forms["donationsform"]["phonetextbox"].style.borderColor="red";
	}
	else
	{
		document.forms["donationsform"]["phonetextbox"].style.borderColor="black";
	}
	
	if(document.forms["donationsform"]["addresstextbox"].value=="")
	{
		errormessage+="Missing address\n";
		document.forms["donationsform"]["addresstextbox"].style.borderColor="red";
	}
	else
	{
		document.forms["donationsform"]["addresstextbox"].style.borderColor="black";
	}
	
	if(document.forms["donationsform"]["itemgendertextbox"].value=="")
	{
		errormessage+="Missing item gender\n";
		document.forms["donationsform"]["itemgendertextbox"].style.borderColor="red";
	}
	else
	{
		document.forms["donationsform"]["itemgendertextbox"].style.borderColor="black";
	}
	
	if(document.forms["donationsform"]["itemsizetextbox"].value=="")
	{
		errormessage+="Missing item size\n";
		document.forms["donationsform"]["itemsizetextbox"].style.borderColor="red";
	}
	else
	{
		document.forms["donationsform"]["itemsizetextbox"].style.borderColor="black";
	}
	
	if(!parseInt(document.forms["donationsform"]["nametextbox"].value))
	{
		errormessage+="Enter a name\n";
	}
	
	if(!parseInt(document.forms["donationsform"]["emailtextbox"].value))
	{
		errormessage+="Enter a email\n";
	}
	
	if(!parseInt(document.forms["donationsform"]["phonetextbox"].value))
	{
		errormessage+="Enter a number a phone number\n";
	}
	
	if(!parseInt(document.forms["donationsform"]["addresstextbox"].value))
	{
		errormessage+="Enter a address\n";
	}
	
	if(!parseInt(document.forms["donationsform"]["itemgendertextbox"].value))
	{
		errormessage+="Enter gender\n";
	}
	
	if(!parseInt(document.forms["donationsform"]["itemsizetextbox"].value))
	{
		errormessage+="Enter the size of the item\n";
	}
	
	if(errormessage!="")
	{
		alert(errormessage);
		return false;
	}
}

</script>

<?php

if(isset($_POST['Submit']))
{

/* $ sign represents a varaiable. We do not need to specify data types when creating variables in php */
	$wpdb;
	$firstname=$_POST['firstnametextbox'];
	$lastname=$_POST['lastnametextbox'];
	$email=$_POST['emailtextbox'];
	$phone=$_POST['phonetextbox'];
	$address=$_POST['addresstextbox'];
	$item=$_POST['itemdropbox'];
	$gender=$_POST['genderdropbox'];
	$details=$_POST['detailstextbox'];
if($wpdb->insert('donor',array('firstname'=>$firstname,'lastname'=>$lastname,
'email'=>$email,'phone'=>$phone,'address'=>$address, 'item'=>$item, 'gender'=>$gender, 'itemdetails'=>$details))==false)wp_die('Database Insertion Failed On Donor');

	
else
/* Echo means we print something on the screen. Similar to print commamnd in java */
	//$newitemid=$wpdb->get_var("SELECT max(donorid) from donor");
	//if($wpdb->insert('item', array('item'=>$item,'gender'=>$gender, 'details'=>$details))==false)wp_die('Database Insertion Failed On Item');
	
echo '<p align=center><br><br> Database Insertion Succesful</p>'; 

}
get_footer();
?>