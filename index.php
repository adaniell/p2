<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="stylesheet.css" type="text/css"/>
<link rel="stylesheet" href="normalize-css.css" type="text/css"/>
<?php require ('logic.php');?>
<title>xkcd Password Generator</title>
</head>

<body>

	<div id="header">
		<h1>xkcd Password Generator</h1>
		<p>Welcome! Please use this application to generate a secure and reliable password. </p>
		<p>The xkcd style generator is widely used as it gives you a password phrase with only common English words. 
		The idea is to put random dictionary words together, creating a uniuque phrase which would be tough for others to guess, but easy for you to remember.  </p>
	</div>

	<div id="content">

		<form method='GET' action='index.php'>
    		<p>How many words? <input maxlength='1' type='text' name='length' size='1'> (Max 8)</p>
    		<p>Include numbers? Yes <input type='checkbox' name='number'></p>
   		    <p>Include symbols? <span class="small">(i.e. !@#)</span> Yes <input type='checkbox' name='symbol'></p>
		    <input type='submit' value='Generate My Password!' class='btn'><br>
		</form>

		<div class="password">
			<p>
				<?php 
					generatePasswords($words, $symbol, $number);
				?>
			</p>
		</div>

		<a href="http://xkcd.com/936/" target="_blank"><img src="http://imgs.xkcd.com/comics/password_strength.png" alt="pwd generator"/></a>

	</div>

</body>
</html>