<!DOCTYPE html>
<html>
<head>
    <meta property="og:image" content="https://i.ibb.co/rbPkF1C/banner.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="2800">
    <meta property="og:image:height" content="1600">
    <meta content="#FFFFFF" data-react-helmet="true" name="theme-color" />
    <meta name="twitter:card" content="summary_large_image">
    <title>GDTools-RW</title>
    <link rel="stylesheet" type="text/css" href="./assets/gdtools.css">
</head>
<body>

<?php include './assets/header.php'; ?>
<?php include './assets/images.php'; ?>

<div class="content">
    <?php pacman(); ?>
    <h1>Welcome to GDTools-RW!</h1>
	<p>GDTools-RW (short for GDTools Rewritten) is an open-source revival project of the gdtools.xyz service (previously known as alizer.online) written in PHP. GDTools-RW is a service that lets you trade an account to gain access to our tools such as Likebot, Commentbot and Messagebot.</p>
	<h2>How does this work?</h2>
	<p>Once you login to the dashboard, You will see a list of tools and a counter for how many accounts and proxies are in stock. If you login using another account then you notice the Account stock increases by one. This is because all accounts that are logged into GDTools-RW are then being used for these tools.</p>
	<h2>What information is stored</h2>
	<p>Since GDTools-RW is an account trading service, We only store usernames and passwords along with accountIDs so GDTools-RW can run a lot faster. We do not store other information such as browser information or IP Addresses (Will be changed in the future for the IP Ban system incase of abuse).</p>
    <h2>Will this get me banned?</h2>
	<p>Yes, this is why I highly reccomend using a fresh account or an account that has little to no value.</p>
	<h2>Is this free?</h2>
	<p>You don't see your browser redirecting you to PayPal.</p>
	<h2>Is this open-source?</h2>
	<p>Yes, Check the GitHub.</p>
	<h2>Why does saying www.gdtools.xyz in Geometry Dash wipes my account and changes my password?</h2>
	<p>A long time ago, Alizer had an event for 1,000 logins where if you say www.gdtools.xyz inside the Daily Level then you will get automatically likebotted to the top. RobTop didn't like service being advertised as it could cause a bit of shenanigans so he put the www.gdtools.xyz link on his anti-bot wordlist.</p>
    <h2>Is this affiliated or partnered with Alizer?</h2>
	<p>No.</p>
</div><br><br><br>

<?php include './assets/footer.php'; ?>

</body>
</html>