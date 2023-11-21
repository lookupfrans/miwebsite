<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Stevenhoven Store</title>
  <link rel="stylesheet" href="responsive.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="icon" type="image/png" sizes="180x180" href="favo.png">
  <style>
    .heading {
      margin-left: 250px;
      margin-top: 10%;
    }

    .heading1 {
      margin-left: 250px;
    }

    .heading1 a {
      text-decoration: none;
      color: red;
    }

    .heading1 a:hover {
      border-bottom: 1px solid;
    }

    .ref {
      color: red;
      text-decoration: none;
    }

    .ref:hover {
      border-bottom: 1px solid;
    }

     .content {
  display: none;
}

.loader > .image-title {
  height: 200px;
  width: 100px;
  justify-content: center;
  align-items: center;
  text-align: center;
  /*border-top-color: #2a88e6;
  border: 15px solid #45474b;*/
  /*position: absolute;*/
  /*background-image: url(../img/jpg6.jpg);*/
  margin: auto;
  margin-bottom: 400px;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  border-radius: 0;
  animation: fadeOut 1s infinite linear;
  /*-webkit-animation-duration: 5s;animation-duration: 1s;*/
  /*-webkit-animation-fill-mode: both;animation-fill-mode: both;*/
}

@keyframes fadeOut {
  0% {opacity: 1;}
  100% {opacity: 0;} 
}
  </style>

