</div>
<style>
    #footer-content {
        background-color: #53545c;
        position: relative;
    }
    #footer-content div, #footer-logo {
        display: inline-block;
        vertical-align: top;
        text-align: left;
        margin: 2rem;
    }
    #footer-content h5 {
        font-weight: bold;
        margin-bottom: .8rem;
    }
    footer a, footer a:hover {
        text-decoration: none;
        color: white;
    }
</style>
<div class="mt-auto" style="width: 100%;">
    <footer class="text-center text-white">
        <div id="footer-content" class="px-4 text-left">
            <div id="footer-alamat">
                <h5>Alamat</h5>
                Jetis RT. 03 RW. 03, Gadingan, Mojolaban <br>
                Sukoharjo <br>
                Jawa Tengah <br>
                (Timur SDN Gadingan 3)
            </div>
            <div id="footer-menu">
                <h5>Daftar Menu</h5>
                <?php if (!empty($kategori) && is_array($kategori)): ?>
                    <?php foreach ($kategori as $data_kategori): ?>

                        <a href="#<?= $data_kategori->nama_kategori; ?>"><?= $data_kategori->nama_kategori; ?></a><br>

                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div id="footer-kontak">
                <h5>Hubungi Kami</h5>
                <img class="mr-2" src="<?= base_url(); ?>/../assets/wa-icon.png" width="20px">081 393 256 363<img class="ml-2" src="<?= base_url(); ?>/../assets/sms-icon.png" width="20px"><br>
                <img class="mr-2" src="<?= base_url(); ?>/../assets/wa-icon.png" width="20px">087 836 477 114<img class="ml-2" src="<?= base_url(); ?>/../assets/sms-icon.png" width="20px">
            </div>
            
            <img id="footer-logo" src="<?= base_url(); ?>/../assets/logo/full.png" width="300px">
            
            
        </div>


        <em class="d-block bg-dark font-weight-bold p-2">Yetty Catering &copy; 2021</em>
        <span id="programmer" style="position: absolute; bottom: 0; right: .5rem; padding: .5rem; color: #999; font-size: .9rem;">Site design by : Angga Rizki &nbsp<a href="mailto:angga.rizki1209@gmail.com" style="vertical-align: bottom; font-size: .9rem; color: #ccc"><i class="fa fa-envelope"></i></a></span>
    </footer>
</div>

</body>
</html>