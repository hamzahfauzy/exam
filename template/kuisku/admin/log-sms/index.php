<?php 
$this->title .= " | SMS Log"; 
$this->visited = "logsms";

$this->js = [
    asset('js/sweetalert2@9.js'),
    asset('js/sweetalert2.min.js'),
];
?>
<link rel="stylesheet" href="<?= asset('css/wordpress-admin.css') ?>">
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <h2>SMS Log</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="content-wrapper">
                <table class="table table-bordered table-striped table-kuis">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>No HP</th>
                            <th>Konten</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(empty($smsLog)): ?>
                        <tr>
                            <td colspan="5"><i>Tidak ada data!</i></td>
                        </tr>
                        <?php endif ?>
                        <?php foreach($smsLog as $key => $log): ?>
                        <tr>
                            <td><?= ++$key ?></td>
                            <td><?= $log->no_hp ?></td>
                            <td><?= $log->pesan ?></td>
                            <td><?= $log->status ?></td>
                            <td><?= $log->date ?></td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>