<body oncontextmenu="return false">
  <div class="loader" style="text-align:center;height:100vh; width:100vw;overflow:hidden;background:#000;">
    <img class="image-title" alt="" src="mylogo.png" style="width: 20%; height:20%;position:absolute"/>
    <div></div>
  </div>
  <div class="content">

  <div class="message-wrapper" style="padding-right:200px;padding-left:200px;margin-left:0px;">
    <div class="container">
      <div id="content">
        <div id="agreement-en">
          <h1 style="margin-top: 0px; text-align: center; font-family: 'Cormorant',; padding-top: 0px; opacity: 0.5;">
            User Agreement</h1>
          <hr><br/><br/>
          <b>DISCLAIMER</b>
          <p style="text-align: justify; margin-top: 0px; padding-bottom: 50px;padding-top:10px;">
            Please be <mark style="color:yellow">aware</mark> that our products’ colours may look slightly different to
            how they appear on devices― and colours may vary from one batch to the next. Due to the nature
            of the living colours of our natural dyes, colours may change and mature over time.
            Once our orders for meterage of cloth have been cut from the roll, we are no longer able to offer <mark
              style="color:yellow">returns</mark> or <mark style="color:yellow">refunds</mark>.</p>

          <b>UNDELIVERED ITEMS</b>
          <p style="padding-bottom: 40px; text-align: justify; margin-top: 10px;">For posted items which are
            undelivered, we request notification within 2 weeks, so that the item may be tracked and recovered. Any posted items
            which remain undelivered and unnotified to us by dispatcher accidentally, we would do replace it with new item. We will ensure the
            item <mark style="color:yellow">safe</mark> we will notice about time for those such items which we send to client.</p>

            <div style="border:1px solid #fff;">
          
        </div>

          <h1 style="margin-top: 100px; text-align: center; font-family: 'Cormorant',; padding-top: 0px; opacity: 0.5;">
            Privacy Policy</h1>
          <hr><br/><br/>
          <b style="padding-left:0px;">INFORMATION</b>
          <p style="margin-top: 5px; text-align: justify; margin-left:0px;;padding-top:5px;">We record names and
            contact email
            addresses via the email sign-up box and pop-up boxes on our website.
            We use this information to send out occasional emails to update our followers with newsletters (blog
            articles,
            announcements, reports), promotional (sales, deals, gifts, offers), partnerships and funding cooperation
            (business deals, partnership opportunities, investment), product/service (updates, new or removed) or
            market
            research (surveys, qual & quant research, feedback, ratings and reviews).
            Don't be worry, we collect and securely store this informaation. We do not share this information with
            anyone else. Despite, it may be accessed by staff or assistants who help with our social media
            marketing,
            but we do not allow anyone to collect or store this information. This data is stored with us
            indefinitely,
            or until the client may wish to remove
            their contact information from our mailing list, at which point it is deleted from our files.
            If you wish to unsubscribe from our mailing list you are welcome to do this at any time.</p>
        </div>
      </div>

      <div id="content">
        <div id="agreement-es" style="display: none;">
          <h1 style="margin-top: 0px; text-align: center; font-family: 'Cormorant',; padding-top: 0px; opacity: 0.5;">
            Persetujuan Pengguna</h1>
          <hr><br/><br/>
          <b>DISKLAIMER</b>
          <p style="text-align: justify;margin-top: 0px; padding-bawah: 50px;padding-top:10px;">
            Mohon <mark style="color: yellow">perhatikan</mark> bahwa warna produk kami mungkin terlihat sedikit berbeda
            tampilannya di layar― dan warnanya mungkin berbeda dari persediaan saat ini ke persediaan berikutnya. Karena sifatnya,
            dari warna-warna hidup material pewarna alami, warna dapat berubah dan sempurna seiring berjalannya waktu.
            Sekali memesan pakaian, ukuran pakaian yang diminta telah dipotong dari gulungan, kami tidak dapat lagi menawarkan <tanda
              style="color:kuning">pengembalian</mark> atau <mark style="color:kuning">pengembalian dana</mark>.</p>
            <br/><br/><br/>
              
          <b>BARANG TIDAK TERKIRIM</b>
          <p style="padding-bottom: 40px; text-align: justify; margin-top: 10px;">Untuk item yang diposting namun tidak
            terkirim,
            kami meminta pemberitahuan dalam waktu maksimal 2 minggu, sehingga barang dapat dilacak dan dipulihkan. Setiap item
            yang diposting, tetap tidak terkirim dan tanpa pemberitahuan kepada kami oleh pihak jasa kargo, kami akan mengganti dengan item yang baru. Kami akan memastikan barang dalam keadaan
            <mark style="color: yellow">aman</mark>. Kami juga akan memberitahu waktu barang akan sampai kepada klien.</p>

        <div style="border:1px solid #fff;">
          
        </div>
              <h1
                style="margin-top: 100px; text-align: center; font-family: 'Cormorant',; padding-top: 0px; opacity: 0.5;">
                Kebijakan Privasi</h1>
              <hr><br/><br/>
              <b style="padding-left:0px;">INFORMASI</b>
              <p style="margin-top: 5px; text-align: justify; margin-left:0px;;padding-top:5px;">Kami mencatat nama dan
                alamat email melalui formulir informasi pengiriman dan kotak pop-up di situs web kami.
                Kami menggunakan informasi ini untuk mengirimkan informasi aktivitas kami sesekali untuk memperbarui pengikut kami dengan
                buletin (blog artikel, pengumuman, laporan), promosi (penjualan, penawaran, hadiah, penawaran), kemitraan dan kerja sama
                pendanaan (kesepakatan bisnis, peluang kemitraan, investasi), produk/layanan (pembaruan, baru atau dihapus) atau
                pasar penelitian (survei, penelitian kualitas & kuantitas, umpan balik, penilaian dan ulasan).
                Jangan khawatir, kami mengumpulkan dan menyimpan informasi ini dengan aman. Kami tidak membagikan
                informasi ini kepada orang lain. Meskipun demikian, hal itu dapat diakses oleh staf atau asisten yang membantu media sosial kami dalam
                pemasaran, namun kami tidak mengizinkan siapa pun mengumpulkan atau menyimpan informasi ini. Data ini disimpan
                bersama kami tanpa batas waktu, atau sampai klien mungkin ingin menghapus informasi kontak mereka dari daftar kami, yang kemudian akan dihapus dari file kami.
                Jika Anda ingin berhenti berlangganan dari aktivitas kami, Anda dapat melakukannya kapan saja.</p>
            </div>
          </div>
        </div>
      

        <br /><br />

              <?php echo "<p style='margin-left:0px;text-align:center;'>&nbsp;<a href=\"index.php\" class=\"ref\">Kembali</a></p>"; ?>

        <script src="lang.js"></script>

        <?php
        include('wa.php');

        ?>

          <script>
            $(window).on('load', function () {
              $(".loader").fadeOut(5000);
              $(".content").fadeIn(5000);
            });
          </script>

        
</body>

</html>
