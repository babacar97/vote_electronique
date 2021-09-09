<?php require_once '../../model/vote/vote.php' ?>
<!DOCTYPE html>
<html lang="fr">
<?php include '../../config/includes/head.php'; ?>

<body>
    <?php include '../../config/includes/navbar.php'; ?>

    <div class="container">




        <div class="row justify-content-center mt-5">
            <div class="col-md-12">
                <!-- Tableau Liste Vote -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID VOTE</th>
                            <th scope="col">NOM CANDIDAT</th>
                            <th scope="col">NOM ELECTEUR</th>
                            <th scope="col">NUM BUREAU</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        $cdt = new Voter();
                        $lesVotes = $cdt->getVote();

                        foreach ($lesVotes as $key => $valeur) {
    
                        ?>


                            <tr>
                                <td><?= $valeur['IDVote'] ?></td>
                                <td><?= $valeur['IDCandidat'] ?></td>
                                <td><?= $valeur['IDElecteur'] ?></td>
                                <td><?= $valeur['IDBureau_de_vote'] ?></td>
                                

                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>


        <!-- MDB -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
</body>

</html>