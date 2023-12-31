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

    .loader>.image-title {
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
      0% {
        opacity: 1;
      }

      100% {
        opacity: 0;
      }
    }
  </style>

<body oncontextmenu="return false">
  <div class="loader" style="text-align:center;height:100vh; width:100vw;overflow:hidden;background:#000;">
    <div></div>
  </div>
  <!---<div class="content">

    <div class="message-wrapper" style="padding-right:200px;padding-left:200px;margin-left:0px;">
      <div class="container">
        <div id="content">
          <div id="agreement-en">
            <h1 style="margin-top: 0px; text-align: center; font-family: 'Cormorant',; padding-top: 0px; opacity: 0.5;">
              사용자 계약</h1>
            <hr><br /><br />
            <b>부인 성명</b>
            <p style="text-align: justify; margin-top: 0px; padding-bottom: 50px;padding-top:10px;">
              당사 제품의 색상은 개인에 따라 약간 다르게 보일 수 있다는 점을 <mark style="color:yellow">유의</mark>해 주시기 바랍니다.
              장치에 표시되는 방식 - 색상은 배치마다 다를 수 있습니다. 성격상
              천연염료의 살아있는 색상은 시간이 지남에 따라 색상이 변하고 성숙해질 수 있습니다.
              천 미터 단위의 주문이 롤에서 절단되면 더 이상 <마크>를 제공할 수 없습니다.
                <mark style="color:yellow">반품</mark> 또는 <mark style="color:yellow">환불</mark>.</p>

            <b>배달되지 않은 항목</b>
            <p style="padding-bottom: 40px; text-align: justify; margin-top: 10px;">게시된 항목의 경우
              배송되지 않은 경우, 상품을 추적하고 복구할 수 있도록 2주 이내에 알려 주시기 바랍니다. 게시된 모든 항목
              발송자가 실수로 배송되지 않고 당사에 알리지 않은 상태로 남아 있는 경우 새 품목으로 교체해 드립니다. 우리는
              항목 <mark style="color:yellow">안전</mark> 우리는 고객에게 보내는 해당 항목의 시간에 대해 알려드릴 것입니다.</p>

            <div style="border:1px solid #fff;">

            </div>

            <h1
              style="margin-top: 100px; text-align: center; font-family: 'Cormorant',; padding-top: 0px; opacity: 0.5;">
              개인 정보 정책</h1>
            <hr><br /><br />
            <b style="padding-left:0px;">정보</b>
            <p style="margin-top: 5px; text-align: justify; margin-left:0px;;padding-top:5px;">우리는 이름을 기록하고
              이메일 연락처
              당사 웹사이트의 이메일 가입 상자와 팝업 상자를 통해 주소를 입력합니다.
              우리는 이 정보를 사용하여 팔로어에게 뉴스레터를 업데이트하기 위해 가끔 이메일을 보냅니다(블로그
              조항,
              공지사항, 보고서), 프로모션(판매, 딜, 선물, 제안), 파트너십 및 펀딩 협력
              (비즈니스 거래, 파트너십 기회, 투자), 제품/서비스(업데이트, 신규 또는 제거) 또는
              시장
              연구(설문조사, 질적 및 양적 연구, 피드백, 평가 및 리뷰).
              걱정하지 마세요. 우리는 이 정보를 수집하고 안전하게 저장합니다. 우리는 이 정보를 다음과 공유하지 않습니다.
              다른 누군가. 그럼에도 불구하고 당사의 소셜 미디어를 돕는 직원이나 보조자가 접근할 수 있습니다.
              마케팅,
              그러나 우리는 누구도 이 정보를 수집하거나 저장하는 것을 허용하지 않습니다. 이 데이터는 당사에 저장됩니다
              무기한,
              또는 고객이 제거를 원할 때까지
              당사 메일링 리스트에 있는 연락처 정보는 당사 파일에서 삭제됩니다.
              메일링 리스트에서 탈퇴하고 싶으시면 언제든지 탈퇴하실 수 있습니다.</p>
          </div>
        </div>--->

        <div id="content">
          <div id="agreement-es" style="display: block; text-align: center ;">
            <h1 style="margin-top: 0px; text-align: center; font-family: 'Cormorant',; padding-top: 0px; opacity: 0.5;">
              Persetujuan Pengguna</h1>
            <hr><br /><br />
            <b>DISKLAIMER</b>
            <p style="text-align: justify;margin-top: 0px; padding-bawah: 50px;padding-top:10px;">
              Mohon <mark style="color: yellow">perhatikan</mark> bahwa warna produk kami mungkin terlihat sedikit
              berbeda
              tampilannya di layar― dan warnanya mungkin berbeda dari persediaan saat ini ke persediaan berikutnya.
              Karena sifatnya,
              dari warna-warna hidup material pewarna alami, warna dapat berubah dan sempurna seiring berjalannya waktu.
              Sekali memesan pakaian, ukuran pakaian yang diminta telah dipotong dari gulungan, kami tidak dapat lagi
              menawarkan <tanda style="color:kuning">pengembalian</mark> atau <mark style="color:kuning">pengembalian
                  dana</mark>.</p>
            <br /><br /><br />

            <b>BARANG TIDAK TERKIRIM</b>
            <p style="padding-bottom: 40px; text-align: justify; margin-top: 10px;">Untuk item yang diposting namun
              tidak
              terkirim,
              kami meminta pemberitahuan dalam waktu maksimal 2 minggu, sehingga barang dapat dilacak dan dipulihkan.
              Setiap item
              yang diposting, tetap tidak terkirim dan tanpa pemberitahuan kepada kami oleh pihak jasa kargo, kami akan
              mengganti dengan item yang baru. Kami akan memastikan barang dalam keadaan
              <mark style="color: yellow">aman</mark>. Kami juga akan memberitahu waktu barang akan sampai kepada klien.
            </p>

            <div style="border:1px solid #fff;">

            </div>
            <h1
              style="margin-top: 100px; text-align: center; font-family: 'Cormorant',; padding-top: 0px; opacity: 0.5;">
              Kebijakan Privasi</h1>
            <hr><br /><br />
            <b style="padding-left:0px;">INFORMASI</b>
            <p style="margin-top: 5px; text-align: justify; margin-left:0px;;padding-top:5px;">Kami mencatat nama dan
              alamat email melalui formulir informasi pengiriman dan kotak pop-up di situs web kami.
              Kami menggunakan informasi ini untuk mengirimkan informasi aktivitas kami sesekali untuk memperbarui
              pengikut kami dengan
              buletin (blog artikel, pengumuman, laporan), promosi (penjualan, penawaran, hadiah, penawaran), kemitraan
              dan kerja sama
              pendanaan (kesepakatan bisnis, peluang kemitraan, investasi), produk/layanan (pembaruan, baru atau
              dihapus) atau
              pasar penelitian (survei, penelitian kualitas & kuantitas, umpan balik, penilaian dan ulasan).
              Jangan khawatir, kami mengumpulkan dan menyimpan informasi ini dengan aman. Kami tidak membagikan
              informasi ini kepada orang lain. Meskipun demikian, hal itu dapat diakses oleh staf atau asisten yang
              membantu media sosial kami dalam
              pemasaran, namun kami tidak mengizinkan siapa pun mengumpulkan atau menyimpan informasi ini. Data ini
              disimpan
              bersama kami tanpa batas waktu, atau sampai klien mungkin ingin menghapus informasi kontak mereka dari
              daftar kami, yang kemudian akan dihapus dari file kami.
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
