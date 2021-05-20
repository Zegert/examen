<nav>
    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
            <a class="nav-link" href="../home/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../registers/">Ingeschreven</a>
        </li>
        <?php
            if(Session() >= 2){
        ?>
        <li class="nav-item">
            <a class="nav-link" href="../admin/">Admin</a>
        </li>
        <?php 
            }
        ?>
        <li class="nav-item">
            <a class="nav-link" href="../logout.php">Log uit</a>
        </li>
    </ul>
</nav>