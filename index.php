<?php require_once 'header.php'; ?>
<div class="wrapper">
    <!--informasi-->
    <section id="Informasi">
        <img src="https://img.freepik.com/free-vector/college-students-concept-illustration_114360-10235.jpg?w=740&t=st=1682960087~exp=1682960687~hmac=d8000c3bde3057e2035f0811312ea0cb12f34286c586aaa26b0734e48aecf7ed" />
        <div class="kolom">
            <p class="deskripsi">Pendaftaran Mahasiswa Baru Universitas Seoul</p>
            <h2>STUDY NOW BE PROUD LATER!</h2>
            <P>Don't dare to dream if you don't want to fight work harder or regret</P>
            <p><a href="register.php" class="tbl-ungu">Join Us</a></p>
        </div>
    </section>
    <!--News-->
    <section id="News">
        <div class="kolom">
            <p class="deskripsi">SNU News</p>
            <h2>SNU TODAY</h2>
            <h4>The Opening of the New Library at SNU</h4>
            <p>The newest building completed in Seoul National University (SNU) can arguably be said to be its most impressive yet. Kwanjeong library, a massive project that began in 2013, is finally complete and open for individuals of the SNU community to experience.

                Kwanjeong library is an aesthetically impressive building. It appears to embrace the old library, SNU’s Central Library, surrounding the three open sides like a perfectly fitting Tetris piece. But what it holds inside is in fact the most impressive aspect of the new library.</p>
            <P><a href="https://en.snu.ac.kr/snunow/snu_media/news" class="tbl-biru">lihat lainnya</a></P>
        </div>
        <img src="https://en.snu.ac.kr/webdata/boards/ennews/img_20150325_001.jpg" />
    </section>
    <!--biaya-->
    <section id="Biaya">
        <div class="tengah">
            <div class="kolom">
                <p class="deskripsi">Rincian Biaya</p>
                <h2>Biaya</h2>
                <h4>Program dan Biaya</h4>
                <p>Ada banyak program yang bisa anda pilih</p>

            </div>
            <img src="https://snu-aurp-sub.carrd.co/assets/images/image03.jpg?v81287332290651" />
        </div>
        <div class="Biaya-list">
            <div class="tabel-biaya">
                <img src="https://img.okezone.com/content/2017/02/07/65/1611555/wow-5-kampus-di-korea-ini-masuk-jajaran-terbaik-dunia-KeaS2HttQA.jpg" />
                <p>Program Sarjana</p>
                <button class="tbl-biru" id="btn-sarjana">Details</button>
            </div>
            <div class="Biaya-list">
                <div class="tabel-biaya">
                    <img src="https://www.snuh.org/global/asset/img/about/img_history02_cont01.jpg" />
                    <p>Program Pascasarjana</p>
                    <button class="tbl-biru" id="btn-pascasarjana">Details</button>
                </div>
                <div class="Biaya-list">
                    <div class="tabel-biaya">
                        <img src="https://awsimages.detik.net.id/community/media/visual/2021/08/03/seoul-national-university.jpeg?w=1200" />
                        <p>Program Profesi</p>
                        <button class="tbl-biru" id="btn-prof">Details</button>
                    </div>
                </div>
    </section>
    <!--fasilitas kampus-->
    <section id="Fasilitas">
        <div class="tengah">
            <div class="kolom">
                <p class="deskripsi">Fasilitas Kampus</p>
                <h2>SNU</h2>
                <h4>Sebagai mahasiswa, beberapa fasilitas Seoul National University yang bisa kamu nikmati antara lain:</h4>
            </div>
            <div class="fasilitas-list">
                <div class="fasilitas-kampus">
                    <img src="https://en.snu.ac.kr/webdata/boards/ennews/img_20150415_001.jpg" />
                    <p>Seoul National University Library</p>
                </div>
                <div class="fasilitas-list">
                    <div class="fasilitas-kampus">
                        <img src="https://science.snu.ac.kr/webdata/organization/facility/6f6z9c6z2a4z8c7za6fz04fzddbz0ebz1bbz5faz6f.jpg" />
                        <p>Research Support Facility</p>
                        <p><a href="https://oia.snu.ac.kr/libraries-and-learning-facilities" class="tbl-biru">Others</a></p>
                    </div>
                </div>
    </section>
    <!--Lokasi-->
    <section id="Lokasi">
        <div class="tengah">
            <div class="kolom">
                <p class="deskripsi">
                <h2>Lokasi Kampus</h2>
                </p>
                <img class="kolom" src="https://namsankoreancourse.com/wp-content/uploads/2020/08/SNU-Main-Library_1-1000x563-1.png" />
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3167.1784033097665!2d126.94745821050559!3d37.456509471950795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357c9fe8a0a1e2a5%3A0xa1e2eebc04f0c5e7!2sSeoul%20National%20University!5e0!3m2!1sen!2sid!4v1683058341643!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

    <div id="modal-sarjana" class="modal">
        <div class="modal-box">
            <div class="judul-modal">
                <h2>Sarjana</h2>
            </div>
            <div class="modal-conten">
                <img src="img/tabel1.jpg" alt="" srcset="">
            </div>
            <button id="batal">Batal</button>
        </div>
    </div>
    <div id="modal-pascasarjana" class="modal">
        <div class="modal-box">
            <div class="judul-modal">
                <h2>Pascasarjana</h2>
            </div>
            <div class="modal-conten">
                <img src="img/tabel2.jpg" alt="" srcset="">
            </div>
            <button id="batal1">Batal</button>
        </div>
    </div>
    <div id="modal-prof" class="modal">
        <div class="modal-box">
            <div class="judul-modal">
                <h2>Profesi</h2>
            </div>
            <div class="modal-conten">
                <img src="img/tabel3.jpg" alt="" srcset="">
            </div>
            <button id="batal2">Batal</button>
        </div>
    </div>
    <script>
        // modal
        const btn_modal = document.getElementById("btn-sarjana");
        const modal = document.getElementById("modal-sarjana");
        const close_modal = document.getElementById("batal");

        btn_modal.addEventListener("click", function() {
            modal.style.display = "block"
        })
        close_modal.addEventListener("click", function() {
            modal.style.display = "none"
        })
        // end modal

        const pas_modal = document.getElementById("btn-pascasarjana");
        const pass_modal = document.getElementById("modal-pascasarjana");
        const closee_modal = document.getElementById("batal1");

        pas_modal.addEventListener("click", function() {
            pass_modal.style.display = "block"
        })
        closee_modal.addEventListener("click", function() {
            pass_modal.style.display = "none"
        })

        const prof_modal = document.getElementById("btn-prof");
        const proff_modal = document.getElementById("modal-prof");
        const closeee_modal = document.getElementById("batal2");

        prof_modal.addEventListener("click", function() {
            proff_modal.style.display = "block"
        })
        closeee_modal.addEventListener("click", function() {
            proff_modal.style.display = "none"
        })
        // end modal
    </script>
    <?php require_once 'footer.php';
