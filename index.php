<?php
$menu = array(
    "about" => array('link_text' => 'Home', 'link_url' => 'index.html', 'default' => true),
    "our_macarons" => array('link_text' => 'Our Macarons', 'link_url' => 'our_macarons.html'),
    "gifts_parties" => array('link_text' => 'Gifts & Parties', 'link_url' => 'gifts_parties.html'),
    "contact" => array('link_text' => 'Contact Us', 'link_url' => 'contact.php'),
);

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
if(empty($_GET['page'])){
    $page = 'about';
    include_once($menu[$page]['link_url']);
}
else{
    if(isset($menu[$_GET['page']])){
        $page = $_GET['page'];
        include_once($menu[$page]['link_url']);
    }
    else{
        include_once('404.php');
    }
}
?>
<?php
include_once('footer.php');
?>
</body>
