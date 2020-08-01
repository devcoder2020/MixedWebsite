<!doctype html>
<html>
<head>
    <title>PHP and HTML Practicle Test</title>
    <link rel="stylesheet" type="text/css" href="css/tmp.css" />
</head>
<body>
    <!--

    1. HTML
    2. PHP
    3. CSS (working on image class)
    4. External Javascript 
    5. Image
    Folders:
        css
        images
        js

    including an image 
    -->
    <div class="container">
    <h1 class="h1_title">CV | Resume: Lee Haynes</h1>
  
    <?php
    // Definig the variables 
	/*$firstName = "Lee ";
	$lastName = "Haynes";
    $fullname = ($firstName.$lastName);*/
    $address = "76, Bramble Drive";
    $City = "Carlton, Nottingham";
    $postalCode = "NG36NE";
    $fullAddress = ($address." ".$City." ".$postalCode);
    $tel = "0785 374 0636 ";
    $position = "Position sought Junior Web Developer";
    ?>

    <?PHP 
    // cotacts 
    //print("<h3>".$fullname."</h3>");
    print("<h3 class=\"address\">".$fullAddress."</h3>");
    print("<h3 class=\"tel\">".$tel."</h3>");
    ?>

    <?PHP
        print("<h2>Tecnical Profile</h2>");
    ?>

    <?="<p>";?>
        I am a motivated self-taught web developer, seeking a position, of "junior front-end web developer". Skills to date include SHOPIFY website design, SEO and Social Media Marketing. I am currently studying the full stack curriculum. I have several years <strong>"personal"</strong> experience with WordPress, May 2013 - present. 
    <?="</p>";?>

    <ul>
         <li>Presently studying Full-Stack Development. Content Includes: <strong>HTML 5, CSS3, Javascript and jQuery, Bootstrap, Ajax, PHP, WordPress, MySQL, and Python</strong></li>
         <li><strong>Sections Completed: HTML, CSS, Bootstrap, Javascript. </strong></li>
         <li><strong>Sections In progress: PHP, Python and GitHub. </strong></li>
         <ul>
         <li><strong>IDE's & Editors: Dreamweaver and MS Expression Web 4, Visual Studio 2019, PyCharm, VS Code</strong></li>
         </ul>
         <P><strong>Additional studies & Certifications </strong></P>
         <ul>
         <li><strong>MTA Networking Fundamentals and MTA Software Development Fundamentals</strong></li>
         <li><strong>MVA Software Development Fundamentals</strong></li>
         <li><strong>Networking Concepts and Network Security fundamental.</strong></li>
         <li><strong>Digital Literacy- Computer Security and Privacy.</strong></li>
         <li><strong>ECDL Level 2, 2019 and GDPR Certifications.</strong></li>
         <li><strong>Python: The Absolute Beginner Master Python Today 16th of / July / 2020 (Bit Degree).</strong></li>
         <li><strong>The Complete Git and GitHub 2020 Course 26th of / July / 2020 (Bit Degree).</strong></li>
         <li><strong>Introduction to Coding for Beginners HTML and CSS Online Course 26h of / July / 2020 (Bit Degree).</strong></li>
         </ul>
    </ul>











   
    <!-- Shorthand Notation for papagraph --> 

    <?="<p>I have a certifiect in Python</p>";?>

    <hr />
    
    <a href="#"><img src="images/Python.jpg" class="cert" /></a>

    <hr />
    <script text="text/javascript" src="js/tmp.js" /></script>

    <?= "<p>" ?>
        This site is under construction, and is a work in progress
    <?= "</p>" ?>
    </div>
</body>
</html>