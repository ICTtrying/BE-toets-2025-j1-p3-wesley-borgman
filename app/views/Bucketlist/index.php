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
                        <th scope="col">Activiteit</th>
                        <th scope="col">Begintijd</th>
                        <th scope="col">Eindtijd</th>                        
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['Bucketlist'] as $Bucketlist) : ?>
                        <tr>
                            <td><?= $Bucketlist->Activiteit; ?></td>
                            <td><?= $Bucketlist->begintijd; ?></td>
                            <td><?= $Bucketlist->eindtijd; ?></td>
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