<header>
    <div class="logo">
        <h1><a href="<?php echo BASE_URL . "/index.php";?>">Fotecc</a></h1>
    </div>

    <div class="admin-right">
        <ul>
            <?php if(isset($_SESSION['username'])):?>
                <li>
                    <a href="#">
                        <i class="las la-user-circle"></i>
                        <?php echo $_SESSION['username'];?>
                        <i class="las la-arrow-circle-down"></i>
                    </a>
                    <ul>
                        <li>
                            <a href="<?php echo BASE_URL . "/logout.php";?>" class="logout">
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</header>