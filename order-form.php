<!--Website v. PROTOTYPE 0.1-->
<!--Form version PROTOTYPE 0.1-->
 <!DOCTYPE html>
 <html>
 <head>
<title>Order | Briarwood Croft</title>
<meta charset="utf-8"/>
<meta name="description" content="All animals at Briarwood Croft are fed organic, non-GMO grain, pastured on organic, non-GMO grasses, and are watered with fresh-well water."/>
<meta name="keywords" content="Briarwood, Croft, animals, organic, non-GMO, farm, fresh-well water"/>
<link type="text/css" rel="stylesheet" href="croft.css"/>
<!--<script src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
<script type="text/javascript" src="croft.jquery.js"></script>-->
<style type="text/css">
#questions {
width:45em;
}
form {
border:1px solid black;
background-color:#66FF33;
padding:1em;
}
#order_statement {
float:right;
margin-top:-17em;
border:1px solid black;
padding:1em;
background-color:green;
}
</style>
<style type="text/css">
form {
text-align:center;
}
.radioLabel:hover {
cursor:pointer;
}
</style>
</head>
<body>
<h1 id="croft">Briarwood Croft</h1>
<div id="imgs">
<!--Static farm images; non-permanent-->
<img id="home_picture" src="http://cdn.phillymag.com/wp-content/uploads/2012/08/farm1.jpg"/>
</div>
<div id="order_statement">
<!--<h3><a href="file:///C:/Users/Kris/Documents/Evan's%20School/home.html">Back to homepage</a></h3>-->
<h1>Order animal(s)</h1>
<h1>Request Information</h1>
</div>
<h3 id="form_statement">Please fill out the form below.  Areas marked with * are necessary.</h3>
<p class="divider">--------------------------------------------------</p>
<!--Begin form-->
<form id="order_form" method="post">
<h3>Order form (will be sent to <a href="mailto:briarwoodcroft@gmail.com">briarwoodcroft@gmail.com</a>)</h3>
<div id="form_input">
<div id="names">
<label for="firstName">First Name:</label>
<input type="text" id="firstName" name="firstName" required="required">
<label for="lastName">Last Name:</label>
<input type="text" id="lastName" name="firstName" required="required">
</div>
<br>
<div id="location">
<label for="address">Address:</label>
<input type="text" id="address">
</label for="city">City:
<input type="text" id="city">
<label for="state">State:</label>
<select name="state" id="state">
  <option value="state" selected>--Select a State--</option>
  <option value="PA">PA</option>
  <option value="NJ">NJ</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
</select>
<label for="zcode">ZIP Code:</label>
<input type="text" name="zcode" id="zcode">
</div>
<br>
<br>
<div id="other">
<label for="phoneNumber">Phone Number:</label>
<input type="text" id="phoneNumber">
<label for="email">Email Address</label>
<input type="text" id="email">
</div>
<br>
<div id="cRequest">
<label>I would like to order:  </label>
<br>
<div id="requestedProduct">
<br>
<input type="checkbox" name="product" id="eggs" value="Eggs">
<label for="eggs">Eggs</label>
<input type="checkbox" name="product" id="broilers" value="Broilers">
<label for="broilers">Broilers (whole chickens)</label>
<input type="checkbox" name="product" id="whole_pig" value="Whole pig">
<label for="whole_pig">Whole pig</label>
<input type="checkbox" name="product" id="half_pig" value="Half pig">
<label for="half_pig">Half pig</label>
<input type="checkbox" name="product" id="lamb" value="Lamb">
<label for="lamb">Lamb</label>
<input type="checkbox" name="product" id="goats" value="La Mancha Goats">
<label for="goats">La Mancha Goats</label>
</div>
<br>
<div>
<textarea style="font-family: sans-serif;" rows="5" cols="50" placeholder="Please include any additional questions that you may have...">
</textarea>
</div>
<input type="submit" name="submit" id="submit_form" value="Submit Form">
</div>
</form>
</div>
</body>
 </html>