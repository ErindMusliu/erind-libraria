<?php

include('header.php');
include('classes/Nxenesi.php');
include('classes/Libri.php');

$id = $_GET['id'];

$libri = new Libri();
$librat = $libri->find($id);

$nxenesi = new Nxenesi();
$nxenesit = $nxenesi->index();

?>

<div class="container" style="min-height: 83vh;">
    <div class="row justify-content-center mt-4">
        <div class="col-md-6 mt-5">
            <form action="huazo.php" enctype="multipart/form-data" class="shadow-lg p-3 rounded-3" method="post">
                <h2 class="mb-4">✒ Huazo Librin <?php foreach($librat as $l){echo "<strong>".$l['titulli']."</strong>";} ?></h2>
                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                <!-- Titulli -->

                <div class="mb-3">
                    <label for="nxenesi" class="form-label">Nxenesi</label>
                    <select name="nxenesi_id" id="nxenesi_id" class="form-select">
                        <?php foreach($nxenesit as $n){ ?>
                            <option value="<?php echo $n['id'] ?>"><?php echo $n['emri']." ".$n['mbiemri'] ?></option>
                        <?php } ?>
                    </select>
                </div>

                <!-- Afati i Kthimit -->

                <div class="mb-3">
                    <label for="afati-i-kthimit" class="form-label">Afati i Kthimit:</label>
                    <input type="date" class="form-control" name="afati-i-kthimit">
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

<?php 

include('footer.php');

?>