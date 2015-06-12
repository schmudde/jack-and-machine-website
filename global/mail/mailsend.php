<html>
<head>
<meta content='text/html; charset=UTF-8' http-quiv='Content-Type' />

<title>Jack and the Machine: Subscription Thank You</title>

<!-- ============= CSS ============ -->
<!-- FontAwesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<!-- Custom CSS -->
<link href='/global/css/main.min.css' rel='stylesheet' type='text/css'>

</head>
<body>

<?php

    /* Include the Composer autoload file, which includes the Drewm\MailChimp PHP wrapper */
    require __DIR__ . '/../../bin/vendor/autoload.php';

    /* Use the MailChimp PHP wrapper library and create a new session */
    use Drewm\MailChimp;
    $MailChimp = new MailChimp('e380a781106d4a1f1905b2e412a7103c-us6');

    /* Grab the user's post data */
    $userFormData = $_POST;

    /* Use the MailChimp PHP wrapper's function to subscribe */
    $result = $MailChimp->call('lists/subscribe', array(
                   'id' => '37d2c184d6',
                 'email' => array('email'=>$userFormData["email"]),
                 'merge_vars' => array('FNAME'=>$userFormData["fname"], 'LNAME'=>$userFormData["lname"]),
                 'double_optin' => true,
                 'update_existing' => true,
                 'replace_interests' => false,
                 'send_welcome' => false,
                 ));
?>

<div class="container" itemscope itemtype="http://schema.org/Movie">

    <section id="frontPage">
            <div class="videoContainer">
	        <div id="titleContainer">
                    <div id="headerContainer">
	                <h1 itemprop="name">JACK and the MACHINE</h1>
			<h2 itemprop="description">An Interactive Documentary</h2>
                    </div>
		    <div id="logoContainer">
	                <img src="/global/img/Bee_small.png" />
		    </div>
		</div>

		<div class="clearfix"></div>

		<div>
         	    <span><strong>Thank You!</strong></span>
                    <p>We're sending you a confirmation eMail right now, please check your inbox. We look forward to sharing more with you in the future. Also, please spread the word. We think this is an important story with relevant themes.</p>
		</div>
    	    </div>
    </section>

</div>

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Lato:400, 400italic, 700' rel='stylesheet' type='text/css'>

</body>
</html>
