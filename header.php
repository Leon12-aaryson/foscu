<style>
    .navbar {
        height: 120px;
        align-items: center;
    }
</style>
<?php
include "include.php";
?>
<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #F79321;">
    <a class="navbar-brand d-lg-none" href="index.php"><img src="static/images/nav.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="bx bx-menu"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link" href="focus.php">Our Focus</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="weare.php">Who We Are</a>
            </li>
            <a class="d-none d-lg-block" href="index.php"><img src="static/images/nav.png"></a>
            <li class="nav-item">
                <a class="nav-link" href="work.php">Our Work</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="info.php">Information Resources</a>
            </li>
        </ul>
    </div>
</nav>