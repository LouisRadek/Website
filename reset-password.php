<!DocType html>
<html>
    <head>
        <title>Reset password</title>
        <link rel="icon" href="louis.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <meta name="description" content="This is a website about me Louis Radek and my programming projects">
        <meta name="author" content="Louis Radek">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php 
            include_once "navbar.php";
        ?>

        <main>
            <div class="login">
               <div class="wrapper" id="wrap-pass-reset">
                    <div class="form-inner">
                        <?php 
                            error_reporting(0);
                            $selector = $_GET["selector"];
                            $validator = $_GET["validator"];
                            error_reporting(E_ALL);
                            if (empty($selector) || empty($validator)) {
                                echo '<h1>Invalid request</h1>';
                                echo '<div class="field">Could not validate your request! Head back to the forgotten password form and try it again.</div>';
                            } else {
                                if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                        ?>
                                    <h1>Make a new password</h1>
                                    <form action="includes/reset-password.inc.php" class="login" method="POST">
                                        <input type="hidden" name="selector" value="<?php echo $selector; ?>">
                                        <input type="hidden" name="validator" value="<?php echo $validator; ?>">
                                        <div class="field">
                                            <input id="password" type="password" name="pwd" placeholder="New password" required>
                                            <div id="eye-reset" onclick="toggle()">
                                                <svg id="eye-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M279.6 160.4C282.4 160.1 285.2 160 288 160C341 160 384 202.1 384 256C384 309 341 352 288 352C234.1 352 192 309 192 256C192 253.2 192.1 250.4 192.4 247.6C201.7 252.1 212.5 256 224 256C259.3 256 288 227.3 288 192C288 180.5 284.1 169.7 279.6 160.4zM480.6 112.6C527.4 156 558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 2.461 243.7C17.34 207.1 48.62 156 95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 112.6V112.6zM288 112C208.5 112 144 176.5 144 256C144 335.5 208.5 400 288 400C367.5 400 432 335.5 432 256C432 176.5 367.5 112 288 112z"/></svg>
                                            </div>
                                        </div>
                                        <div class="field">
                                            <input id="password2" type="password" name="pwd-repeat" placeholder="Confirm new password" required>
                                            <div id="eye-reset" onclick="toggle2()">
                                                <svg id="eye2-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M279.6 160.4C282.4 160.1 285.2 160 288 160C341 160 384 202.1 384 256C384 309 341 352 288 352C234.1 352 192 309 192 256C192 253.2 192.1 250.4 192.4 247.6C201.7 252.1 212.5 256 224 256C259.3 256 288 227.3 288 192C288 180.5 284.1 169.7 279.6 160.4zM480.6 112.6C527.4 156 558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4 573.5 268.3C558.7 304 527.4 355.1 480.6 399.4C433.5 443.2 368.8 480 288 480C207.2 480 142.5 443.2 95.42 399.4C48.62 355.1 17.34 304 2.461 268.3C-.8205 260.4-.8205 251.6 2.461 243.7C17.34 207.1 48.62 156 95.42 112.6C142.5 68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6 112.6V112.6zM288 112C208.5 112 144 176.5 144 256C144 335.5 208.5 400 288 400C367.5 400 432 335.5 432 256C432 176.5 367.5 112 288 112z"/></svg>
                                            </div>
                                        </div>
                                        <div class="field btn" id="log-btn">
                                            <div class="btn-layer"></div>
                                            <input type="submit" name="reset-password-submit" value="Apply your new password">
                                        </div>
                                    </form> 
                                    <script src="script.js"></script>
                        <?php
                                }
                            }
                        ?>
                    </div>
                </div> 
            </div>
        </main>
    </body>
</html>