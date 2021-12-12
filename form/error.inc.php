<style type="text/css">
    * {
        margin: 0;
        padding: 0;
        border: 0;
        font-family: 'Roboto', sans-serif;
    }

    header {
        position: fixed;
        width: 100%;
        top: 0;
    }

    header nav ul li {
        display: inline-block;
    }

    .other {
        background-color: burlywood;
    }

    .other header {
        background-color: #808080;
    }

    .other h1 {
        display: inline-block;
        width: 40%;
        text-align: left;
        font-family: 'Qahiri', sans-serif;
        font-size: 70px;
        margin: 20px 0 20px 30px;
    }

    .other header nav {
        display: inline-block;
        width: 50%;
        text-align: right;
    }

    .other nav a {
        text-decoration: none;
        color: black;
        margin: 10px;
        padding: 10px;
        background: white;
        transition: .5s;
        font-size: 20px;
        border-radius: 2px;
    }

    .other nav a:hover {
        color: burlywood;
        background: black;
        transition: .5s;
    }

    main {
        padding-top: 120px;
        max-width: 70%;
        margin: 0 auto;
        text-align: center;
    }

    h2 {
        margin: 20px 0;
    }

    .container p {
        margin-bottom: 15px;
    }

    footer {
        background: #808080;
        color: black;
        text-align: center;
        padding: 20px 0;
        margin-top: 40px;
    }

    footer p:first-of-type {
        font-weight: bold;
        font-size: 25px;
        margin: 0 0 15px 0;
    }

    footer p:last-of-type {
        margin: 15px 0 0 0;
    }

    footer a {
        color: burlywood;
        font-size: 25px;
        margin: 15px;
        transition: .3s;
    }

    footer a:hover {
        color: white;
        transition: .3s;
    }
</style>

<head>
    <meta charset="utf-8">

    <title>Stormy Gaylord</title>

    <!------------------------------------------Favicon--------------------------------------------------->

    <!-----------------------------------------Google Fonts----------------------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Qahiri&family=Roboto:wght@300&display=swap" rel="stylesheet">
        
    <!---------------------------------------Font Awesome kit code----------------------------------------->
    <script src="https://kit.fontawesome.com/4443f35538.js" crossorigin="anonymous"></script>

    <!-----------------------------------------------Scripts----------------------------------------------->

</head>

<body class="other">
    <header>
        <h1>Stormy Gaylord</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Me</a></li>
                <li><a href="media.html">Media</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="container">
			<h2>Missing fields</h2>
			<p>Sorry, you have not completed all of the required fields.</p>
			<p>Please click <a href="#" onClick="history.go(-1)">back</a> to complete the following required fields and resubmit.</p>

			<ul>
			<?php
				for($i=0; $i<count($this->missing_required_fields); $i++){
					echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
				}
			?>
			</ul>
        </div>
    </main>

    <footer>
        <p>Let's Connect!</p>
        <a href="https://www.instagram.com/stormy_weatherrr/" target="_blank"><i class="fab fa-instagram"></i></a><a href="https://www.youtube.com/channel/UCr9E_sHwx6g_S07lcXTOp1Q/featured" target="_blank"><i class="fab fa-youtube"></i></a><a href="https://www.facebook.com/stormy.gaylord/" target="_blank"><i class="fab fa-facebook-square"></i></a>
        <p>This page is designed by Stormy Gaylord.</p>
    </footer>
</body>