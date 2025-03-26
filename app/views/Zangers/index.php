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
                        <th scope="col">Nettowaarde</th>
                        <th scope="col">Land</th>
                        <th scope="col">Mobiel</th>
                        <th scope="col">Leeftijd</th>
                        <th scope="col">IsActief</th>
                        <th scope="col">Opmerking</th>
                        <th scope="col">DatumAangemaakt</th>
                        <th scope="col">DatumGewijzigd</th>
                        <th scope="col">delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['Zangers'] as $Zanger) : ?>
                        <tr>
                            <td><?= $Zanger->Naam; ?></td>
                            <td><?= $Zanger->Nettowaarde; ?></td>
                            <td><?= $Zanger->Land; ?></td>
                            <td><?= $Zanger->Mobiel; ?></td>
                            <td><?= $Zanger->Leeftijd; ?></td>
                            <td><?= $Zanger->IsActief; ?></td>
                            <td><?= $Zanger->Opmerking; ?></td>
                            <td><?= $Zanger->DatumAangemaakt; ?></td>
                            <td><?= $Zanger->DatumGewijzigd; ?></td>
                            <td><a href="<?= URLROOT; ?>/Zangers/delete/<?= $Zanger->Id; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0" />
                                    </svg></a></td>
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