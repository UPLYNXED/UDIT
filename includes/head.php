<?php
    /* Set $pageSub before including head.php, if not set, a default subtitle will be used */
    if(!isset($pageSub) || $pageSub == null)
    {
        $pageSub = 'A Platform For Professionals';
    }

    /* Set $screenName before including head.php */
    if(!isset($screenName) || $screenName == null)
    {
        $screenName = '\'none\'';
    } else {
        $screenName = '\'' . $screenName . '\'';
    }
    
    /* REPLACE THIS ONCE WE HAVE ACCOUNTS WORKING */
    $_SESSION['name'] = "Jon Snow";
    $_SESSION['field'] = "ICT";
    $_SESSION['employer'] = "Philips";
    $_SESSION['education'] = "Fontys Hogeschool ICT";
?>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>UDIT - <?php echo $pageSub ?></title>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/source.js"></script>
    <script>
        $(document).ready(function() 
        {
            initialize(<?php echo $screenName; ?>);
        });
    </script>
</head>