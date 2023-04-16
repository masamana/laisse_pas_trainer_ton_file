<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>HOMER</title>
</head>


<body>
    <header>
        <h1>Formulaire</h1>
    </header>
    <main class="container">



        <form action="upload.php" method="post" enctype="multipart/form-data" class="container bg-light border rounded div-5">

            <p class="row">
                <label for="lastname" class="form-label">Nom : </label>
                <input type="text" name="lastname" id="user_lastname" class="form-control" required>
            </p>

            <p class="row">
                <label for="firstname" class="form-label">Prénom : </label>
                <input type="text" name="firstname" id="user_firstname" class="form-control" required>
            </p>
            <p class="row">
                <label for="imageUpload">Upload an profile image</label>
                <input type="file" name="avatar" id="imageUpload" />
            </p>

            <button name=" send">Send</button>
        </form>

    </main>

</body>