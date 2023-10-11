<?php
include('koneksi.php');

$name = "";
$email = "";
$phone = "";
$address = "";


$errorMassage = "";
$successmassage = "";

if ( $_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
}
if (empty($name) || empty($email) || empty($phone) || empty($address)) {
    $errorMassage = "Mohon isi semua kolom.";
} else {
     $successmassage = "Data berhasil disimpan ke database.";

$sql = "INSERT INTO clients (name, email, phone, address)" . 
        "VALUES ('$name', '$email', '$phone', '$address')";
$result = $conn->query($sql);


header("Location: index.php"); // Redirect ke halaman index.php saat tombol "batal" ditekan
exit;
}



if (isset($_POST['batal'])) {
    header("Location: index.php"); // Redirect ke halaman index.php saat tombol "batal" ditekan
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container" my-5>
        <h2>new client</h2>
                <?php
                        if (!empty($errorMassage)) {
                            echo"
                                <div class='alert alert-warning alert-dismissble fade show' role='alert'>
                                <strong>$errorMassage</strong>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
                                </div>
                            ";
                        }
                ?>



        <form action="" method="post">
            <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label">name</label>
                <div class="col-sm-6">

                    <input type="text" class="form-control" name="name" values=" <?php echo $name; ?> " >
                </div>
            </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label">email</label>
                <div class="col-sm-6">
                    <input type="email" class="form-control" name="email" values="<?php echo $email; ?>">
                </div>
            </div>

                <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label">phone</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" values="<?php echo $phone; ?>">
                </div>
            </div>

            <div class="row mb-3">
                    <label for="" class="col-sm-3 col-form-label">address</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" values="<?php echo $adddress; ?>">
                </div>
            </div>

                            <?php
                                    if(!empty   ($successmassage)) {
                                            echo"
                                        <div class='row mb-3'>
                                            <div class='offset-sm-3 col-sm-6 '>
                                                <div class='alert alert-succes alert-dismissble fade show' role='alert'>
                                                    <strong>$successmassage</strong>
                                                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>                        
                                                </div>
                                            </div>
                                        </div> 
                                            ";
                                    }
                            ?>

            <div class="row mb-3">
                    <div class="offset-sm-3 col-sm-3 d-grid">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                    <div class="col-sm-3 d-grid">
                        <button class="btn btn-outline-primary" href="/crud/index.php" role="button" name="batal">batal</button>
                    </div>
            </div>
        
        </form>
    </div>

              
</body>
</html>
