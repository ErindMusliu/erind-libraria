<?php

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
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
        <?php 
        include('classes/Libri.php');
        $libri = new Libri();
        $librat = $libri->index();

        foreach($librat as $l){
            $id = $l['id'];
            echo "<tr>";
            echo "<td>".$l['id']."</td>";
            echo "<td>".$l['titulli']."</td>";
            echo "<td>".$l['autori']."</td>";
            echo "<td>".$l['sasia_totale']."</td>";
            echo "<td>".$l['created_at']."</td>";
            echo "<td><a href='librat-fshi.php?id=$id' class='btn btn-danger'>Delete</a> <a href='librat-edit.php?id=$id' class='btn btn-info'>Edit</a></td>";
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