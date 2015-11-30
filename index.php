<?php
$menu = array(
    "about" => array('link_text' => 'Home', 'link_url' => 'index.html', 'default' => true),
    "our_macarons" => array('link_text' => 'Our Macarons', 'link_url' => 'our_macarons.php'),
    "gifts_parties" => array('link_text' => 'Gifts & Parties', 'link_url' => 'gifts_parties.php'),
    "contact" => array('link_text' => 'Contact Us', 'link_url' => 'contact.php'),
);
if(empty($_GET['page'])){
    $page = 'about';
}
else{
    $page = $_GET['page'];
}
?>
<head>
    <link href="style.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
print_r($_GET);
include_once('header.php');
?>
<?php
include_once($menu[$page]['link_url']);
?>
<?php
include_once('footer.php');
?>
</body>
