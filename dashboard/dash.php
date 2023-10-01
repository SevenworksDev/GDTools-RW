<?php
session_start();

if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
    header("Location: index.php");
    exit();
}

$accountCount = count(file('../secret/accounts.txt'));
$proxyCount = count(file('../secret/proxies.txt'));

include('../assets/header.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px;
        }

        .dashboard {
            text-align: center;
            margin-bottom: 20px;
        }

        .content-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            grid-gap: 20px;
            width: 50%;
        }

        .counter, .tools, .achievements, .news {
            background-color: #333;
            color: white;
            font-family: Arial, sans-serif;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="../assets/gdtools.css">
</head>
<body>

<div class="dashboard">
    <h2>Welcome to the GDTools-RW dashboard <?php echo $_COOKIE['sevenworks-is-cool']; ?>!</h2>
</div>

<div class="content-container">
    <div class="counter">
        <h1>Counter</h1>
        Logins: <?php echo $accountCount; ?><br>
        Proxies: <?php echo $proxyCount; ?>
    </div>

    <div class="tools">
        <h1>Tools</h1>
        <a href="./message.php">Message Bot</a><br>
    </div>

    <div class="achievements">
        <h1>Achievements (WIP)</h1>
        <div style="background-color:#222;border-radius:10px;">This is where achievements are kept and achievements to still unlock, what do I do here?</div><br>
    </div>

    <div class="news">
        <h1>News</h1>
        <div style="background-color:#222;border-radius:10px;"><b>September 30, 2023</b> - tomorrow is gonna be chaotic</div><br>
    </div>
</div>

</body>
</html>


<?php
include('../assets/footer.php');
?>