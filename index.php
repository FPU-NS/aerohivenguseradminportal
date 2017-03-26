<html>
    
<head>
<title>Wifi Admin Portal</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Cutive" rel="stylesheet">
</head>

<body>   
<img src="logo.jpg">
<p>
Welcome 
<?php
    $upn = $_SERVER["HTTP_X_MS_CLIENT_PRINCIPAL_NAME"];
    echo $upn;
?>
   |   <a id="logout" href="/.auth/logout">Logout</a>
<p>
<div class="index" style="float: left;">
<b>Create</b>
<p>
<form action="create.php" method="post">
    type:<br />
    <select name="userGroup">
        <option value="">student | resident staff</option>
        <option value="">guest</option>
    </select>
    email:<br /><input type="email" name="email" placeholder="user@email.com" autocomplete="off" required><br />
    mobile: (optional)<br /><input type="tel" name="phone" pattern="^\d{11}$" placeholder="area code + phone (18001234567)" autocomplete="off" ><p>
    <p><input type="submit" name="submit" value="Submit" />
    </form>
</div>

<div class="index" style="float: left;">
<b>Search</b>
<p>
<form action="search.php" method="post">
    type:<br />
    <select name="userGroup">
        <option value="">student | resident staff</option>
        <option value="">guest</option>
    </select>
    email:<br /><input type="text" name="userName" placeholder="user@email.com" autocomplete="off" ><br />
    <p><input type="submit" name="submit" value="Submit" />
    </form>
</div>

<div class="index" style="float: left;">
<b>Bulk Create (guests)</b>
<p>
<form action="bulk.php" method="post">
    count:<br /><input type="number" name="count" placeholder="1-50 PPSKs may be created" autocomplete="off" min="1" max="50" ><br />
    prefix:<br /><input type="text" name="userNamePrefix" maxlength="6" placeholder="prefix02, prefix03, prefix04" autocomplete="off" >
    email:<br /><input type="email" name="email" placeholder="email to receive spreadsheet" autocomplete="off" ><br />
    organization:<br /><input type="text" name="organization" maxlength="25" placeholder="organization" autocomplete="off" ><br />
    <input type="hidden" name="groupId" value="">
    <p><input type="submit" name="submit" value="Submit" />
    </form>
</div>

<div class="index" style="float: left;">
<b>List</b>
<p>
<form action="list.php" method="get">
    <input type="submit" name="submit" value="Submit" />
    </form>
</div>

</body>
</html>