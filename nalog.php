﻿<!DOCTYPE html>
<html>


<head>
	<title  style="font-size:120%"> Sigurnost u saobraćaju </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Sigurnost u saobraćaju" />

	
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/contact.css" rel='stylesheet' type='text/css' />
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
	
	</head> 






<body>


<!--Header-->
	<div class="top-bar_sub_w3layouts_agile">
		<h6 > Admin  | Management  </h6>

		<!-- <a href="index.html">Contact Us </a> -->
		<div class="search">
			<h5><a class="sign" href="index.html" >LOG OUT</a></h5>
		</div>

		<div class="clearfix"> </div>
	</div>

	<div class="container">
	<br>
			<div class="edu_button">
				<a class="btn btn-primary btn-lg hvr-underline-from-left" href="admin.php" role="button">Natrag </a>
			</div>
	</div>

	
	</div>
	
	<!--//Header-->

	

	
	

		<div class="container">

		<h2> Prekrsajni nalog </h2>
	<form  method="post">
		

<div class="register-form">
<table>

<tr><td> Datum <input type="date" name="datumPrekrsaja"> </td>
	 </tr>
 



<tr>   <td> Ime zaposlenika: <select name="zaposlenikIme">
				<option value=" ">                   </option>
				<option value="Mujo">Mujo</option>
				<option value="Adnan">Adnan</option>
				<option value="Samira">Samira</option>
				<option value="Amira">Amira</option>
				<option value="Alen">Alen</option>
				<option value="Suad">Suad</option></select></td> 
				
	<td>   Prezime zaposlenika:<select name="zaposlenikPrezime">
				<option value="">                   </option>
				<option value="Kalkan">Kalkan</option>
				<option value="Mujagic">Mujagić</option>
				<option value="Efendic">Efendić</option>
				<option value="Music">Musić</option>
				<option value="Ramic">Ramić</option>
				<option value="Duric">Durić</option></select></td> </tr>
<tr> <td> Funkcija zaposlenika: <select name="funkcija">
				<option value="">                    </option>   
				<option value="policajac">Policajac</option>
				<option value="komesar">Komesar</option></select></td> 
	 <td> Lokacija policijske stanice:
	<select name="lokacijaStanice">
				<option value="">                 </option>
				<option value="Nedarici">Neđarići</option>
				<option value="Pofalici">Pofalići</option>
				<option value="Hadzici">Hadžići</option>
				<option value="Vogosca">Vogošća</option>
				<option value="Hrasnica">Hrasnica</option>
				<option value="Ilidza">Ilidža</option>	</select>
</td>  </tr>
				

<br>

<tr>  <td>	 <input type="text" placeholder="Ime pocinioca"  name="osobaIme"></td> 
	 <td>						 <input type="text" placeholder="Prezime pocinioca" name="osobaPrezime"></td> </tr>
<div class="styled-input">
<tr>  <td>	 <input type="text" placeholder="JMBG" name="jmbg"></td>  
 <td>	 				<input type="text" name="vozackaDozvola" placeholder="Vozacka Dozvola"></td> </tr>
<tr>  <td>	 <input type="text" name="adresaPrebivalista" placeholder="Adresa prebivalista"></td> </tr>
<br>
<tr>  
	  <td> <input type="text" name="registarskeTablice" placeholder="Registarske tablice"></td>
		<td><input type="number" name="brojPolice" placeholder="Polica osiguranja"></td>  </tr>

<tr><td>Datum registracije:<input type="date" name="datumRegistracije"></td> 

	<td> Marka automobila:<select name="markaAutomobila">
				<option value="">        </option>  
				<option value="audi">Audi</option>
				<option value="fiat">Fiat </option> 
				<option value="ford">Ford </option> 
				<option value="honda">Honda</option> 
				<option value="nissan">Nissan</option>
				<option value="opel">Opel </option> 
				<option value="peugeot">Peugeot</option>  
				<option value="renault">Renault</option>  
				<option value="skoda">Skoda</option>
				<option value="volkswagen">Volkswagen</option>		</select></td> </tr>		
				 
<tr>	 </tr>

<!-- <tr>  <td>	 <input type="number" name="kaznaID" placeholder="kaznaID"></td> </tr> -->

<tr><td> Tip kazne:	 <select name="tipKazne">
				<option value="                   "></option>
				<option value="Oduzimanje vozacke dozvole">Oduzimanje vozačke dozvole</option>
				<option value="Zabrana upravljanja vozilom">Zabrana upravljanja vozilom</option>
				<option value="novcana kazna">Novčana kazna</option></select></td>
	<td> Status: 	 <select name="status">
				<option value="                   "></option>
				<option value="placeno">Izvršeno</option>
				<option value="neplaceno">Neizvršeno</option></select></td></tr>
				
				

</div>

<tr> <td>

<input type="submit" name="submit" value="Submit" onclick="location.href='admin.php';" value="Potvrdi"></td> </tr>

</table> 
<br>
</div> 

</form>
<br>
 </div>

 
</div>




<!--footer-->
	<div class="contact-footer-w3layouts-agile">
	
	
	
