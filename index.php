<!DOCTYPE html>
<html lang="en">

<head>
  <title>Shelf store</title>
  <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" type="text/css" href="responsive.css">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>

<body oncontextmenu="return false">

  <div id="app" class="container">
    <h2>Shelf store</h2>
    <h3>Min 100.000</h3>
    <div class="text-right"><span class="cartcount">{{cartItems.length}} item(s) di keranjang</span></div>

    <div class="container">
      <div class="row">
        <div class="col-xs-3 text-center" v-for="item in items">
          <div class="img"><img class="img-responsive" :src="item.image" alt=""></div>
          <h5>{{ item.title }}</h5>
          <p class="text-center">
            <input v-model="item.qty" type="number" class="form-control" placeholder="Qty" min="1" />
          </p>
          <button @click="addToCart(item)" class="btn btn-sm btn-primary">Tambah</button>
          </p>
        </div>
      </div>
    </div>

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
            <object
              data="https://www.bca.co.id/-/media/Feature/Card/List-Card/Tentang-BCA/Brand-Assets/Logo-BCA/Logo-BCA_Biru.png"
              class="object"></object><br /><br />
            <label for="fname">Nomor Akun Virtual#:</label>
            <input type="number" id="account" size="0" value="0812346752" readonly style="background-color:black;width:13%;"><br><br>
            <label for="lname">Nama: </label>
            <input type="textarea" id="fname" value="Fransen Steven Roby Saragih" readonly style="color:white;background-color:black;"><br><br>
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
                <td>Alamat Lengkap Kedua (Opsional):</td>
                <td> <input size="70" type="text" name="alamat2" autocomplete="on" required></td>
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
                  menekan tombol proses, anda telah paham dan setuju terhadap <a href="pp.php"> Ketentuan dan Privasi Shelf
                    store</a></td>
                </td>
              </tr>
            </table>
          </form><br/>
          <h6 style="text-align:right;font-size:20px;font-weight:bold;color:#fff;">&#169; H20 store</h6>
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

  <script src="countDown.js"></script>
  <script src="vue.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <script src="script.js"></script>
</body>

</html>
