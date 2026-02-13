<?php

include('header.php');

?>

<div class="container" style="min-height: 83vh;">
    <div class="row justify-content-center mt-5">
        <h1 class="display-1 mb-5">Porosite</h1>
        
        <table class='table table-dark table-striped table-hover'>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Libri</th>
                    <th>Sasia Furnizimit</th>
                    <th>Cmimi</th>
                    <th>Data e Porosise</th>
                    <th>Data e Arritjes</th>
                    <th>Zbritje</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
        <?php 
        include('classes/Furnizimi.php');
        $furnizimi = new Furnizimi();
        $furnizimet = $furnizimi->index();

        foreach($furnizimet as $f){
            $id = $f['id'];
            echo "<tr>";
            echo "<td>".$f['id']."</td>";
            echo "<td>".$f['libri']."</td>";
            echo "<td>".$f['sasia_furnizimit']."</td>";
            echo "<td>".$f['cmimi_sasi']."</td>";
            echo "<td>".$f['data_porosise']."</td>";
            echo "<td>".$f['data_arritjes']."</td>";
            echo "<td>".$f['zbritje']."</td>";
            echo "<td><a href='dorezuar.php?id=$id' class='btn btn-success'>Dorezuar</a></td>";
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