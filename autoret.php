<?php

include('header.php');
$autori = $_GET['autori'];
include('classes/Libri.php');
$libri = new Libri();
$librat = $libri->autoret($autori);
?>

<div class="container" style="min-height: 83vh;">
    <div class="row justify-content-center mt-5">
        <h1 class="display-1 mb-5"><?php foreach($librat as $l){echo $l['autori'];} ?></h1>
        
        <table class='table table-dark table-striped table-hover'>
            <thead>
                <tr>
                    <th>Autori</th>
                    <th>Libra</th>
                </tr>
            </thead>
            <tbody>
        <?php 

        foreach($librat as $h){
            echo "<tr>";
            echo "<td>".$h['autori']."</td>";
            echo "<td>".$h['total']."</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
        </table>
    </div>
</div>

</div>

<?php 

include('footer.php');

?>