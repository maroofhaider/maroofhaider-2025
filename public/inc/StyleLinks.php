<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<link rel="icon" type="image/svg+xml" href="./public/assets/images/favicon.svg">

<link rel="stylesheet" type="text/css" href="./public/assets/css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="./public/assets/css/Style.min.css">

<script src="https://www.google.com/recaptcha/enterprise.js?render=6LeF5Q8qAAAAAF_JqZFO65FKvrp_6HB87t5MZ5ka"></script>

<script>
    grecaptcha.ready(function() {
        document.querySelector('.contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            grecaptcha.execute('6LeF5Q8qAAAAAF_JqZFO65FKvrp_6HB87t5MZ5ka', {action: 'submit'}).then(function(token) {
                let input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'g-recaptcha-response';
                input.value = token;
                e.target.appendChild(input);
                e.target.submit();
            });
        });
    });
</script>