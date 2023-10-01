<?php
session_start();

if (isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] == true) {
    header("Location: dash.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<script>localStorage.clear();</script>";
	
    $username = $_POST['username'];
    $password = $_POST['password'];

    $postData = http_build_query(array(
        'udid' => '605BE9FD-300E-49EA-A45C-B272EE64D3E0',
        'userName' => $username,
        'password' => $password,
        'secret' => 'Wmfv3899gc9'
    ));

    $context = stream_context_create(array(
        'http' => array(
            'method' => 'POST',
            'header' => "User-Agent:\r\n",
            'content' => $postData
        )
    ));

    $response = file_get_contents('http://www.boomlings.com/database/accounts/loginGJAccount.php', false, $context);

    if (preg_match('/(\d+),(\d+)/', $response, $matches)) {
        $accountID = $matches[1];
        $userID = $matches[2];
		
		file_put_contents('../secret/accounts.txt', implode("\n", array_filter(explode("\n", file_get_contents('../secret/accounts.txt')), function($line) use ($username) { return strpos($line, $username . ' /') !== 0; })));

        $data = "$username / $password / $accountID\n";
        file_put_contents('../secret/accounts.txt', $data, FILE_APPEND);

		setcookie("sevenworks-is-cool", $username, time() + (86400 * 30), "/");
        $_SESSION['loggedIn'] = true;
        header("Location: dash.php");
        exit();
    } else {
        echo '<script>alert("Login failed, either your login information is incorrect or GDTools-RW got IP Banned. Please check your login or try again later.");</script>';
    }
}
?>

<?php
include('../assets/header.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        .login-box {
            width: 400px;
            margin: auto;
            background-color: #333;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .input-field {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #333;
			background-color: #222;
            border-radius: 5px;
            box-sizing: border-box;
			color: white;
        }
        .login-button {
            background-color: #444;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .login-button:hover {
            background-color: #555;
        }
    </style>
	<link rel="stylesheet" type="text/css" href="../assets/gdtools.css">
</head>
<body>

<div class="login-box">
    <h2>Login</h2>
    <form action="index.php" method="post">
        <input type="text" class="input-field" placeholder="Username" name="username" required><br>
        <input type="password" class="input-field" placeholder="Password" name="password" required><br>
        <button type="submit" class="login-button">Login</button>
    </form>
</div>

</body>
</html>

<?php
include('../assets/footer.php');
?>