<ul>
    <?php $nomDePage = str_replace(dirname($_SERVER['PHP_SELF']).'/', '', $_SERVER['PHP_SELF']);?>

    <li <?php if($nomDePage=="index.php"){echo "class=\"active\"" ;} ?>><a href="index.php">Présentation</a></li>
    <li <?php if($nomDePage=="stream.php"){echo "class=\"active\"" ;} ?>><a href="stream.php">Stream NeyCorp</a></li>
</ul>