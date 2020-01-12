<?php
require_once 'config.php';
require_once ROOT_PATH.'/lib/dao_utility.php';
require_once ROOT_PATH.'/lib/mysqlDao.php';
?>

<!--begin header -->
<header class="header">

    <!--begin nav -->
    <nav class="navbar navbar-default navbar-fixed-top">

        <!--begin container -->
        <div class="container">

            <!--begin navbar -->
            <div class="navbar-header">

                <button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!--logo -->
            <a href="<?php ROOT_URL ?>" class="navbar-brand" id="logo">
                <img src="<?php echo ROOT_URL ?>/assets/images/luna-logo-w.png" alt="logo">
            </a>

            </div>

            <div id="navbar-collapse-02" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#home_wrapper">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#features">Features</a></li>
                    <li><a href="#gallery">Gallery</a></li>
                    <li><a href="#pricing">Pricing</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            <!--end navbar -->

        </div>
        <!--end container -->

    </nav>
    <!--end nav -->

</header>
<!--end header -->