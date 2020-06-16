<?php
	session_start();
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Contact V4</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>W3.CSS Template</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="create_account/css/opensans-font.css">
        <link rel="stylesheet" type="text/css" href="create_account/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
        <!-- Main Style Css -->
        <link rel="stylesheet" href="create_account/css/style.css" />

        <body class="w3-black">
            <!--===============================================================================================-->
            <link rel="icon" type="image/png" href="form_file/images/icons/favicon.ico" />
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="form_file/vendor/bootstrap/css/bootstrap.min.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="form_file/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="form_file/vendor/animate/animate.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="form_file/vendor/css-hamburgers/hamburgers.min.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="form_file/vendor/animsition/css/animsition.min.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="form_file/vendor/select2/select2.min.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="form_file/vendor/daterangepicker/daterangepicker.css">
            <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="form_file/css/util.css">
            <link rel="stylesheet" type="text/css" href="form_file/css/main.css">
            <!--===============================================================================================-->
    </head>

    <body>

        <!------------------------------------ Icon Bar (Sidebar - hidden on small screens) ------------------------->
        <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
            <a href="index.php" class="w3-bar-item w3-button w3-padding-large w3-hover-purple">
                <i class="fa fa-home w3-xxlarge"></i>
                <p>HOME</p>
            </a>
            <?php

			if (isset($_SESSION["username"]))
			{
				$username = $_SESSION['username'];

				echo '<a href="account.php" class="w3-bar-item w3-button w3-padding-large w3-hover-purple">';
				echo '<i class="fa fa-user w3-xxlarge"></i>';
				echo '<p>USER: '.$username.'</p>';
				echo '</a>';
			}else{
				echo '<a href="account.php" class="w3-bar-item w3-button w3-padding-large w3-hover-purple">';
				echo '<i class="fa fa-user w3-xxlarge"></i>';
				echo '<p>ACCOUNT</p>';
				echo '</a>';
			}
		?>
                <a href="index_prenota.php" class="w3-bar-item w3-button w3-padding-large w3-hover-purple">
                    <i class="fa fa-eye w3-xxlarge"></i>
                    <p>PRENOTA</p>
                </a>
                <a href="manageDatabase.php" class="w3-bar-item w3-button w3-padding-large w3-hover-purple">
                    <i class="fa fa-database w3-xxlarge"></i>
                    <p>MANAGE database</p>
                </a>
        </nav>
        <!----------------------------------------------------------------------------------------------------------->

        <!----------------- Navbar on small screens (Hidden on medium and large screens) ---------------------------->
        <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
            <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
                <a href="index.php" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
                <a href="account.php" class="w3-bar-item w3-button" style="width:25% !important">ACCOUNT</a>
                <a href="index_prenota.php" class="w3-bar-item w3-button" style="width:25% !important">PRENOTA</a>
                <a href="manageDatabase.php" class="w3-bar-item w3-button" style="width:25% !important">MANAGE database</a>
            </div>
        </div>
        <!----------------------------------------------------------------------------------------------------------->

        <!---------------------------------------------- FORM INSERIMENTO ------------------------------------------->

        <div class="container-contact100" style="padding-left: 230px;">
            <span class="contact100-form-title">
					Crea account!
                </span>
            <div class="form-v1-content" style="margin-top: 0px;">
                <div class="wizard-form">
                    <form class="form-register" action="#" method="post">
                        <div id="form-total">
                            <!-- SECTION 1 -->
                            <h2>
			            	<p class="step-icon"><span>1</span></p>
			            	<span class="step-text">Personal Infomation</span>
			            </h2>
                            <section>
                                <div class="inner">
                                    <div class="wizard-header">
                                        <h3 class="heading" style="padding-bottom: 10px;">Personal Infomation</h3>
                                        <p>Completa i campi richiesti e procedi a compilare gli step successivi, così che potremo creare il tuo nuovo account.</p>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder">
                                            <fieldset>
                                                <legend>Nome</legend>
                                                <input type="text" class="form-control" id="first-name" name="first-name" placeholder="inserisci nome" required>
                                            </fieldset>
                                        </div>
                                        <div class="form-holder">
                                            <fieldset>
                                                <legend>Cognome</legend>
                                                <input type="text" class="form-control" id="last-name" name="last-name" placeholder="inserisci cognome" required>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2">
                                            <fieldset>
                                                <legend>Your Email</legend>
                                                <input type="text" name="your_email" id="your_email" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="example@email.com" required>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder">
                                            <fieldset>
                                                <legend>Password</legend>
                                                <input type="text" class="form-control" id="first-name" name="first-name" placeholder="inserisci password" required>
                                            </fieldset>
                                        </div>

                                        <div class="form-holder">
                                            <fieldset>
                                                <legend>Sesso</legend>
                                                <select name="month" id="month" style="padding-bottom: 11.400;
											margin-bottom: 3px;">
                                                    <option value="uomo">uomo</option>
                                                    <option value="donna">donna</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="form-row form-row-date">
                                        <div class="form-holder form-holder-2">
                                            <label class="special-label">Data di nascita</label>
                                            <select name="month" id="month">
                                                <option value="MM" disabled selected>DD</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                            </select>
                                            <select name="date" id="date">
                                                <option value="DD" disabled selected>MM</option>
                                                <option value="Feb">Feb</option>
                                                <option value="Mar">Mar</option>
                                                <option value="Apr">Apr</option>
                                                <option value="May">May</option>
                                            </select>
                                            <select name="year" id="year">
                                                <option value="YYYY" disabled selected>YYYY</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                                <option value="2015">2015</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- SECTION 2 -->
                            <h2>
			            	<p class="step-icon"><span>2</span></p>
			            	<span class="step-text">Id Infomation</span>
			            </h2>
                            <section>
                                <div class="inner">
                                    <div class="wizard-header">
                                        <h3 class="heading">Peronal Infomation</h3>
                                        <p>Completa i campi richiesti e procedi a compilare gli step successivi, così che potremo creare il tuo nuovo account.</p>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder">
                                            <fieldset>
                                                <legend>Carta identità</legend>
                                                <input type="text" class="form-control" id="first-name" name="first-name" placeholder="exemple: 198-17-0314" required>
                                            </fieldset>
                                        </div>
                                        <div class="form-holder">
                                            <fieldset>
                                                <legend>Numero patente</legend>
                                                <input type="text" class="form-control" id="last-name" name="last-name" placeholder="example: 705-87-4807" required>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder">
                                            <fieldset>
                                                <legend>Numero patente</legend>
                                                <input type="text" class="form-control" id="first-name" name="first-name" placeholder="example: 671-133-7227" required>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- SECTION 3 -->
                            <h2>
			            	<p class="step-icon"><span>3</span></p>
			            	<span class="step-text">Car Infomation</span>
			            </h2>
                            <section>
                                <div class="inner">
                                    <div class="wizard-header">
                                        <h3 class="heading">Peronal Infomation</h3>
                                        <p>Completa i campi richiesti e procedi a confermare il modulo, così che potremo creare il tuo nuovo account.</p>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder">
                                            <fieldset>
                                                <legend>Password</legend>
                                                <select name="month" id="month" style="padding-bottom: 11.400;
											margin-bottom: 3px;">
                                                    <option value="uomo">uomo</option>
                                                    <option value="donna">donna</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                        <div class="form-holder">
                                            <fieldset>
                                                <legend>Password</legend>
                                                <select name="month" id="month" style="padding-bottom: 11.400;
											margin-bottom: 3px;">
                                                    <option value="uomo">uomo</option>
                                                    <option value="donna">donna</option>
                                                </select>
                                            </fieldset>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-holder form-holder-2">
                                            <input type="text" class="form-control input-border" id="ssn" name="ssn" placeholder="Descrizione.." required>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div id="dropDownSelect1"></div>

        <!--===============================================================================================-->
        <script src="form_filevendor/jquery/jquery-3.2.1.min.js"></script>
        <!--===============================================================================================-->
        <script src="form_filevendor/animsition/js/animsition.min.js"></script>
        <!--===============================================================================================-->
        <script src="form_filevendor/bootstrap/js/popper.js"></script>
        <script src="form_filevendor/bootstrap/js/bootstrap.min.js"></script>
        <!--===============================================================================================-->
        <script src="form_filevendor/select2/select2.min.js"></script>
        <script>
            $(".selection-2").select2({
                minimumResultsForSearch: 20,
                dropdownParent: $('#dropDownSelect1')
            });
        </script>
        <!--===============================================================================================-->
        <script src="form_filevendor/daterangepicker/moment.min.js"></script>
        <script src="form_filevendor/daterangepicker/daterangepicker.js"></script>
        <!--===============================================================================================-->
        <script src="form_filevendor/countdowntime/countdowntime.js"></script>
        <!--===============================================================================================-->
        <script src="form_filejs/main.js"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
        </script>
        <script src="create_account/js/jquery-3.3.1.min.js"></script>
        <script src="create_account/js/jquery.steps.js"></script>
        <script src="create_account/js/main.js"></script>

    </body>

    </html>