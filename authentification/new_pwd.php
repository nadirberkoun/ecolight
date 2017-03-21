<?php
require_once 'pdo.php';
?>

<!-- All the files that are required -->
<link rel="stylesheet" href="style.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="index.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"  charset=utf-8"/>

<!-- FORGOT PASSWORD FORM -->
<div class="text-center" style="padding:50px 0">
    <div class="logo">forgot password</div>
    <!-- Main Form -->
    <div class="login-form-1">
        <form id="forgot-password-form" class="text-left">
            <div class="etc-login-form">
                <p>When you fill in your registered email address, you will be sent instructions on how to reset your password.</p>
            </div>
            <div class="login-form-main-message"></div>
            <div class="main-login-form">
                <div class="login-group">
                    <div class="form-group">
                        <label for="fp_email" class="sr-only">Email address</label>
                        <input type="text" class="form-control" id="fp_email" name="fp_email" placeholder="email address">
                    </div>
                </div>
                <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
            </div>
            <div class="etc-login-form">
                <p>already have an account? <a href="connexion.php">login here</a></p>
                <p>new user? <a href="enregistrement.php">create new account</a></p>
            </div>
        </form>
    </div>
    <!-- end:Main Form -->
</div>
