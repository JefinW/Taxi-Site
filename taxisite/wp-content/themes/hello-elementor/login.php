<?php
/**
* Template Name: login
*/

get_header();

if ( ! empty($_POST))
{
    $email = sanitize_text_field($_POST['email']) ?: NULL;
    $password = sanitize_text_field($_POST['password']) ?: NULL;
        

    $args = array(
        'method'  => 'POST',
        'timeout' => 45,
        'headers' => array(),
        'body'    => array(
            'email'     => $email,
            'password'  => $password,
        ),
    );

    $postUrl = 'https://reqres.in/api/login';
        
    $data = wp_remote_post($postUrl, $args);
        
    if ( ! empty($data))
        $displayFormMessage = TRUE;
}
?>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <main>
        <div class="container">
            <section>
                <div class="reglog-form">
					<h1 class="reglog-form-head">
						Login
					</h1>
                    
                    <?php if ( ! empty($displayFormMessage)) { ?>
                    <div class="alert alert-success mt-4 form-message" role="alert">
                        <p class="m-0">Thanks for Logging in</p>
                    </div>
                    <?php } ?>
                    
                    <!-- Modal -->
                    <form method="post" action="">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="email">
                                            Your Email Address
                                        </label>
                                        <input type="email" name="email" required="required" id="" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">
                                            Password
                                        </label>
                                        <input type="password" name="password" id="" class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn-brand pop-up-send-btn">Send</button>
                                </div>
                            </form>
                </div>
            </section>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+Or
