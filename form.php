<?php include('mail_handler.php'); ?>

<link rel="stylesheet" href="form.css" type="text/css">

<div class="main">
    <div class="info">Give Your Feedback!</div>
    <form action="<?= $_SERVER["PHP_SELF"]; ?>" method="post" name="form" class="form-box">
        <label for="name">Name</label><br>
        <input id="name" type="text" name="name" class="inp" placeholder="Enter Your Name" required><br>
        <label for="email">Email ID</label><br>
        <input id="email" type="email" name="email" class="inp" placeholder="Enter Your Email" required><br>
        <label for="phone">Phone</label><br>
        <input id="phone" type="tel" name="phone" class="inp" placeholder="Enter Your Phone" required><br>
        <label for="message">Message</label><br>
        <textarea id="message" name="msg" class="msg-box" placeholder="Enter Your Message Here..."
                  required></textarea><br>
        <input type="submit" name="submit" value="Send" class="sub-btn"><br>
        <div class="success"> <?= $success ?> </div>
    </form>
</div>


