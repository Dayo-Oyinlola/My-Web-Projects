<?php
$mytitle = "Home| Royal Weddings";
include_once("header.php");
?>
 
	<form name="registration" id="registration" action="#" method="post">
	<label>Surname:</label><br>
		<input type="text" id="surname" name="surname"><br>
	First name:<br>
		<input type="text" id="firstname" name="firstname"><br>
	Middle name:<br>
		<input type="text" id="middlename" name="middlename"><br>
	Email:<br>
		<input type="email" id= "email"  name="email" placeholder="abc@gmail.com" autocomplete="Yes"><br>
	Password:<br>
		<input type="password" id = "pass" placeholder="*******"><br>
  Confirm Password:<br>
    <input type="password" id = "passe" placeholder="*******"><br>
  Sex:<br>
  <input type="radio"  name="sex" value="Male">Male
  <input type="radio" name="sex" value="Male">Female<br>
  Hobbies:<br>
 <input type="checkbox" name="hobbies" value="Bike">Sleeping<br>
  <input type="checkbox" name="hobbies" value="Bike">Eating<br>
   <input type="checkbox" name="hobbies" value="Bike">Dancing<br>
    <input type="checkbox" name="hobbies" value="Bike">Playing<br>
     <input type="checkbox" name="hobbies" value="Bike">Walking<br>
      <input type="checkbox" name="hobbies" value="Bike">Praying<br>
       <input type="checkbox" name="hobbies" value="Bike">Singing<br>
       State of Origin:
       <select id="state">

  <option value="0"></option>
  <option value="1">Osun</option>
  <option value="2">Ogun</option>
  <option value="3">Bauchi</option>
  <option value="4">Lagos</option>
  <option value="5">Oyo</option>
</select>


		<input type="submit" value="Submit" onClick=" return validatemyform()">


	</form>

</body>
