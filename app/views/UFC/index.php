<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-1"></div>
    </div>


   
    <!-- begin tabel smartphones -->
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Naam</th>
                        <th scope="col">RanglijstNummer</th>
                        <th scope="col">Lengte</th>
                        <th scope="col">Gewicht</th>
                        <th scope="col">Leeftijd</th>
                        <th scope="col">WinstDoorKnockout</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['UFC'] as $UFCS) : ?>
                        <tr>
                            <td><?= $UFCS->Naam; ?></td>
                            <td><?= $UFCS->RanglijstNummer; ?></td>
                            <td><?= $UFCS->Lengte; ?></td>
                            <td><?= $UFCS->Gewicht; ?></td>
                            <td><?= $UFCS->Leeftijd; ?></td>
                            <td><?= $UFCS->WinstDoorKnockout; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= URLROOT; ?>/homepages/index">home</a>
        </div>
        <div class="col-1"></div>
    </div>
    <!-- einde tabel smartphones -->

<?php require_once APPROOT . '/views/includes/footer.php'; ?> 