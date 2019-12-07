<?php

?>

<html>

<head>
<title>User Registration</title>
<head>

<body>

<form action="/process.php" method="POST">
<section>

<h1>Registration Site<h1>

<h3>User Registration<h3>
<h4>

<label>Username:</label>
<span>
<input type="username" name="username" size="30" maxlength="150" value=""/><br>
</span>

<label>Email:</label>
<span>
<input type="email" name="email" size="30" maxlength="150" value=""/><br>
</span>

<label>First Name:</label>
<span>
<input type="fname" name="fname" size="29" maxlength="150" value=""/><br>
</span>

<label>Last Name:</label>
<span>
<input type="lname" name="lname" size="25" maxlength="150" value=""/><br>
</span>

<label>Age:</label>
<span>
<input type="number" name="age" size="5" maxlength="150" value=""/><br>
</span>

<label>Password:</label>
<span>
<input type="password" name="password" size="26" maxlength="150" value=""/><br>
</span>

<label>Password Confirmation:</label>
<span>
<input type="password" name="password_c" size="26" maxlength="150" value=""/><br>
</span>

<input id="saveform" class="buttons" type="submit" name="submit" value="Submit" />