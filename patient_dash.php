<?php
include 'session.php';
?>
<head>
	<style>

		table
		{
			width:100%;
		}
		td 
		{
			color:black;
		}
	</style>
</head>
<div class="container">
 <center> <h1 class="" style="font-family:Comic Sans MS ;color:  fuchsia"> SHARADA HOSPITAL </h1> </center>
<div class="row">	
	<div class="col-md-3">
		 <?php
$id=$_SESSION['id'];
$conn=new mysqli("localhost","root","","online");
 {
 	$qry="select * from patient where id='$id'";
	$result=$conn->query($qry);
 
 if($result->num_rows > 0){

 while($row=$result->fetch_array()){
 $id= $row["id"];
 $fname=$row["fname"];
 $lname=$row["lname"];
echo "<strong><h3>Name: $fname $lname </h3> </strong>";
}
}
}
?>
</div>	
</div>


<div class="row">
<div class="col-md-2">
<input type="submit" value="Patient details" name="click" class="btn btn-sm" style="border-radius:2px;box-shadow:0px 0px 1px 1px green;color: blue" data-toggle="modal"  data-target="#details"></div>

<div class="col-md-2">
<a href="p_order.php"><input type="submit" name="" value="View order"class="btn btn-sm" style="border-radius:2px;box-shadow:0px 0px 1px 1px lime;color: olive; float:left">  </a>
</div> 
<div class="col-md-8">
<a href="index.php"><input type="submit" name="" value="Logout"class="btn btn-sm" style="border-radius:2px;box-shadow:0px 0px 1px 1px maroon;color:red; float:right" onclick="return logout()">  </a>
</div> 
</div> 
</div>
<hr class="" style="width:1240px;float:left">
<script>
function logout()
	 {
return confirm('are you sure logout');
	}
</script>

<?php

$id=$_SESSION['id'];
$conn=new mysqli("localhost","root","","online");
 {
 	$qry="select * from patient where id='$id'";
	$result=$conn->query($qry);
 
 if($result->num_rows > 0){

 while($row=$result->fetch_array()){
 $id= $row["id"];
 $fname=$row["fname"];
 $lname=$row["lname"];
 $disease=$row["disease"];
 $address=$row["address"];
 $mobile=$row["mobile"];
 $emobile=$row["emobile"];
 $room=$row["room"];
 $payble=$row["payble"];
 $insurance=$row["insurance"];
 $password=$row["password"];
}
}
}
?>

<div class="modal about-modal w3-agileits fade" id="details" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header"><B>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
			</div> 
			
			<div class="modal-body" style="background-color:lightgray">

			<center><h2 style="color:darkorange"> Patient Details</h2></center>
			<form method="post"> <h4> 
				<center>
				<div class="row">
					<div class="col-md-2">
				Fname:</div>
			<div class="col-md-4">
				<B>	<input type="text" name="fname" value="<?php echo ($fname) ;?>" class="form-control" style="box-shadow: 0px 0px 0px 1px black" disabled></B>
					 </div>
					<div class="col-md-2">
				Lname:</div>
			<div class="col-md-4">
					<B><input type="text" name="lname"  value="<?php echo ($lname) ;?>" class="form-control" style="box-shadow: 0px 0px 0px 1px black"  disabled></B>
					 </div></div> <br>
				<div class="row">
					<div class="col-md-2">
				Address:</div>
			<div class="col-md-4">
					<B><input type="text" name="address"  value="<?php echo ($address) ;?>" class="form-control" style="box-shadow: 0px 0px 0px 1px black" disabled></B>
					 </div>
					<div class="col-md-2">
				Phone:</div>
			<div class="col-md-4">
					<B><input type="text" name="mobile"  value="<?php echo ($mobile) ;?>" class="form-control" style="box-shadow: 0px 0px 0px 1px black" disabled >
					</B> </div></div> <br>
					 <div class="row">
					<div class="col-md-2">
				Emr contact:</div>
			<div class="col-md-4">
					<B><input type="text" name="emobile"  value="<?php echo ($emobile) ;?>" class="form-control" style="box-shadow: 0px 0px 0px 1px black" disabled></B>
					 </div>
					<div class="col-md-2">
				Room NO:</div>
			<div class="col-md-4">
					<B><input type="text" name="room"  value="<?php echo ($room) ;?>" class="form-control" style="box-shadow: 0px 0px 0px 1px black" disabled>
					</B> </div></div> <br>
					 <div class="row">
					<div class="col-md-2">
				Payble:</div>
			<div class="col-md-4">
					<B><input type="text" name="payble"  value="<?php echo ($payble) ;?>" class="form-control" style="box-shadow: 0px 0px 0px 1px black" disabled>
					 </B></div>
					<div class="col-md-2">
				Insurance:</div>
			<div class="col-md-4">
					<B><input type="text" name="insurance"  value="<?php echo ($insurance) ;?>" class="form-control" style="box-shadow: 0px 0px 0px 1px black" disabled>
					 </B></div></div> <br>
					 <div class="row">
					<div class="col-md-2">
				Password:</div>
			<div class="col-md-4">
				<B>	<input type="text" name="password"  value="<?php echo ($password) ;?>"class="form-control" style="box-shadow: 0px 0px 0px 1px black" disabled>
					</B> </div>

					<div class="col-md-2">
					Disease: </div>
					<div class="col-md-4">
						<B>	<input type="text" name="disease"  value="<?php echo ($disease) ;?>"class="form-control" style="box-shadow: 0px 0px 0px 1px black" disabled>
					</B> </div>