<div class="bottom-social-agileits-w3ls">
			<div class="container">
				<div class="col-md-8 botttom-nav-w3ls-agileits">
					
					<div class="clearfix"></div>
				</div>
				<div class="col-md-4 social-icons-wthree">
					<h6>Connect with us</h6>
					<a class="facebook" href="#"><span class="fa fa-facebook"></span></a>
					<a class="twitter" href="#"><span class="fa fa-twitter"></span></a>
					<a class="pinterest" href="#"><span class="fa fa-pinterest-p"></span></a>
					<a class="linkedin" href="#"><span class="fa fa-linkedin"></span></a>
				</div>
				<div class="clearfix"></div>

			</div>
		</div>
		
		
		<div class="copy-w3-agileits">
			<h2 class="footer-logo"><a href="index.html">Sigurnost u saobraćaju  </a></h2>
			<p>©  All Rights Reserved | Design by <a href="http://">5</a> </p>
			<div class="clearfix"></div>
		</div>
	</div>
	
	
	
	
	<!--/footer -->
<!-- js -->
	<script type="text/javascript" src="C:\wamp64\www\js\jquery-2.2.3.min.js"></script>
	<!-- //js -->
	<!--search-bar-->
	<script src="C:\wamp64\www\js\main.js"></script>
	<!--//search-bar-->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="C:\wamp64\www\js\move-top.js"></script>
	<script type="text/javascript" src="C:\wamp64\www\js\easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 10);
			});
		});
	</script>
	
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>


</body>



</html>

<?php

$con = mysqli_connect("localhost","root","") or die("Could not connect");
mysqli_select_db($con, "registar") or die("Baza nije pronadena!");

$id = 0;

$query = mysqli_query($con,"SELECT max(id) AS id FROM prekrsaj");
while ($row = mysqli_fetch_assoc($query)) {
    $id= $row['id'];
}
$id++;




if(isset($_POST['submit'])){
	
	
	$policijalokacija=$_POST['lokacijaStanice'];
	$datum=$_POST['datumPrekrsaja'];

	$policajacI=$_POST['zaposlenikIme'];
	$policajacP=$_POST['zaposlenikPrezime'];
	$funkcija=$_POST['funkcija'];
	
	$Ime=$_POST['osobaIme'];
	$Prezime=$_POST['osobaPrezime'];
	$jmbg=$_POST['jmbg'];
	$adresaP=$_POST['adresaPrebivalista'];
	$vozacka=$_POST['vozackaDozvola'];
	
	$regtablice=$_POST['registarskeTablice'];
	$datumR=$_POST['datumRegistracije'];
	$polica=$_POST['brojPolice'];
	$marka=$_POST['markaAutomobila'];

	$tipKazne=$_POST['tipKazne'];
	$status=$_POST['status'];
	

	
$tabelaosoba="insert into osoba(osobaID,osobaIme, osobaPrezime,jmbg,adresaPrebivalista,vozackaDozvola)
						values('$id','$Ime', '$Prezime', '$jmbg','$adresaP', '$vozacka')";

$tabelapolicijska="insert into policijskastanica(policijskaStanicaID,lokacijaStanice)
										values('$id','$policijalokacija')";

$tabelaautomobil="insert into automobil(automobilID,registarskeTablice, datumRegistracije,brojPolice,markaAutomobila)
								values('$id','$regtablice', '$datumR','$polica','$marka')";

$tabelakazna="insert into kazna(kaznaID,tipKazne, status)
					values('$id','$tipKazne','$status')";

$tabelazaposlenik="insert into zaposlenik(zaposlenikID,zaposlenikIme,zaposlenikPrezime,policijskaStanicaID,funkcija)
								values('$id','$policajacI','$policajacP', '$id','$funkcija')";

$tabelaprekrsaj="insert into prekrsaj(id,kaznaID,osobaID, automobilID, policajacID,datumPrekrsaja)
							values('$id','$id','$id','$id','$id','$datum')";


if(mysqli_query($con, $tabelaosoba))
{	
	
	if(mysqli_query($con, $tabelapolicijska))
	{	

		if(mysqli_query($con, $tabelaautomobil))
		{	
	
			if(mysqli_query($con, $tabelakazna))
			{	
	
				if(mysqli_query($con, $tabelazaposlenik))
				{	
			
					if(mysqli_query($con, $tabelaprekrsaj))
					{	
						echo '<script language="javascript">';
						echo 'alert("Uspjesno ste popunili nalog!")';
						echo 'window.location= "admin.php"';
						echo '</script>';
				
					}
				
					
					else	
					{	echo "Error: " . $tabelaprekrsaj . "<br>" . $con->error;}
				}
				else
				{	echo "Error: " . $tabelazaposlenik  . "<br>" . $con->error;}
			}
			else
			{	echo "Error: " . $tabelakazna . "<br>" . $con->error;}
		}
		else
		{		echo "Error: " . $tabelaautomobil . "<br>" . $con->error;}
	}
	else
	{	echo "Error: " . $tabelapolicijska . "<br>" . $con->error;}
}
else
{		echo "Error: " . $tabelaosoba . "<br>" . $con->error;}

}
?>

