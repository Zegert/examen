<nav>
    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
            <!-- Link naar de homepagina -->
            <a class="nav-link" href="../home/">Home</a>
        </li>
        <li class="nav-item">
            <!-- Link naar de ingeschreven-pagina -->
            <a class="nav-link" href="../registers/">Ingeschreven</a>
        </li>
        <?php
        // Check of iemand een admin is en of ze die pagina mogen zien
            if(Session() >= 2){
        ?>
        <li class="nav-item">
            <!-- Link naar de adminpagina -->
            <a class="nav-link" href="../admin/">Admin</a>
        </li>
        <?php 
            }
        ?>
        <li class="nav-item">
            <!-- Link naar de loguit pagina -->
            <a class="nav-link" href="../logout.php">Log uit</a>
        </li>
    </ul>
</nav>