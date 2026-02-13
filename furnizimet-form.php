<?php

include('header.php');

?>

<div class="container" style="min-height: 83vh;">
    <div class="row justify-content-center mt-4">
        <div class="col-md-6 mt-5">
            <form action="furnizimet-save.php" enctype="multipart/form-data" class="shadow-lg p-3 rounded-3" method="post">
                <h2 class="mb-4">➕ Shto Furnizim</h2>

                <!-- Libri -->

                <div class="mb-3">
                    <input type="text" name="libri" class="form-control" placeholder="Sheno Librin">
                </div>

                <!-- Sasia Furnizimit -->

                <div class="mb-3">
                    <input type="number" name="sasia_furnizimit" class="form-control" placeholder="Sheno Sasine e Furnizimit">
                </div>

                <!-- Cmimi Sasi -->

                <div class="mb-3">
                    <input type="number" name="cmimi_sasi" class="form-control" placeholder="Sheno Cmimin">
                </div>

                <!-- Zbritje -->

                <div class="mb-3">
                    <input type="number" name="zbritje" class="form-control" placeholder="Zbritje">
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

<?php 

include('footer.php');

?>