<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portofolio</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/datatables/dataTables.dataTables.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/dataTables/dataTables.bootstraps.js">
    <link rel="stylesheet" href="assets/js/main.js">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <?php include "includes/navbar.php" ?>
        <?php include "konten.php" ?>
        <footer class="footer">
            <div class="text-bg-dark p-3 position-absolute bottom-0 start-50 translate-middle-x"> Pemrograman Web 1 @ <?= date("Y") ?>
            </div>
            <script src="assets/jquery/jquery-3.7.1.js"></script>
            <script src="assets/datatables/dataTables.js"></script>
            <script src="assets/js/bootstrap.bundle.min.js"></script>
            <script src="assets/dataTables/dataTables.bootstraps.js"></script>
            <script src="assets/js/main.js"></script>
            <script src="assets/css/style.css"></script>
            <script>
                new DataTable('#example');
            </script>
</body>

</html>