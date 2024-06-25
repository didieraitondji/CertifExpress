<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CertifExpress | Accueil</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/main.css">

    <style>
        .actif-1 {
            font-weight: bold;
        }
    </style>
</head>

<body class=" bg-white pb-0 pt-0">
    <header class="container-fluid pt-3 pb-3 bg-light border-bottom position-fixed w-100">
        <?php include("models/menus.php"); ?>
    </header>

    <div class="container-fluid position-fixed w-100 contenu bg-white pt-0 pb-0 px-0 overflow-auto">

        <div class="container-fluid pt-5 pb-5 bg-light">
            <div class="container d-flex flex-row ">
                <div class=" w-50 d-flex flex-column justify-content-center">
                    <span class=" fs-2 fw-bold text-primary d-block mb-4">CertifExpress</span>
                    <br><br>
                    <div class=" py-3 px-5 fs-5 pub1 mb-4">
                        Faites vos demandes de diplôme <br>
                        d'attestation et d'autres pièces administrative <br>
                        en quelques cliques
                    </div>
                    <button href="#" class=" w-50 mt-4 mx-0 p-2 px-4 rounded-3 border-0 bg-black text-light fw-bold"> Faire une demande </button>
                </div>
                <div class="w-50 d-flex flex-column align-items-end">
                    <img src="/assets/images/branding1.png" width="80%" alt="">
                </div>
            </div>
        </div>

        <div class="container-fluid pt-5 pb-5 bg-warning">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 py-5 text-center">
                        <img src="/assets/images/suivre_mon_dossier_actif_sel.png" width="80%" alt="">
                    </div>
                    <div class="col-md-6 py-5 d-flex flex-column justify-content-center">
                        <p class=" fw-bold fs-5 text-center">
                            Suivez votre demande <br> peut importe votre position géographique <br> en toute quiétude !
                            <br> <br>
                            <button href="#" class=" w-50 mt-4 mx-0 p-2 px-4 rounded-3 border-0 bg-black text-light fw-bold"> Suivre une demande </button>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid pt-5 pb-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 py-5 d-flex flex-column justify-content-center text-center text-capitalize fw-bold fs-5">
                        <div class=" mb-4">
                            Conservez vos documents <br>
                            dans l'archive / Consulter les <br>
                            archives pour voir vos documents. <br>
                        </div>

                        <button href="#" class=" w-50 mt-4 mx-auto p-2 px-4 rounded-3 border-0 bg-black text-light fw-bold"> Archives </button>

                    </div>
                    <div class="col-md-6 py-5">
                        <img src="/assets/images/sauvegarde_dossier_1.png" width="80%" alt="">
                    </div>
                </div>
            </div>
        </div>



        <div class="container-fluid pt-5 pb-5 bg-warning">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 py-5">

                    </div>
                    <div class="col-md-6 py-5">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid pt-5 pb-5 bg-white mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
        </div>

        <div class=" container-fluid bg-light mt-5">
            <div class="container py-4 text-center">
                <div class="row">
                    <div class="col-12 text-center text-md-end col-md-6 py-4 px-4">
                        <img src="/assets/images/souriante-jeune-etudiante-afro-americaine-sac-dos-tenant-livres_141793-123010.png" alt="Logo UNSTIM" class=" w-75" style="margin-top:-310px">
                    </div>
                    <div class="col-12 text-center mb-1 mb-md-0 text-md-start col-md-6 py-4 px-4">
                        <img src="/assets/images/67133207-belle-étudiante-afro-américaine-avec-sac-à-dos.png" class=" w-75 " alt="Logo FAST ">
                    </div>
                    <div class=" col-12 mt-2 mt-md-0 text-center text-md-start col-md-6 py-2 px-4">
                        <img src="/assets/images/38065308-portrait-de-belles-jeunes-étudiants-afro.png" class=" w-100 image-3" alt="Logo FAST ">
                    </div>
                </div>
                <div class=" text-center py-3">
                    <p class="h3 fw-bold text-primary">
                        Optez pour CertifExpress et <br> Simplifiez vos démarches administrative <br> dès aujourd'hui
                    </p>
                </div>
                <div class="text-center py-3">
                    <a href="" class=" w-auto btn bg-dark text-light px-3 py-2">Faire une demande</a>
                </div>
            </div>
        </div>


        <div class="container py-5">
            <div class="row py-4 text-center">
                <p class=" fw-bold h2 text-primary">
                    Nous travaillons avec L'UNSTIM & la FAST Nati
                </p>
            </div>
            <div class="row">
                <div class="col-12 text-center col-md-6 py-2">
                    <img src="/assets/images/LogoUNSTIM.png" alt="Logo UNSTIM" class=" w-50">
                </div>
                <div class="col-12 text-center col-md-6 py-2">
                    <img src="/assets/images/logofast.png" class=" w-50 " alt="Logo FAST ">
                </div>
            </div>
        </div>

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
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>