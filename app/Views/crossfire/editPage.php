<!--
<!doctype html>
<html>
	<head>
		<title>{name}</title>
	</head>
	<body>
            <h2>Edit Page</h2>
            
            {form}
            
	</body>
</html>
-->
<html>
<head>
    <title>Edit Page</title>
</head>
<body>

<h2>Edit Page</h2>
<form action="/crossfire/home/handle" method="POST">
    
<h5>Name</h5>
<input type="text" name="name" value="" size="50" />

<h5>Club</h5>
<input type="text" name="club" value="" size="50" />

<h5>City</h5>
<input type="text" name="city" value="" size="50" />

<h5>Main Weapon</h5>
<input type="text" name="main weapon" value="" size="50" />

<h5>Position</h5>
<input type="text" name="position" value="" size="50" />

<h5>Nickname</h5>
<input type="text" name="nickname" value="" size="50" />

<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>