<?php

include('classes/Libri.php');

include('header.php');
?>


<div class="container" style="min-height: 83vh;">
    <div class="row justify-content-center mt-5">
        <table class='table table-dark table-striped table-hover'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulli</th>
                    <th>Autori</th>
                    <th>Sasia</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
        <?php
        $search = htmlspecialchars(strip_tags(trim($_POST['search'])));
        $libri = new Libri();
        $librat = $libri->search($search);
        foreach($librat as $l){
            echo "<tr>";
            echo "<td>".$l['id']."</td>";
            echo "<td>".$l['titulli']."</td>";
            echo "<td>".$l['autori']."</td>";
            echo "<td>".$l['sasia_totale']."</td>";
            echo "<td>".$l['created_at']."</td>";
            echo "</tr>";
        }
        ?>
        </tbody>
        </table>
    </div>
</div>

</div>