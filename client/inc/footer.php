<footer class="container white text-center">
    <?php 
        if ($styleSheet == "add_member" || $styleSheet == "add_team") {
            echo("<div class='row'>");
            echo("<div class='col-md-6'>");
        }
    ?>
        <hr class="bg-white">
        <p>
          <i class="fab fa-twitter-square"></i>
          <i class="fab fa-facebook-square"></i>
          <i class="fab fa-youtube-square"></i>
          <i class="fab fa-instagram"></i>
        </p>
        <p>&copy;Hartcode Academy 2019</p>
    <?php 
        if ($styleSheet == "add_member" || $styleSheet == "add_team") {
            echo("</div>");
            echo("</div>");
        }
    ?>
</footer>  