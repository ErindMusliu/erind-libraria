<?php

include('header.php');

?>

<div class="container" style="min-height: 83vh;">
    <div class="row justify-content-center mt-5">
        <?php 
        include('classes/Nxenesi.php');
        $nxenesi = new Nxenesi();
        $nxenesit = $nxenesi->index();

        foreach($nxenesit as $n){
            $id = $n['id'];
            echo "<div class='col-md-3'>";
            echo "<div class='card p-3 justify-content-center align-items-center'>";
            echo "<img src='image/".$n['foto']."' alt='' class='card-img-top w-50 rounded-5'>";
            echo "<div class='card-body align-items-center'>";
            echo "<h3 class='card-title'>".$n['emri']." ".$n['mbiemri']."</h3>";
            echo "<h4 class='card-title text-center'>".$n['klasa']."</h4>";
            echo "<div class='m-auto text-center mt-3'>";
            echo "<a href='nxenesi-edit.php?id=$id' class='card-link text-warning text-decoration-none'>Edit</a>";
            echo "<a href='nxenesi-delete.php?id=$id' class='card-link text-danger text-decoration-none'>Delete</a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>
</div>

</div>

<?php 

include('footer.php');

?>