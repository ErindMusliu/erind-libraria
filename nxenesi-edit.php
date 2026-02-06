<?php

include('header.php');
include('classes/Nxenesi.php');

$id = $_GET['id'];

$nxenesi = new Nxenesi();
$result = $nxenesi->find($id);

if($result){
    $nxenesit = $result->fetch_assoc();
}

else{
    echo "Error";
}

?>

<div class="container" style="min-height: 83vh;">
    <div class="row justify-content-center mt-4">
        <div class="col-md-6 mt-5">
            <form action="edit-nxenesi.php" enctype="multipart/form-data" class="shadow-lg p-3 rounded-3" method="post">
                <h2 class="mb-4">✒ Nxenesin <?php echo $nxenesit['emri']." ".$nxenesit['mbiemri'] ?></h2>
                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                <!-- Emri -->

                <div class="mb-3">
                    <input type="text" name="emri" class="form-control" placeholder="Sheno Emrin" value="<?php echo $nxenesit['emri'] ?>">
                </div>

                <!-- Mbiemri -->

                <div class="mb-3">
                    <input type="text" name="mbiemri" class="form-control" placeholder="Sheno Mbiemrin" value="<?php echo $nxenesit['mbiemri'] ?>">
                </div>

                <!-- Klasa -->

                <div class="mb-3">
                    <input type="text" name="klasa" class="form-control" placeholder="Sheno Klasen" value="<?php echo $nxenesit['klasa'] ?>">
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