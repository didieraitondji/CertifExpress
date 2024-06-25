<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archives | CertifExpress</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">

    <style>
        .actif-4 {
            font-weight: bold;
        }
    </style>
</head>

<body>
    <header class="container-fluid pt-3 pb-3 bg-light border-bottom position-fixed w-100">
        <?php include("./../models/menus.php"); ?>
    </header>

    <div class="container-fluid position-fixed w-100 contenu bg-white pt-0 pb-0 px-0 overflow-auto">
        <footer class="container-fluid pt-3 pb-0">
            <div class="container py-5 border-top ">
                <div class="row">
                    <div class="col-12 col-md-4 text-md-start text-center py-2">
                        <a href="" class="fw-bold nav-link" title="Foire Aux Questions">FAQ</a>
                    </div>
                    <div class="col-12 col-md-4 text-md-center text-center py-2">
                        <a href="" class="fw-bold nav-link" title="Politique & Confidentialité de CertifExpress">Politique & Confidentialité</a>
                    </div>
                    <div class="col-12 col-md-4 text-md-end text-center py-2">
                        <a href="" class="fw-bold nav-link" title="A propos de CertifExpress">A propos</a>
                    </div>
                </div>
            </div>
            <div class="row bg-light text-center py-3">
                <div class="col-12">
                    <span class="h6">Copyright &copy; <span class="annee"></span> <span class="servicenamef">CertifExpress</span></span>
                </div>
            </div>
        </footer>
    </div>

    <!-- Inclusion des fichiers JavaScript -->
    <script>
        var annee = document.querySelector(".annee");
        var dateObj = new Date();

        annee.innerHTML = dateObj.getFullYear();
    </script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>