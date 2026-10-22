<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body class="container dvh-100">

    <nav class="navbar sm:navbar-expand bg-1 fg-2 rounded-5 mt-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">Home</a>
            <a class="navbar-brand" href="./addCd.php">Add cd</a>
        </div>
    </nav>

    <h1 class="my-5">Add a new cd</h1>

    <form action="server.php" method="POST">

        <div class="row">
            <div class="col-6">
                <label class="form-label mb-2" for="title">Title</label>
                <input required type="text" class="form-control" id="title" name="title" placeholder="Title of the song">
            </div>

            <div class="col-6">
                <label class="form-label mb-2" for="artist">Artist</label>
                <input required type="text" class="form-control" id="artist" name="artist" placeholder="Name of the artist">
            </div>
            
            <div class="col-6">
                <label class="form-label mb-2" for="year">Year</label>
                <input required type="number" class="form-control" id="year" name="year" min="1800" max="2026">
            </div>
            
            <div class="col-6">
                <label class="form-label mb-2" for="img">Image</label>
                <input required type="text" class="form-control" id="img" name="img" placeholder="Name of the image.png">
            </div>
        </div>

        <button class="btn-solid theme-accent mt-5">Submit</button>

    </form>

</body>
</html>