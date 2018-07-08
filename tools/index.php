<html>
<head>
    <title>Doga's Tools</title>
    <link rel="stylesheet" type="text/css" href="tools.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
<p>
<h1>Doga's Tools</h1></p>
<br>
<p>
<h3>UUID Fetcher</h3></p>
<form action="index.php" method="post">
Username: <input type="text" id="uname" name="uname"><br>
UUID: <p id="uuid"></p><br>
<input type="submit" class="button" value="Fetch" name="fetchUUID">
</form>

</body>

</html>
<?php
fetchUUID();

function fetchUUID(){
    $var = @file_get_contents('https://api.mojang.com/users/profiles/minecraft/' + $_POST['uname']);
    echo $var;
}

?>