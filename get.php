<?php
if (isset($_GET['url']))
    echo file_get_contents(urldecode($_GET['url']));
else
    echo "url is empty!";
?>