</center>
</h4>
</Form>
</div>
</div>
</div>
</div>
<div class="container">
<form method="post">
<h4>
	<div class="row">
		<div class="col-md-4">
<label class="" style="float:right;">Select Diet plan: </label></div>
<div class="col-md-3">
<select id="myselect" name="myselect" class="form-control" style="width:250px">
<option value="Select">Select </option>	
<option value="sugar">Sugar</option>
<option value="Astama">Low Uric Acid-Uremic Acid diet</option>
<option value="Potassium"> Low potassium Diet</option>
<option value="calsium">High calcium low salt low fat Diet</option>
<option value="weight"> Weight Reducing Diet</option>
<option value="stone"> Renal Stone Diet</option>
<option value="hepatic">Hepatic Diet</option>
<option value="woman"> Lactating Woman Diet</option>
<option value="renal"> Renal Diet</option>
<option value="cardiak">Cardiak Diet</option> 
<option value="fiber">High fiber Diet</option> 

</select> </div>
<div class="col-md-3">

	<input type="submit" class="btn btn-default btn-sm" name="submit"  value="Go" style="float:left">
</div>
</div>
</h4>
<?php
if (isset($_POST['submit'])){
	$data=$_POST['myselect'];
if ($data=="sugar") {
	sugar();
}
elseif($data=="Astama"){
	astama();
}	
elseif($data=="Potassium"){
	Potassium();
}
elseif ($data=="calsium") {
CALCIUM();
}
elseif ($data=="weight") {
	weight();
	# code...
}
elseif ($data=="stone") {
	stone();
	# code...
}
elseif ($data=="hepatic") {
	hepatic();
	# code...
}
elseif ($data=="woman") {
	woman();
	# code...
}
elseif ($data=="renal") {
	renal();
	# code...
}
elseif ($data=="cardiak") {

cardiak();
}
elseif ($data=="fiber") {
	fiber();
}
?>

<div class="row">
  <form method="post">
  <div class="col-md-3">
  <select id="myselect" name="hotel" class="form-control" style="width:200px">
<option value="">Select Hotel</option>  
<option value="a">a</option>
<option value="b">b</option>
<option value="c"> c</option>
<option value="d">d</option>
</select> </div>
<div class="col-md-5">
  <input type="text" name="food" placeholder="Enter your order" class="form-control" style="box-shadow:0px 0px 1px 1px">
</div> 
<div class="col-md-4">
<input type="submit" name="order" value="Order" class="btn btn-md" style="color:blue;box-shadow:0px 0px 0px 1px green" onclick="success()"></div>
</div> 
 <br> 
</form>
</div>
<?PHP
}
function sugar(){
	?>


  <div class="col-md-2"> </div>
  <div class="col-md-10">

<table>
  <tr>
    <th> Meal </th>
    <th> Menu </th>
    <th> Quantity </th>
    </tr>
    <tr> 
    <td> Early Morning</td>
    <td> Tea/coffee(without sugar) </td>
    <td>1 cup with 30 ml milk(skimmed)</td> </tr>
    <tr> 
    <td> Breakfast</td>
    <td> milk Skimmed (without sugar)<br>
        Daliya/Upma/Poha <br>
        Or brown bread with buttor boiled egg </td>
    <td> 1 glass <br>
       1 bowl <br>
       2 slice + 1 tsp(5gm)
       1 in no.</td>
      </tr>
      <tr>
    <td>Mid Morning  </td>
    <td> Fruit /Mix fruit chat </td>
    <td> 1/1 plate</td>
    </tr>
    <tr>
    <td> Lunch </td>
    <td> Chapati <br>
       Dal <br>
       Vegitable <br>
       Raita <br>
       Green Salad <br>
      Oil for Cooking </td>
    <td> 3 <br>
       1 Katori (cooked) <br>
       1 Katori (cooked) <br>
       1 Katori <br>
       Small helping <br>
      2 tea spoon(10mg)</td> </tr>
      <tr>
    <td>Evening Tea </td>
    <td> Tea <br> 
      Panner (one cube) on toast (brown bread)
    </td>
    <td>1 cup (without sugar)<br>
    2 slice </td></tr>
    <tr>
      <td>Dinner </td>
      <td> Stuffe chapati <br>
        Vegitable <br>
        Raita <br>
        Mix salad<br>
        Fruit <br>
      Oil for cooking </td>
      <td> 3 in 1 <br>
        1 katori(cooked)<br>
        1 katori <br>
        1 bowl <br>
        1 <br>
        2 tea spoon(10mg)
      </td>
    </tr>
    <tr>
      <td>Bed Time </td>
      <td> Milk Skimmed (without sugar) </td>
      <td> 1 glass </td></tr>
  </table>
 <br> <br>
</div>
	<?php
}
function astama(){
	?>



  <div class="col-md-2"> </div>
  <div class="col-md-10">
  	<div class="row">
  		<div class="col-md-3"></div>
  		<div class="col-md-03">
  	<div class="" style="padding:10px;border-radius:5px;box-shadow:0px 0px 1px 1px;background-color:white;width:75%">
  		<center>
<div class="" style="padding:7px;border-radius:5px;box-shadow:0px 0px 1px 1px green;width:35% "> 
	<label> Low Uric Acid/Uremic acid</label>
 </div> </center>
<label> Free Foods</label>
	<ol>
		<li>
			<label>Breads,Chapati and all other cereals.</label> </li>
		<li>
			<label> Vegitable soups andsaladas like carrot and cucumber</label> </li>
		<li>
			<label>Fresh fruits like Apple,papaya,pear</label> </li> 
	</ol>
<label>Foods To be taken in limited quentity</label>
<ol>
	<li> <label>Spices and condiments</label> </li>
	<li> <label>Tomotoes,lemon,veniger</label> </li>
	<li> <label>Fruits like Oranges and sweet time</label></li>
	<li><label>Protien  rich food items</label></li>
	<li> <label> Tea and coffee 2-3 cups a day</label></li>
	<li><label>Refined Vegitable oil 25-30 g/day</label></li>
</ol>




</div>

 <br> <br>

</div>



	<?php
}
function weight()
{
	?>

	  <div class="col-md-2"> </div>
  <div class="col-md-10"><center>
<div class="" style="padding:10px;border-radius:5px;box-shadow:0px 0px 1px 1px green;width:30% "> 
	<label>Weight Reducing Diet Chart</label>
 </div></center>
 <br>
<table>
  <tr>
    <th> Meal </th>
    <th> Menu </th>
    <th> Quantity </th>
    </tr>
    <tr> 
    <td> Early Morning</td>
    <td> Tea/coffee(no sugar) </td>
    <td>1 cup</td> </tr>
    <tr> 
    <td> Breakfast</td>
    <td> milk tonned &decreamed <br>
        brown bread without buttor<br>
        Or Daily /Oats <br>
        Sugar<br>
        panner
    </td>
    <td> 1 glass <br>
       2 slice <br>
       2 table spoon <br>
       1 table spoon <br>
   	   1 cube 
</td>
      </tr>
      <tr>
    <td>Mid Morning  </td>
    <td> Vegitable soup </td>
    <td> 1 bowl</td>
    </tr>
    <tr>
    <td> Lunch </td>
    <td> Chapati (20 gm Alta Each) or Rice <br>
       Dal <br>
       Vegitable <br>
       Oil for cooking <br>
       curd <br>
      salad <br>
  	fruit		</td>
    <td> 1/1 Katori <br>
       3/4 Katori (cooked) <br>
       1 Katori large<br>
       1 Teaspoon <br>
       1/2 Katori <br>
      Good helping <br>
      100mg
  </td> </tr>
      <tr>
    <td>Evening </td>
    <td> Tea/coffee(no sugar) <br> 
     Marrie biscuts</td>
    <td>1 cup <br>
    2 in no </td></tr>
    <tr>
      <td>Dinner </td>
      <td>chapati (20 gm Atta each) Or rice<br>
        Dal <br>
       Vegitable <br>
        Oil for cooking<br>
       curd with <br>
      salad</td>
      <td> 1/1 katori <br>
        3/4 katori(cooked)<br>
        1 katori large <br>
        1 teaspoon <br>
        1/2 katori <br>
        Good Helping
              </td>
    </tr>
    <tr>
      <td>Bed Time </td>
      <td> fruit  </td>
      <td> 100 gm </td></tr>
  </table>  
   <br> <br>


</div>


<?php
}
function Potassium(){
	?>


  <div class="col-md-2"> </div>
  <div class="col-md-10">
  	<div class="row">
  		<div class="col-md-3"></div>
  		<div class="col-md-03">
  	<div class="" style="padding:10px;border-radius:5px;box-shadow:0px 0px 1px 1px;background-color:white;width:75%">
  		<center>
<div class="" style="padding:7px;border-radius:5px;box-shadow:0px 0px 1px 1px green;width:35% "> 
	<label> Low Potassium Diet</label>
 </div> </center>
<label> Foods to be avoided</label>
	<ol>
		<li>
			<label>fruits juice,squash,bottle drinks,lemon juice.</label> </li>
		<li>
			<label>Vegetable Soup</label> </li>
		<li>
			<label>Fresh coconutand tender coconut water</label> </li> 
		<li><label> Malted beverages like Boost ,bournvita and Horliks</label></li>
	<li> <label>Cocoa and cocoa products</label> </li>
	<li> <label>Jam,Jellies and jaggery</label> </li>
	<li> <label>Dried fruits and Nuts</label></li>
	<li><label>Canned,tinned,preserved and processed foods to be avoided like tinned fruits,processed chees,sauceetc.</label></li>
	<li> <label> mint chutney and coconut chutney</label></li>
	<li><label>Raw Vegitable,green saladasand green leafy vegitables e.g.spinch ,sarson Ka sag.green peags Beansof all varity .Bathu brijila drumstik kamal kakdi,Zimikana<label></li>
		<li><label>Fruits like Sweet Lime,musk MelonBael,Apricots,logout Peach,Lemon</label></li>
</ol>
<label>Instructions To be Followed</label>
<ol>
	<li> <label>All vegetablles are to be washed and well cooked</label></li>
		<li> <label> Only 100gm.of fruitper dayis permitted(Apple,gouva,papaya,orange,pineapple,pear)</label></li>
			<li> <label>Vegetable should be  cut into smaller piese and boiled ,and then water should be throuwn away</label></li>
				<li> <label> Dal's should be washed &shocked inwater &the wATER SHOULD BE THROUWN AWAY</label></li>

</ol>
</div> <br>

</div>

<?php
}
function CALCIUM(){
	?>


  <div class="col-md-2"> </div>
  <div class="col-md-10">
  	<div class="row">
  		<div class="col-md-3"></div>
  		<div class="col-md-03">
  	<div class="" style="padding:10px;border-radius:5px;box-shadow:0px 0px 1px 1px;background-color:white;width:75%">
  		<center>
<div class="" style="padding:7px;border-radius:5px;box-shadow:0px 0px 1px 1px green;width:35% "> 
	<label> HIGH CALCIUMlOW SALT LOW FAT  DIET</label>
 </div> </center>
<label> Food shoulb be avoided</label>
	<ul>
		<li>
			<label>cottage cheese</label> </li>
		<li>
			<label>Bacon,ham,meats</label> </li>
		<li>
			<label>All bakery products</label> </li> 
		<li><label> rice And wheat flour</label></li>
	<li> <label>Candy,sweet,Ice-cream</label> </li>
	<li> <label>Sugar</label> </li>
	<li> <label>Bevereges</label></li>
	</ul>
<label>Food should be taken</label>
<ul>
	<li> <label>Milk and Milk products</label></li>
		<li> <label> Honey<label></li>
			<li> <label>All cereals</label></li>
				<li> <label> Veg,saladas,cabbage,carrot,cherry,cucumber,letture,Onion,radhish,Tomato
				</label></li>
	<li> <label>Cooked veg,carrot,Brinjals,mushrooms,Peans,Beans,Spinich,Tomato,Turnips,Beets</label>
				</li>
					<li> <label> FRuits-Apple,Orange,Banana,Apricot,Pine Apple,Lemon</label></li>

</ul>

<label> Instruction</label>
	<ul><li> <label>Eat low fat diet</label></li>
	<li> <label>Eat low salt diet</label></li>
	<li><label>Include high calcium source in diet</label></li>
</ul>
<br>
</div> <br>

</div>

<?php
}
function stone(){
	?>



  <div class="col-md-2"> </div>
  <div class="col-md-10">
  	<div class="row">
  		<div class="col-md-3"></div>
  		<div class="col-md-03">
  	<div class="" style="padding:10px;border-radius:5px;box-shadow:0px 0px 1px 1px;background-color:white;width:75%">
  		<center>
<div class="" style="padding:7px;border-radius:5px;box-shadow:0px 0px 1px 1px green;width:35% "> 
	<label> Renal Stone diet</label>
 </div> </center>
<label>Avoid</label>
	<ol>
		<li>
			<label>Whole wheat bread</label> </li>
		<li>
			<label>Spinach</label> </li>
		<li>
			<label> Sweet potato</label> </li> 
	<li>
<label>Lady Finger</label>
</li>
	<li> <label> Beet Root</label> </li>
	<li> <label>Beans</label> </li>
	<li> <label>chauli</label></li>
	<li><label>Coco dry</label></li>
	<li> <label>Amia</label></li>
	<li><label>Plum</label></li>
<li> <label> Rose Berries</label></li>
<li> <label> Carrot</label></li>
<li> <label>Almonds</label></li>
<li> <label>Cashew nuts</label></li>
</ol>
</div>
<BR>


</div>

  

	<?php
}
function hepatic(){
?>
  <div class="col-md-2"> </div>
  <div class="col-md-10">
  	<div class="row">
  		<div class="col-md-3"></div>
  		<div class="col-md-03">
  	<div class="" style="padding:10px;border-radius:5px;box-shadow:0px 0px 1px 1px;background-color:white;width:75%">
  		<center>
<div class="" style="padding:7px;border-radius:5px;box-shadow:0px 0px 1px 1px green;width:35% "> 
	<label> Hepatic Diet</label>
 </div> </center>
<label> Foods to be avoided</label>
	<ul>
		<li>
			<label>Avoided oily foods and food products</label> </li>
		<li>
			<label>Avoided turmeric infood</label> </li>
		<li>
			<label>Emulsified fat like butter and Cocunut Oil can be used in limited quentity approximate 2-3 tsp/d</label> </li> 
		<li><label>avoide speces and irritants</label></li>
	<li> <label>avoide nuts and oil seeds,strongly flavored vegetable and meats</label> </li>
	
</ol>
<label>Foods Recommended</label>
<ol>
	<li> <label>high carbohydrate foods are recomdede like sweets,sugars,honey,fruits,and fruits juices</label></li>
		<li> <label>Cereals and root vegetable should be taken .</label></li>
			<li> <label>Milk &milk products (skimmed  milk) ,egg white can be taken </label></li>
				<li> <label> Carotene rich food like green leafy vegetables and yellow and yellow fruits  and vegetables shold be taken .</label></li>
				<li><label> raisen (kismish),Bael,banana,dates should be taken</label></li>

</ol>
<label>Notes</label>

<ul>
	<li> <label> Take plenty of take small & frequent meal g-7 meals thoughout the day</label></li>
	<li><label>Take 30-35 g glucose throughout the day</label></li>
</ul>
</div>
<br>

</div>
<?php
}
function woman(){
?>
  <div class="col-md-2"> </div>
  <div class="col-md-10">
  	<div class="row">
  		<div class="col-md-3"></div>
  		<div class="col-md-03">
  	<div class="" style="padding:10px;border-radius:5px;box-shadow:0px 0px 1px 1px;background-color:white;width:75%;">
  		<center>
<div class="" style="padding:7px;border-radius:5px;box-shadow:0px 0px 1px 1px green;width:35% "> 

	<label> Diet In Latching woman</label>
 </div></center>
<label> Calories-2500 Kcal </label>
<label> Protein-80 gm </label><br>
<center>
	<table>
				<tr>
		<th>Time </th>
		<th> Food</th>
		<tr>
			<td>
<label> Early Morning: </td> 
<td>Tea/coffee (1 cup) + Biscuits coconut ladoo 1 </td></label> </tr>
<tr> <td>
<label>Breakfast:  </td> 
<td>Milk- 1glass/egg 1 no <br>
cornflakes/Sevian/sooji-1Bowl 
Or Paneer Sandwhich 2,fruits
 </td></label> </tr>
<tr>
	<td>
<label>Mid Morning: </td> <td> Milk /lassi/juice/soup/Lime Juice/Coconut water/Pandijre/Til ladoo /coconutb ladoo/sprout chat </td></label> </tr>
<tr> <td>
<label> Lunch: </td> <td> salad- one plate <br>
chapati-2 or 3 <br>
rice-1 katori<br>
Dal- 1 katori <br>
vegetble -1katori <br>
curd -1 katori <br>
Fruit-1</td> </label></tr>
<tr>
	<td> <label> Evening tea: </td> <td> Milk/Tea </td></label> </tr>

<tr> <td> <label>Dinner:</td> <td> Same as Lunch</td></label> </tr>
<tr> <td> <label> Night: </td> <td> Milk 1 galss </td></label> </tr>
</table> <br>
</div>
<br>

</div>

<?php
}
function renal(){
?>
  <div class="col-md-2"> </div>
  <div class="col-md-10">
  	<div class="row">
  		<div class="col-md-3"></div>
  		<div class="col-md-03">
  	<div class="" style="padding:10px;border-radius:5px;box-shadow:0px 0px 1px 1px;background-color:white;width:75%;">
  		<center>
<div class="" style="padding:7px;border-radius:5px;box-shadow:0px 0px 1px 1px green;width:35% "> 

	<label> Renal Diet chart</label>
 </div></center><br>
<center>
	<table>
				<tr>
		<th>Time </th>
		<th> Food</th>
		<th> Qty
		<tr>
			<td>
<label> Early Morning: </td> 
<td>Tea/coffee </td> <td> 1 cup </td></label> </tr>
<tr> <td>
<label>Breakfast:  </td> 
<td>Milk<br> Breads/daliya/Oats
 </td> <td> 1 cup <br> 2-3 slice/1 bowl/1 bowl </td></label> </tr>
<tr>
	<td>
<label>Mid Morning: </td> <td> Fruits </td> <td>1 </td> </label> </tr>
<tr> <td>
<label> Lunch: </td> <td> 
chapati <br>
rice<br>
Dal<br>
vegetble <br>
curd<br></td><td> 3 <br>1-1/2k <br> 1k <br>1k<br> 1/2k </td>  </label></tr>
<tr>
	<td> <label> Evening tea: </td> <td> Tea<br>Poha/upma </td> <td>1cup <br>1/2k 1/2k</td> </label> </tr>

<tr> <td> <label>Dinner:</td> <td> Chapati<br>Rice</td> <td>2-3 <br>1-1/2k</td></label> </tr>
<tr> <td> <label> Vegitable: </td> <td>1k</td><td></td></label> </tr>
</table> <br>
</div>
<br>

</div>


	<?php
}
function cardiak()
{
	?>

	  <div class="col-md-2"> </div>
  <div class="col-md-10">
<center>
<div class="" style="padding:7px;border-radius:5px;box-shadow:0px 0px 1px 1px green;width:35% "> 
	<label>Cardiak Diet Chart</label>
 </div></center>
 <br>
<table>
  <tr>
    <th> Meal </th>
    <th> Menu </th>
    <th> Quantity </th>
    </tr>
    <tr> 
    <td> Early Morning</td>
    <td> Tea/coffee<br>
    marrie Biscuits</td>
    <td>1 cup (1/4th Milk)<br> 2</td> </tr>
    <tr> 
    <td> Breakfast</td>
    <td>Oats/daliya Porridge <br> Skimmed milk/double toned milk <br>
    	Whole wheat Bread <br>
    	egg White    </td>
    <td>  1 bowl <br>
       2 glass <br>
       2 slice <br>
       1 in no
</td>
      </tr>
      <tr>
    <td>Mid Morning  </td>
    <td>Soup </td>
    <td> 1 bowl</td>
    </tr>
    <tr>
    <td> Lunch </td>
    <td> Salad <br> Chapati<br> Rice<br>
      whole Dal <br>
       Veg<br>
       curd <br>
      </td>
    <td> 1 Bowl<br>2-3 <br> 1/2 plate <br>1 Katori <br>
       1 Katori <br>
       1 Katori</td> </tr>
      <tr>
    <td>Evening </td>
    <td> Tea<br> 
     Biscuts/Light Snack</td>
    <td>1 cup (1/4th milk)</td></tr>
    <tr>
      <td>Dinner </td>
      <td> Salad <br>chapati<br> rice<br>
       whole Dal <br>
       Veg</td>
      <td>1 Bowl<br> 2-3 <br>

       1/2 plate<br>
        1 katori<br>
        1 katori 
    </td>
    </tr>
    <tr>
      <td>Bed Time </td>
      <td> Skimmed milk  </td>
      <td> 1/2 glass </td></tr>
  </table>  
  <br>
 
</div>


	<?php
}
function fiber(){
?>
  <div class="col-md-2"> </div>
  <div class="col-md-10">
  	<div class="row">
  		<div class="col-md-3"></div>
  		<div class="col-md-03">
  	<div class="" style="padding:10px;border-radius:5px;box-shadow:0px 0px 1px 1px;background-color:white;width:75%">
  		<center>
<div class="" style="padding:7px;border-radius:5px;box-shadow:0px 0px 1px 1px green;width:35% "> 
	<label>High Fiber Diet</label>
 </div> </center>
<label> Foods to be avoided</label>
	<ol>
		<li>
			<label>Refined cereals like sago,semolina(suji),refined flour(maida).</label> </li>
		<li>
			<label>Refined starch products such as cornflour,custurd powder,arrowroot power and commercial jelly products</label> </li>
		<li>
			<label>Fats like Ghee,butter,vanaspati Ghee,coconut oil etc.</label> </li> 
		<li><label>Fruits juices,squashes,sharbat etc</label></li>
	<li> <label>Bakery products such as cakes,pastries,biscuits etc</label> </li>
	
</ol>
<label>Foods To be taken in limited Quentity</label>
<ol>
	<li> <label>High calorie fruits like Banana,grapes,sapota,custard apple.</label></li>
		<li> <label>Root vegetables like potato,yam(jimikand) and colocasia (arbi).</label></li>
			<li> <label>Dehusked dal (polished dal) should be taken in limited amounts </label></li>
				<li> <label>Meat and meat products,fish/chicken should be taken in limited amount </label></li>
				<li><label> Eggs not more than 2 per week</label></li>

</ol>
<label>Foods Recommended</label>

<ol>
	<li> <label>High fiber vegetable like palak,methi,beans,sarson ka saag. </label></li>
	<li> <label>Fruits like guava,pomegranate,papaya,orange,apple and other fruits with Seeds and skin should betaken daily </label></li>
	<li> <label>Fresh green salada like Cabbage,celery,radish,onion,tomoto,cucumber etc  </label></li>
	<li> <label>Meat fish chicken(in limited qty 50 gms one in 15 day) should be taken with green leafy vagetables to iuncorporate fibre </label></li>
	<li> <label>Whole grams and all dals with husk should be consumed daily </label></li>
	<li> <label>Sprouted grams and dals as salada must be included in at least one meal per day </label></li>
	<li> <label>Whole wheat bread or brown bread is preferable to refined bread</label></li>
	Whole wheat flour should be used for making chapatii's combination of whole wheat flour with black cnana or barley(4:1) is advised.Do not sieve the flour used for chapati making to incorporate fibire  
</ol>
</div>
<br>

<?php
}
	?>


<?php
$link=new mysqli("localhost","root","","online");
if(isset($_POST['order'])){
$myselect=$_POST['myselect'];
$hotel=$_POST['hotel'];
$food=$_POST['food'];
$id=$_SESSION['id'];

if (empty($myselect&&$hotel&&$food)){
  echo "<script>alert('Enter all data')</script>";
  exit();
}
else{
$q="insert into request(pid,myselect,hotel,food)value('$id','$myselect','$hotel','$food')";
$r=$link->query($q);
if($r==true){
  echo "<script>alert ('order is confirmed')</script>";
}
else
  echo "<script>alert ('failed')</script>";
}
}
?>

