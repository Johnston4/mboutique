<img src="assets/images/contact-image.png" id="contact">
<div id="page4">
    <div id="page4_info">
        <p class="p_title" id="p_mobile">
            Visit us!
        </p>
        <p>
            Monday - Friday | 10am - 9pm<br>
            Saturday | 10am - 8pm<br>
            Sunday | 11am - 7pm<br>
            Closed Thanksgiving Day, Christmas Day and<br> Easter Day
        </p>
        <p>
            1625 Post St<br>San Francisco, CA 94115
        </p>
        <p>
            949-800-3111
        </p>
        <p>
            <a class="email" href="mailto:order@mboutique.com">order@mboutique.com</a>
        </p>
        <p>
            Send your questions, comments and flavor suggestions or place an order!
        </p>
    </div>
    <div id="page4_contact">
        <p class="p_title">
            Contact Form
        </p>
        <?php
        if(!empty($_POST)){
            echo 'Thank you for your submission. We will respond as quickly as possible! ~The MBoutique Team';
            $name= $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
        }
        else{
            $name='';
            $email ='';
            $phone ='';
            $subject ='';
            $message ='';
        ?>
        <form id="page4_form" action="index.php?page=contact" method="post">
            <input type="text" name="name" placeholder="Name" value="<?=$name;?>">
            <input type="text" name="email" placeholder="Email" value="<?=$email;?>">
            <input type="text" name="phone" placeholder="Phone" value="<?=$phone;?>">
            <input type="text" name="subject" placeholder="Subject" value="<?=$subject;?>">
            <textarea name="message" placeholder="Message"><?=$message;?></textarea>
        <button name="submit">Submit</button>
            <?php
        }
            ?>

        </form>
    </div>
    <div>
        <img class="image_hide" id="image" src="assets/images/macarons-image.png">
    </div>
</div>