<?php //Insert additonal php code here....
 ?>
<DOCTYPE html>
<html>
    <head>
    	<link href="css/Layout.css" rel="stylesheet" type="text/css">
    	<link href="css/Menu.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="javascript/nightmode.js"></script>
        <title><?php echo $title; ?></title>
        <link rel="shortcut icon" type="image/png" href="assets/favIcon.png">
    	<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div id="Holder">
        	<div id="Header"></div>
        	<div id="NavBar">
        		<nav>
        			<ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
        			</ul>
        		</nav>
        	</div>
        	<div id="Content">
        		<div id="PageHeading">
        			<?php echo $pageheading; ?>
        		</div>
        		<div id="ContentLeft">
                <h6>Nightmode</h6>
                <button class="StyleButton" onclick="darktheme()">Dark Theme</button>
                <button class="StyleButton" onclick="lighttheme()">Light Theme</button>
                <?php echo $contentleft; ?>
        		</div>
        		<div id="ContentRight">
                    <?php echo $contentright; ?>
                </div>
        	</div>
        </div>
        <footer>
            <p>Copyright [your company/name] 2018</p>
            <p></p>
            <p>All Rights Reserved</p>
            </footer>
    </body>
</html>
