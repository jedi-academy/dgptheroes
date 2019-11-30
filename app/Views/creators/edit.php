<?php ?>

<html>
<head>
    <title>Edit Form</title>
</head>
<body>

<? if (exists($validation)) echo  $validation->listErrors(); ?> 

<form action="/creators/home/handle" method="POST">

<h5>Name</h5>
<input type="text" name="Name" value="" size="50" />

<h5>Date of birth</h5>
<input type="text" name="Date_of_birth" value=""  size="50" />

<h5>Grduate</h5>
<input type="text" name="Grduate" value=""  size="50" />

<h5>Country</h5>
<input type="text" name="Country" value=""  size="50" />

<h5>Game_company</h5>
<input type="text" name="Game_company" value=""  size="50" />

<h5>Representative_works</h5>
<textarea rows="8" cols="80" name="Representative_works" value=""></textarea>

<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>
