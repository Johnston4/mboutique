<?php
$menu = array("about"=>
    array('link_text' => 'Home', 'link_url' => 'index.html'),
    "our_macarons"=>
        array('link_text' => 'Our Macarons','link_url' => 'our_macarons.html'),
    "gifts_parties"=>
        array('link_text' => 'Gifts & Parties','link_url' => 'gifts_parties.html'),
    "contact"=>
        array('link_text' => 'Contact Us', 'link_url' => 'contact.html'),
);

foreach($menu as $value){
    print(
    "<li>
<a href='{$value['link_url']}'>{$value['link_text']}<
/a>
	   </li>");
    ?>
    <li>
        <a href="<?php print($value['link_url']);?>"><?php print($value['link_text']);?></a>
    </li>
    <?php
    ?>
    <li>
        <a href="<?=$value['link_url'];?>"><?=$value['link_text'];?></a>
    </li>
    <?php

}