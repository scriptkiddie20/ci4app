<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-3"><?= $title; ?></h2>
            <div class="card mb-3">
                <div class="row">
                    <div class="col-md-4">
                        <img class="card-img-top komik-detail" src="/img/<?= $komik['sampul'] ?>" alt="<?= $komik['judul']; ?>">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $komik['judul'] ?></h5>
                            <p class="card-text"><b>Penerbit : </b><?= $komik['penerbit'] ?></p>
                            <p class="card-text"><small class="text-muted"><b>Penulis : </b><?= $komik['penulis'] ?></small></p>

                            <a href="/komik/edit/<?= $komik['slug'] ?>" class="btn btn-warning">Edit</a>

                            <form action="/komik/<?= $komik['id'] ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                            <div><a href="/komik">Kembali ke Daftar Komik</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>