<main>
    <div class="container">
        <ul class="collection with-header">
            <?php
                while($data = $this->fetch($keuangan)){?>
                    <li class="collection-item">
                        <p class="row">
                            <span class="title"><b>Kategori :</b> <?= $data['ID_KATEGORI'] ?></span>
                            <span class="title right"><b>Jenis Transaksi :</b> <?= $data['JENIS_TRANSAKSI'] ?></span>
                        </p>
                        <p class="row">
                            <span class="title"><b>Nominal :</b> Rp.<?= $data['NOMINAL_TRANSAKSI'] ?>,-</span>
                            <span class="title right"><b>Waktu :</b> <?= $data['WAKTU_TRANSAKSI'] ?></span>
                        </p>
                        <p>
                            <?= $data['KETERANGAN_TRANSAKSI'] ?>
                        </p>
                    </li>    
                <?php
                }
            ?>
        </ul>  
    </div>
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large waves-effect waves-light green z-depth-3 pulse tooltipped" href="<?= $this->baseUrl('keuangan/tambah'); ?>" data-position="left" data-tooltip="Tekan tombol untuk menambahkan transaksi">
            <i class="large material-icons">add</i>
        </a>
    </div>
</main>