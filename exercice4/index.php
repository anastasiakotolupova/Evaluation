<?php

require_once 'Cat.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Insert title here</title>
    </head>
    <body>
    
    	<form method="POST">
    		<fieldset>
        		<input type="text" name="cat[name]" placeholder="name">
        		<input type="number" name="cat[age]" placeholder="age">
        		<select name="cat[gender]">
        			<option value="male">Male</option>
        			<option value="female">Female</option>
        		</select>
                <input type="text" name="cat[color]" placeholder="color">
                <input type="text" name="cat[race]" placeholder="race">
    		</fieldset>
    		<button type="submit">Submit</button>
    	</form>
    
    </body>
</html>
