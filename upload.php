<?php include 'inc/config.php' ?>

<?php
if (isset($_POST['submit'])) {
    $allowed_ext = array('jpg', 'png', 'gif', 'jpeg');

    if (!empty($_FILES['upload']['name'])) {
        //print_r($_FILES);
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir = "uploads/${file_name}";

        //get file extension
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        if (in_array($file_ext, $allowed_ext)) {
            if ($file_size <= 1000000) {
                move_uploaded_file($file_tmp, $target_dir);
                //$message =  "<p style='color:green'> File uploaded </p>";

                $titleone = htmlspecialchars($_POST['titleone']);
                $titletwo = htmlspecialchars($_POST['titletwo']);
                $body = htmlspecialchars($_POST['body']);
                $image = $target_dir;

                $sql = "INSERT INTO tb_home(titleone, titletwo, body, image) 
                VALUES('$titleone', '$titletwo', '$body', '$image')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    echo  "<script> alert('Uploaded Succesfully')</script>";
                } else {
                    echo 'Usuccesful' . mysqli_error($conn);
                }
            } else {
                $message =  "<p style='color:red'> File too Large </p>";
            }
        } else {
            $message =  "<p style='color:red'> Invalid file type </p>";
        }
    } else {
        $message =  "<p style='color:red'> Pls choose a file to upload </p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Form for home page</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Wealth Space Foundation</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="container d-flex flex-column align-items-center">
            <img src="images/wsflogo.png" class="w-25 mb-3" alt="">
            <h2>Data Upload</h2>
            <p class="lead text-center">Input the data you want to upload</p>
            <?php echo $message ?? null; ?>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="mt-4 w-75" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">Titleone</label>
                    <input type="text" class="form-control" id="title" name="titleone" placeholder="Enter your title">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Titletwo</label>
                    <input type="text" class="form-control" id="title" name="titletwo" placeholder="Enter your title">
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">body</label>
                    <input type="text" class="form-control" id="email" name="body" placeholder="Enter the body">
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">image</label>
                    <input type="file" class="form-control" name="upload" id="" placeholder="Enter your image">
                </div>
                <div class="mb-3">
                    <input type="submit" name="submit" value="upload" class="btn btn-primary w-100">
                </div>
            </form>
        </div>
    </main>

    <footer class="text-center mt-5">
        Copyright &copy; 2023
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>