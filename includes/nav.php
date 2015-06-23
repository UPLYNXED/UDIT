<?php
    /* Set $pageTitle before including nav.php, if not set it will default to 'UDIT' */
    if(!isset($pageTitle) || $pageTitle == null)
    {
        $pageTitle = 'UDIT';
    }

    if(isset($menuVisible) && !$menuVisible) {
        $menuVisible = ' hidden';
    } else {
        $menuVisible = '';
    }
?>

<nav>
    <div class="menuButton<?php echo $menuVisible; ?>"></div><h1 class="navTitle">
        <?php echo $pageTitle; ?>
    </h1>
</nav>
<div class="menuViewport"></div>
<section class="menuSlider">
    <h2 class="menuTitle">UDIT</h2>
    <a class="menuLink" href="profile.php">My Profile</a>
    <a class="menuLink" href="news.php">News</a>
    <a class="menuLink" href="social.php">Social</a>
    <a class="menuLink" href="living.php">Living</a>
</section>