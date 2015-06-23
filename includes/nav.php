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
<section class="menuSlider">
    MENU STUFF
</section>