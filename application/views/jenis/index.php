<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data <?= $title ?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i><?= $title ?></a></li>
        </ol>
    </section>

    <section class="content-header">
        <a href="<?= base_url('jenis/tambah'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah</a>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Tabel <?= $title ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Jenis Pembayaran</th>
                                    <th>Total</th>
                                    <th>Kontrol</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($jenis as $jns) :  ?>
                                    <tr>
                                        <td><?= $jns['id_jenis']; ?></td>
                                        <td><?= $jns['jenisp']; ?></td>
                                        <td>Rp. <?= $jns['total']; ?>,-</td>
                                        <td>
                                            <a href="<?= base_url('jenis/ubah/') . $jns['id_jenis']; ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> Ubah</a>
                                            <a href="<?= base_url('jenis/hapus/') . $jns['id_jenis']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus?')"><i class=" fa fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Jenis Pembayaran</th>
                                    <th>Total</th>
                                    <th>Kontrol</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->