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
                    <form class="user" method="POST" action="<?= base_url('auth/pinjam'); ?>">
                        <div class="form-group">
                            <?= form_error('buku', '<small class="text-danger pl-3">', '</small>'); ?>
                            <select class="js-example-basic-single form-control form-control-user" name="state">
                                <?php foreach ($buku as $u) : ?>
                                    <option value="<?= $u['id_buku'] ?>"><?= $u['judul'] ?></option>
                            <?php endforeach; ?>
                            </select>
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
<script>
    $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>