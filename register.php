<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>

  <title>Get Tested</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
  	<h2>Take The Survey (Y-Yes N-No) (F-Female M-Male)</h2>
  </div>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Enter Email:*</label>
  	  <input type="text" name="em" value="<?php echo $em;?>">
  	</div>
  	<div class="input-group">
  	  <label>What Is Your Height (In KG) ?*</label>
  	  <input type="text" name="He" value="<?php echo $He;?>">
  	</div>
  	<div class="input-group">
  	  <label>What Is Your Weight (In CM)?*</label>
  	  <input type="text" name="We" value="<?php echo $We;?>">
  	</div>
  	<div class="input-group">
  	  <label>What Is Your Age ?*</label>
  	  <input type="text" name="Age" value="<?php echo $Age;?>">
  	</div>
  	<div class="input-group">
  	  <label>Which Gender Are You (F/M)?*</label>
  	  <input type="text" name="Gen" value="<?php echo $Gen;?>">
  	</div>
  	<div class="input-group">
  	  <label>Do You Smoke (Y/N)?*</label>
  	  <input type="text" name="Smok" value="<?php echo $Smok;?>">
  	</div>
  	<div class="input-group">
  	  <label>Do You Drink Alcohol (Y/N)?*</label>
  	  <input type="text" name="Alco" value="<?php echo $Alco;?>">
  	</div>
  	<div class="input-group">
  	  <label>Do You Take Any Chronic Medication (Y/N)?*</label>
  	  <input type="text" name="Chro" value="<?php echo $Chro;?>">
  	</div>
  	<div class="input-group">
  	  <label>Do You Have Fever (Y/N)?*</label>
  	  <input type="text" name="Fe" value="<?php echo $Fe;?>">
  	</div>
  	<div class="input-group">
  	  <label>Do You Have Dry Cough (Y/N)?*</label>
  	  <input type="text" name="Dry" value="<?php echo $Dry;?>">
  	</div>
  	<div class="input-group">
  	  <label>Do You Have Sore Throat (Y/N)?*</label>
  	  <input type="text" name="So" value="<?php echo $So;?>">
  	</div>
  	<div class="input-group">
  	  <label>Do You Have Headache (Y/N)?*</label>
  	  <input type="text" name="Hed" value="<?php echo $Hed;?>">
  	</div>
  	<div class="input-group">
  	  <label>Do You Feel Tired (Y/N)?*</label>
  	  <input type="text" name="Tir" value="<?php echo $Tir;?>">
  	</div>
  	<div class="input-group">
  	  <label>Do You have Shortness Of Breath (Y/N)?*</label>
  	  <input type="text" name="Sho" value="<?php echo $Sho;?>">
  	</div>
  	<div class="input-group">
  	  <label>Do You Feel Aches and Pain (Y/N)?*</label>
  	  <input type="text" name="Ac" value="<?php echo $Ac;?>">
  	</div>
  	<div class="input-group">
  	  <label>Do You Have Diarrhoea (Y/N)?*</label>
  	  <input type="text" name="Dia" value="<?php echo $Dia;?>">
  	</div>
  	<div class="input-group">
  	  <label>Do You Have Runny Nose (Y/N)?*</label>
  	  <input type="text" name="Run" value="<?php echo $Run;?>">
  	</div>
  	<div class="input-group">
  	  <label>Do You Have Reapeted Shaking (Y/N)?*</label>
  	  <input type="text" name="Re" value="<?php echo $Re;?>">
  	</div>
  	<div class="input-group">
  	  <label>Do You Have Chills (Y/N)?*</label>
  	  <input type="text" name="Ch" value="<?php echo $Ch;?>">
  	</div>
  	<div class="input-group">
  	  <label>Do You Have  Muscle Pain (Y/N)?*</label>
  	  <input type="text" name="Mu" value="<?php echo $Mu;?>">
  	</div>
  	<div class="input-group">
  	  <label>Do You Experince Lose Of Taste And Smell (Y/N)?*</label>
  	  <input type="text" name="lo" value="<?php echo $lo;?>">
  	</div>
  	<div class="input-group">
  	  <label>Do You Have Diabetes(Y/N)?*</label>
  	  <input type="text" name="Diabetes" value="<?php echo $Diabetes; ?>">
  	</div>
  		<div class="input-group">
  	  <label>Do You Have Health Issues (Y/N) ?*</label>
  	  <input type="text" name="Height" value="<?php echo $Height;?>">
  	</div>
  	<div class="input-group">
  	  <label>Do You Have Cardiovascular Disease (Y/N)?*</label>
  	  <input type="text" name="Cardiovascular" value="<?php echo $Cardiovascular;?>">
  	</div>
	<div class="input-group">
  	  <label>Do You Have Respiratory Illiness (Y/N)?*</label>
  	  <input type="text" name="Respiratory" value="<?php echo $Respiratory; ?>">
  	</div>
	<div class="input-group">
  	  <label>Cancer Within Last 2 Years (Y/N)?*</label>
  	  <input type="text" name="Cancer" value="<?php echo $Cancer; ?>">
  	</div>
  <div class="input-group">
  	  <label>Do You Have Hypertension (Y/N)?*</label>
  	  <input type="text" name="Hypertenion" value="<?php echo $Hypertenion; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Do Any Of Your Household Members Have Any Of The Symptoms (Y/N)?*</label>
  	  <input type="text" name="sym" value="<?php echo $sym;?>">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Submit The Survey And View The Results</button>
  	</div>
  	<p>
  		<a href="index.php">Home Page</a>
  	</p>
  </form>
</body>
</html>

em
alco
Gen
006019

114076
114055
->Presentation 114055
