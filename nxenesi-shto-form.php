<?php

include('header.php');

?>

<div class="container" style="min-height: 83vh;">
    <div class="row justify-content-center mt-4">
        <div class="col-md-6 mt-5">
            <form action="nxenesi-shto.php" enctype="multipart/form-data" class="shadow-lg p-3 rounded-3" method="post">
                <h2 class="mb-4">➕ Shto Nxenes</h2>

                <!-- Emri -->

                <div class="mb-3">
                    <input type="text" name="emri" class="form-control" placeholder="Sheno Emrin">
                </div>

                <!-- Mbiemri -->

                <div class="mb-3">
                    <input type="text" name="mbiemri" class="form-control" placeholder="Sheno Mbiemrin">
                </div>

                <!-- Klasa -->

                <div class="mb-3">
                    <input type="text" name="klasa" class="form-control" placeholder="Sheno Klasen">
                </div>

                <!-- Foto -->

                <div class="mb-3">
                    <input type="file" name="foto" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

<?php 

include('footer.php');

?>