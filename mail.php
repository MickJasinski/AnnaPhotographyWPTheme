<?php /* Template Name: Mail */

get_header(); ?>
<div class="contact-form">
<?php
      $to      = 'me@micky.click';
      $name    = $_POST['name'];
      $email   = $_POST['email'];
      $subject = 'Contact form. Mail from ' . $name;
      $message = $_POST['message'];
      $headers = 'From: ' . $name . ' (' . $email . ')';
    //   $headers .= 'Content-Type: text/html; charset=utf-8';
      mail($to, $subject, $message, $headers);
      echo '<h1>Your message has been sent. Thank you.</h1>';
    ?>
</div>

<?php
    get_footer();

?>