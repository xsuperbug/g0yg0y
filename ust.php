<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kullanıcı Portalı</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- UST-->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                         g0yg0y - v0.1
                    </a>
                </li>
                <li>
                    <a href="setup.php">Reset</a>
                </li>

                <li>
                    <a href="cinj.php">Command Injection</a>
                </li>
                <li>
                    <a href="sqli1.php">Sql Injection - Login Bypass</a>
                </li>
                <li>
                    <a href="sqli2.php">Sql Injection - Login Bypass</a>
                </li> 
                <li>
                    <a href="sqli3.php">Sql Injection - Login Bypass</a>
                </li>                
                <li>
                    <a href="sqli4.php">Sql Injection - Insert</a>
                </li>                
                <li>
                    <a href="sqli5.php?id=1">Sql Injection - Error Based</a>
                </li>                
                <li>
                    <a href="sqli6.php?id=1">Sql Injection - Blind</a>
                </li>                
                <li>
                    <a href="xss1.php?arama=test">XSS - Reflected</a>
                </li>
                <li>
                    <a href="xss2.php">XSS - Stored</a>
                </li>  
                <li>
                    <a href="xss3.php">XSS - DOM</a>
                </li>
                <li>
                    <a href="csrf1.php">CSRF</a>
                </li>
                <li>
                    <a href="acc1.php">Missing Access Control</a>
                </li>
                <li>
                    <a href="idor1.php">IDOR</a>
                </li>
                <li>
                    <a href="fileupload1.php">File Upload</a>
                </li>   
                <li>
                    <a href="fi.php?file=readme.txt">LFI</a>
                </li>  
                <li>
                    <a href="redirection.php">Open Redirection</a>
                </li>                                               
                <li>
                    <a href="login.php">Session Management</a>
                </li>
                <?php if (!empty($_SESSION["whoami"])) { ?>
                <li>
                    <a href="logout.php"><?php echo $_SESSION["whoami"]; ?> Log Out</a>
                </li>
                <?php } ?>
            </ul>
        </div>
        <!-- /UST -->