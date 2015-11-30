<?php

foreach ($menu as $key => $value) {
    ?>
    <li class="nav">
        <a href="index.php?page=<?=$key;?>"><?=$value['link_text'];?></a>
    </li>
    <?php
}
