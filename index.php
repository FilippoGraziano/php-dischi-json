<?php

$json_string = file_get_contents('./cds.json');

$cds = json_decode($json_string, true);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>

    <title>CDs</title>
</head>

<body class="container dvh-100">

    <h1 class="my-10">Cds list</h1>

    <ul class="d-flex gap-10 flex-wrap p-0 pb-10 justify-content-center">
        <?php

        foreach ($cds as $cd) {

            echo "<li class='card d-flex flex-column w-25' >";

                echo "<div class='card-body' >";

                    echo "<img class='card-img' src='" . $cd["img"] . "'" . " alt='" . $cd["title"] . "'>";

                    echo "<span class='title'>" . $cd["title"] . "</span>";
                    echo "<span class='artist'>" . $cd["artist"] . "</span>";
                    echo "<span class='year'>" . $cd["year"] . "</span>";

                echo "</div>";

            echo "</li>";
        }

        ?>
    </ul>

</body>

</html>