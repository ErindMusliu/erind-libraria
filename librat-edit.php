<?php

include('header.php');
include('classes/Libri.php');

$id = $_GET['id'];

$libri = new Libri();
$result = $libri->find($id);

if($result){
    $librat = $result->fetch_assoc();
}

else{
    echo "Error";
}

?>

<div class="container" style="min-height: 83vh;">
    <div class="row justify-content-center mt-4">
        <div class="col-md-6 mt-5">
            <form action="edit-librin.php" enctype="multipart/form-data" class="shadow-lg p-3 rounded-3" method="post">
                <h2 class="mb-4">✒ Edito Librin <?php echo $librat['titulli']?></h2>
                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                <!-- Titulli -->

                <div class="mb-3">
                    <input type="text" name="titulli" class="form-control" placeholder="Sheno Emrin" value="<?php echo $librat['titulli'] ?>">
                </div>

                <!-- Mbiemri -->

                <div class="mb-3">
                    <input type="text" name="autori" class="form-control" placeholder="Sheno Mbiemrin" value="<?php echo $librat['autori'] ?>">
                </div>

                <!-- Klasa -->

                <div class="mb-3">
                    <input type="text" name="sasia" class="form-control" placeholder="Sheno Klasen" value="<?php echo $librat['sasia_totale'] ?>">
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>

<?php 

include('footer.php');

?>