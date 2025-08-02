<section class="contact" id="scrollToContact">
    <div class="mq-container mh--flex">
        <div class="hidden-md">
            <h2 class="h2Subhead">Let's Work Together</h2>
            <p>Have a project on your mind. Give me a call, write us an email or fill out the form.</p>
        </div>
        <aside>
            <div class="hidden-sm">
                <h2 class="h2Subhead">Let's Work Together</h2>
                <p>Have a project on your mind. Give me a call, write us an email or fill out the form.</p>
            </div>
            <div>
                <h6>Contact:</h6>
                <p><img src="./public/assets/images/whatsapp-icon-w.svg" alt=""> <a href="https://wa.me/923442687412"
                        target="_blank">+92-3442687412</a></p>
                <p><img src="./public/assets/images/icon-email-w.svg" alt=""> <a
                        href="mailto:info@maroofhaider.com">info@maroofhaider.com</a></p>
            </div>
            <div>
                <h6>Open Working Timing:</h6>
                <p><img src="./public/assets/images/icon-time-w.svg" alt=""> Works in your local time zone (CST)</p>
            </div>
        </aside>
        <div class="contact-content">
            <form class="contact-form" action="sendmail.php" method="post">
                <div class="form-row">
                    <input type="text" placeholder="Full Name" id="name" name="name" required pattern="[a-zA-Z ]+"
                        class="form-input">
                    <input type="email" placeholder="Email Address" id="email" name="email" required class="form-input">
                    <input type="text" placeholder="Company" id="company" name="company" required pattern="[a-zA-Z ]+"
                        class="form-input">
                    <input type="tel" placeholder="Phone" id="phone" name="phone" required pattern="\+?[0-9]+"
                        class="form-input">
                </div>
                <div class="form-row">
                    <textarea name="brief" rows="6" id="brief" placeholder="Project Brief..."
                        class="form-input"></textarea>
                </div>
                <div class="form-row">
                    <!-- <input type="submit" class="mh--button clr-yellow" value="Submit"> -->

                    <button class="g-recaptcha mh--button clr-yellow" data-sitekey="6LeF5Q8qAAAAAF_JqZFO65FKvrp_6HB87t5MZ5ka" data-callback='onSubmit'
                        data-action='submit'>Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>