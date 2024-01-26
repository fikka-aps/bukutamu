<div class="container">

<div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4"><b>Pinjam Buku</b></h1>
                    </div>
                    <?= $this->session->flashdata('message'); ?>
                    <form class="user" method="POST" action="<?= base_url('auth/peminjam'); ?>">
                        <div class="form-group">
                            <input type="text" name="nama" class="form-control form-control-user" id="nama" placeholder="Masukkan nama anda" value="<?= set_value('nama'); ?>">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="text" name="alamat" class="form-control form-control-user" id="alamat" placeholder="Alamat" value="<?= set_value('alamat'); ?>">
                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group row">
                            <input type="text" name="telepon" class="form-control form-control-user" id="telepon" placeholder="Nomor Telepon">
                            <?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <button type="submit" class="btn btn-success btn-user btn-block">
                            Submit
                        </button>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small text-success" href="<?= base_url(); ?>auth">Login Admin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>