<?php

include('header.php');

?>

<div class="container" style="min-height: 83vh;">
    <div class="row justify-content-center mt-4">
        <div class="col-md-6 mt-5">
            <form action="librat-shto.php" enctype="multipart/form-data" class="shadow-lg p-3 rounded-3" method="post">
                <h2 class="mb-4">➕ Shto Libra</h2>

                <!-- Titulli -->

                <div class="mb-3">
                    <input type="text" name="titulli" class="form-control" placeholder="Sheno Titullin">
                </div>

                <!-- Autori -->

                <div class="mb-3">
                    <input type="text" name="autori" class="form-control" placeholder="Sheno Autorin">
                </div>

                <!-- Sasia -->

                <div class="mb-3">
                    <input type="text" name="sasia" class="form-control" placeholder="Sheno Sasine">
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

<?php 

include('footer.php');

?>