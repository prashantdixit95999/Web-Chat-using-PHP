<?php
sessio_start();
if(isset($_SESSION['name'))
{
echo $_SESSION['name'];

}

?>