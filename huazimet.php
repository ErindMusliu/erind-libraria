<?php

include('header.php');

?>

<div class="container" style="min-height: 83vh;">
    <div class="row justify-content-center mt-5">
        <h1 class="display-1 mb-5">Huazimet</h1>
        
        <table class='table table-dark table-striped table-hover'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nxenesi</th>
                    <th>Klasa</th>
                    <th>Titulli</th>
                    <th>Autori</th>
                    <th>Sasia</th>
                    <th>Data e Marrjes</th>
                    <th>Afati i Kthimit</th>
                    <th>Data e Kthimit</th>
                    <th>Aktive</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
        <?php 
        include('classes/Huazimi.php');
        $huazimi = new Huazimi();
        $huazimet = $huazimi->index();

        foreach($huazimet as $h){
            $id = $h['id'];
            echo "<tr>";
            echo "<td>".$h['id']."</td>";
            echo "<td>".$h['emri']." ".$h['mbiemri']."</td>";
            echo "<td>".$h['klasa']."</td>";
            echo "<td>".$h['titulli']."</td>";
            echo "<td>".$h['autori']."</td>";
            echo "<td>".$h['sasia_totale']."</td>";
            echo "<td>".$h['data_marrjes']."</td>";
            echo "<td>".$h['afati_kthimit']."</td>";
            echo "<td>".$h['data_kthimit']."</td>";
            echo "<td><a href='huazimet-fshi.php?id=$id' class='btn btn-danger'>Delete</a></td>";
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