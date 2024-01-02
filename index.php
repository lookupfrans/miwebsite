<!DOCTYPE html>
<html lang="en">

<head>
  <title>Stevenhoven Store</title>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" type="text/css" href="responsive.css">
  <link rel="icon" type="image/png" sizes="180x180" href="favo.png">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-3624269353063512"
     crossorigin="anonymous"></script>
    <style>
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
  background-image: url(../img/jpg6.jpg);
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
</head>

<body oncontextmenu="return false">
  <div class="loader" style="text-align:center;height:100vh; width:100vw;overflow:hidden;background:#000;">
    <img class="image-title" alt="" src="logo_one.png" style="margin-top:120px;width: 25%; height:50%;position:absolute;line-heignt:50%;"/>
    <div></div>
  </div>
  <div class="content">

  <div id="app" class="container">
    <h2>Stevenhoven Store</h2>
    <h3>Min 200.000</h3>
    <div class="text-right"><span class="cartcount">{{cartItems.length}} item(s) di keranjang</span></div>

    <div class="container">
      <div class="row" style="line-height:20px;">
        <div class="col-xs-3 text-center" v-for="item in items">
          <div class="img"><img class="img-responsive" :src="item.image" alt="" style="margin-top:15px;"></div><br/>
          <abbr title="Small">S</abbr>
          <abbr title="Medium">M</abbr>
          <abbr title="Large">L</abbr>
          <p title="10 Item Tersedia">10 Item Tersedia</p>
          <h5>{{ item.title }}</h5>
          <p class="text-center">
            <input v-model="item.qty" type="number" class="form-control" placeholder="Qty" min="1" />
          </p>
          <button @click="addToCart(item)" class="btn btn-sm btn-primary">Tambah</button>
          </p>
        </div>
      </div>
    </div><br/><br/>

    <h4>Keranjang</h4>
    <shopping-cart inline-template :items="cartItems">
      <div>
        <div v-for="(item, index) in items" class="product">
          <div class="producttitle">{{item.title}}</div>
          <div style="width:150px">Jumlah: <input v-model="item.qty" class="form-control input-qty" type="number"></div>
          <div class="price">{{item.price | formatCurrency}}</div>
          <!--<div class="discard" @click="removeItem(index)"><span class="glyphicon glyphicon-trash"></span>
          </div>-->
        </div>

        <table class="table table-cart">
          <tr v-show="items.length === 0">
            <td colspan="4" class="text-center">Keranjang Masih Kosong</td>
          </tr>
          <tr v-show="items.length > 0">
            <td class="blank"></td>
            <td class="carttotal">Total</td>
            <td class="cartamt">{{Total | formatCurrency}}</td>
          </tr>
        </table>

        <div class="checkout-div" v-show="items.length > 0">
          <div id="countDown"></div>
          <div id="expired"></div><br /><br />
          <fieldset>
            
              <object data="bc.jpg" width="100" height="100" style="margin-top:40px;" alt="barcode"
             ></object>
            <br />

            <a href="bc.jpg" download="QR_Code.jpg" name="mybarcode"
              style="color:red;font-size:normal;width: 20px;height: 20px;text-align:center;position:relative;">Download</a>
            <br /><br />

            <?php
            date_default_timezone_set('Asia/Bangkok');
            $mybarcode = date('Y-m-d H:i:s');
            $LogFile = fopen("timestamp.txt", "a");
            fputs($LogFile, "Date : $mybarcode\n");

            fclose($LogFile);
            ?>
            
          </fieldset>
          <form action="validate.php" method="post" onsubmit="return validate(this);">
            <table border="0" cellspacing="1" cellpadding="3">
              <tr>
                <td>
               <article style="margin:0;border-bottom:2px solid #fff;margin-bottom:30px;width:100%;font-size:20px;font-weight:bold;">Informasi Pengiriman</article>
                </td>
                </td>
              </tr>
              <tr>
                <td>Alamat Email: </td>
                <td> <input size="20" type="text" name="emailaddress" autocomplete="on" required> <span
                    id="check"></span></td>
              </tr>
              <tr>
                <td>Nama Lengkap: </td>
                <td> <input size="50" type="text" name="nama" autocomplete="on" required><span id="usrmsg"></span></td>
              </tr>
              <tr>
                <td>Alamat Lengkap: </td>
                <td> <input size="70" type="text" name="alamat" autocomplete="on" required></td>
              </tr>
              <tr>
                <td>Kode Item : </td>
                <td> <input class="firstClass" size="70" type="text" name="alamat2" autocomplete="on">(<i>dipisah dengan notasi koma berurutan apabila lebih dari satu</i>)</td>
              </tr>
              <tr>
                <td>Kuantitas (<i>dipisah dengan notasi koma berurutan apabila lebih dari satu</i>): </td>
                <td> <input class="secondClass" size="70" type="text" name="alamat2" autocomplete="on"></td>
              </tr>
              <tr>
                <td>Ukuran(<i>dipisah dengan notasi koma berurutan apabila lebih dari satu</i>): </td>
                <td> <input size="70" type="text" name="alamat2" autocomplete="on"></td>
              </tr>
              <tr>
                <td>Kota: </td>
                <td> <input size="30" type="text" name="kota" autocomplete="on" required></td>
              </tr>
              <tr>
                <td>Kecamatan: </td>
                <td> <input size="30" type="text" name="kecamatan" autocomplete="on" required></td>
              </tr>
              <tr>
                <td>Kelurahan: </td>
                <td> <input size="30" type="text" name="kelurahan" autocomplete="on" required></td>
              </tr>
              <tr>
                <td>Kode Pos: </td>
                <td> <input size="20" type="text" name="kodePos" autocomplete="on" pattern="\d{5}?"
                      title="Must be XXXXX" required></td>
              </tr>
              <tr>
                <td>Upload Resi Pembayaran(jpg): </td>
                <td><input type="file" id="myFile" name="file" accept="image/*" onchange="upload_check()" autocomplete="on" required style="margin-left:20px;"></td>
                <input id="max" type="hidden" name="MAX_FILE_SIZE" value="1000000" />
              </tr>
              <tr>
                <td>Nomor Seluler: </td>
                <td> <input size="30" type="text" name="seluler" autocomplete="on" pattern="\d{4}[\-]\d{4}[\-]\d{4}" title="Must be XXXX-XXXX-XXXX" required></td>
              </tr>
              <tr>
                <td><input type="submit" class="btn" name="submit" value="Proses"> </td>
                <td>
                  <input type="reset" class="btn" value="Atur Ulang">
                </td>
              </tr>
              <tr>
                <td>
                <td style="font-size:20px;text-align:center;"><input type="checkbox" class="myCheck" required>Dengan
                  menekan tombol proses, anda telah paham dan setuju terhadap <a href="ua.php"> Ketentuan dan Privasi Stevenhoven
                    Store</a></td>
                </td>
              </tr>
            </table>
          </form><br/>
          <h6 style="text-align:right;font-size:20px;font-weight:bold;color:#fff;">&#169; Stevenhoven Store</h6>
        </div>

        <div id="message"></div>

        <div id="instructions">
          <h2>Add delivery instructions</h2>
          <p>Have any special requirements? You still have time to let us know:</p>
          <textarea id="additional-details-container"></textarea>
          <button id="delinstruct">Submit</button>
        </div>
      </div>
    </shopping-cart>
  </div>

<script>
  // Get the element with class "secondClass"
  var element = document.querySelector('.secondClass');

  // Check if the element is found
  if (element) {
    // Modify the content of the element
    element.innerText = 'Element found and modified using document.querySelector.';
    // Change the background color
    element.style.backgroundColor = '#eee';
  } else {
    // Log a message if the element is not found
    console.error('Element with class "secondClass" not found.');
  }
</script>

    

   <script>
      function upload_check()
      {
          var upl = document.getElementById("myFile");
          var max = document.getElementById("max").value;
      
          if(upl.files[0].size > max)
          {
             alert("Ukuran file maksimal 1 MB");
             upl.value = "";
          }
      };
  </script>

  <script src="countDown.js"></script>
  <script src="vue.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <script src="script.js"></script>

     <script>
    $(window).on('load', function () {
      $(".loader").fadeOut(5000);
      $(".content").fadeIn(5000);
    });
  </script>

</body>

</html>
