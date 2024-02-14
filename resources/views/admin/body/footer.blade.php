<footer class="page-footer">
    <p class="mb-0">Copyright © 
        <?php 
            $currentDate = new DateTime();
            $year = $currentDate->format("Y"); 
            echo $year;
        ?>
        . All right reserved.</p>
</footer>