<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="?action=home"><img src="img/logo_friet_van_piet.png"></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="?action=home" <?php isActive($action, 'home') ?>>Home

                    </a>

                </li>
                <li>
                    <a href="?action=snacks" <?php isActive($action, 'snacks') ?>>Snacks</a>
                </li>
                <li>
                    <a href="?action=zelfgemaaktefriet" <?php isActive($action, 'zelfgemaaktefriet') ?>>Zelfgemaakte
                        friet</a>
                </li>

                <li>
                    <a href="?action=frietvanpiet" <?php isActive($action, 'frietvanpiet') ?>>Friet van Piet</a>
                </li>

                <li>
                    <a href="?action=frietfeiten" <?php isActive($action, 'frietfeiten') ?>>Frietfeiten</a>
                </li>

                <li>
                    <a href="?action=contact" <?php isActive($action, 'contact') ?>>Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->

</nav>
<div class="custumcontent">