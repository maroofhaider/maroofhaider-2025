<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Maroof Haider | UI/UX Designer and Frontend Developer | Pakistan</title>
	<meta name="description" content="Maroof Haider: Leading Graphic & UI/UX Designer in Pakistan. Get expert CBD email marketing designs and more. Free email concept available!">
	<meta name="keywords" content="wordpress, CBD, cbd email design, webdesign, email marketing, logo branding, Graphic Design, UI/UX Design, Frontend Development, CBD email marketing, e-commerce designs, mobile app design, Hire Graphic Designer, html developer">
	<meta name="author" content="maroof haider">
	<?php include_once("./public/inc/StyleLinks.php"); ?>
</head>

<body>
    <div class="main-layout">
        <div class="hero-wrap">

            <?php include_once("sendmail.php"); ?>
            <a href="index.php" style="z-index: 1; position: relative; display: block;"><img src="./public/assets/images/logo.svg" width="300px"
                style="left:50%; top: 50px; margin-left: -150px; position: absolute;" alt="maroofHaider.com"></a>
            <div class="splash mq-container">
                <div class="hero-content">

                    <h1 id="hero-title"><a href="index.php">
                        <a href="index.php"><span><svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="8" cy="8" r="7" fill="#ff0000" stroke="#B7121F" stroke-width="2"></circle></svg> BACK TO MAIN</span></a>COMING SOON!</h1>

                    <div class="mh-flex">
                        <a class="mh--button large" href="#scrollToContact">Book Your New Look Nows <svg
                                class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-i4bv87-MuiSvgIcon-root"
                                focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="ArrowOutwardIcon">
                                <path d="M6 6v2h8.59L5 17.59 6.41 19 16 9.41V18h2V6z"></path>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
            <div class="splash-bottom">
                <div class="mq-container">
                    <span><img src="./public/assets/images/icon-time-w.svg" alt=""> Works in your local time zone
                        (CST)</span>
                    <span>Designer + <strong>Frontend Developer</strong></span>
                </div>
            </div>
        </div>

        <section class="contact" id="scrollToContact">
            <div class="mq-container mh--flex">
                <aside>
                    <div>
                        <h2 class="h2Subhead">Let's Work Togather</h2>
                        <p>Have a project on your mind. Give me a call, write us an email or fill out the form.</p>
                    </div>
                    <div>
                        <h4>Contact:</h4>
                        <p><img src="./public/assets/images/whatsapp-icon-w.svg" alt=""> <a
                                href="https://wa.me/923442687412" target="_blank">+92-3442687412</a></p>
                        <p><img src="./public/assets/images/icon-email-w.svg" alt=""> <a
                                href="mailto:info@maroofhaider.com">info@maroofhaider.com</a></p>
                    </div>
                    <div>
                        <h4>Open Working Timing:</h4>
                        <!-- <p><img src="./public/assets/images/icon-time-w.svg" alt=""> Mon - Fri 7:00 AM to 3:00 PM (CST)</p> -->
                        <p><img src="./public/assets/images/icon-time-w.svg" alt=""> Works in your local time zone (CST)
                        </p>
                    </div>
                </aside>
                <div class="contact-content">
                    <form class="contact-form" id="contact_submit_footer" action="sendmail.php" method="post">

                        <div class="form-row">
                            <input type="text" placeholder="Full Name" id="name" name="name" required
                                pattern="[a-zA-Z ]+" class="form-input">
                            <input type="email" placeholder="Email Address" id="email" name="email" required
                                class="form-input">
                            <input type="text" placeholder="Company" id="company" name="company" required
                                pattern="[a-zA-Z ]+" class="form-input">
                            <input type="tel" placeholder="Phone" id="phone" name="phone" required pattern="[0-9]+"
                                class="form-input">
                        </div>
                        <div class="form-row">
                            <textarea name="brief" rows="6" id="brief" placeholder="Project Brief..."
                                class="form-input"></textarea>
                        </div>
                        <div class="form-row">
                            <div class="g-recaptcha" style="position: absolute; opacity: 0; pointer-events: none;"
                                data-sitekey="6LeF5Q8qAAAAAF_JqZFO65FKvrp_6HB87t5MZ5ka" data-callback="onSubmitFooter"
                                data-action='submit'>
                            </div>
                            <input type="submit" class="mh--button" value="Submit">
                        </div>

                    </form>
                </div>

            </div>
        </section>

        <?php include_once("./public/inc/footer.php"); ?>

    </div>
</body>

</html>