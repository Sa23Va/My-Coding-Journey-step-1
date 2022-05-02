 <header class="site-header">
    <div class="container">
        <div class="header-content flex-container">
            <div class="logo">
                <a href="index.php"><img src="../app/img/savalogo2.png" alt="SAVA Logo"></a>
            </div>
            <nav class="main-nav">
                <ul class="meniu">
                    <li><?php echo '<a href="index.php">Pagrindinis</a>'; ?></li>
                    <li><a href="#">Apie</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="#">Blogas</a></li>
                    <li><?php echo '<a href="kontaktai.php">Kontaktai</a>'; ?></li>
                    </ul>  
                </nav>
                <div class="search">
                <form action="">
                    <input type="search" placeholder="paieškos tekstas..."><i class="fa fa-search"></i>
                </form>
            </div>           
        </div>
    </div>

        <nav class="mobile-nav">
            <ul id="mobilemenu" class="flex-container">
                    <li><?php echo '<a href="index.php">Pagrindinis</a>'; ?></li>
                    <li><a href="#">Apie</a></li>
                    <li><a href="portfolio.php">Portfolio</a></li>
                    <li><a href="#">Blogas</a></li>
                    <li><?php echo '<a href="kontaktai.php">Kontaktai</a>'; ?></li>
            </ul>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa-solid fa-bars"></i></a>
        </nav>
</header>
