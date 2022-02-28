<?php
    include('env.php');
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="css/all.css">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Lora:400,700|Montserrat:200,400,600&display=swap"
    rel="stylesheet">

  <!-- My CSS -->
  <link rel="stylesheet" href="css/style.css">

  <title>Hefa Store</title>
</head>

<body>

  <div class="container cart-header">
    <div class="row mt-5 text-center">
      <div class="col">
        <h3>Your Cart</h3>
        <p>Pastikan barang anda terbayar lunas</p>
      </div>
    </div>
  </div>

  <!-- Breadcrumbs -->
  <div class="container">
    <nav>
      <ol class="breadcrumb bg-transparent pl-0 cart-breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Cart Checkout</li>
      </ol>
    </nav>
  </div>


  <!-- Checkout -->
  <section class="checkout">
    <div class="container">
      <div class="row justify-content-between" style="margin-bottom: 100px;">
        <div class="col-lg-6">
          <h4 class="mb-4">Your Items</h4>
          <div class="row mb-4">
            <div class="col-2">
              <img src="img/cart/item1.png">
            </div>
            <div class="col-4">
              <h5 class="m-0">Jeans Papp</h5>
              <p class="m-0" style="color:#B7B7B7;">IDR 280.000.100</p>
            </div>
            <!-- <div class="col-4">
              <button type="button" class="btn btn-sm" style="background-color: #EAEAEF; color: white;"><i
                  class="fas fa-minus-circle"></i></button>
              <span class="mx-2">20</span>
              <button type="button" class="btn btn-sm btn-success" style="color: white;"><i
                  class="fas fa-plus-circle"></i></button>
            </div> -->
            <div class="col-4">
              <button type="button" class="btn btn-sm" style="background-color: #EAEAEF; color: white;" id="minus-btn1"><i
                  class="fas fa-minus-circle"></i></button>
              <!-- <span class="mx-2">20</span> -->
              <input type="number" id="qty_input1" class="text-right" value="1" min="1" style="background-color: white;border: none;width: 22%;">
              <button type="button" class="btn btn-sm btn-success" style="color: white;" id="plus-btn1"><i
                  class="fas fa-plus-circle"></i></button>
            </div>
            <div class="col-2 text-right">
              <button type="button" class="btn btn-sm btn-danger" style="color: white;"><i
                  class="fas fa-times-circle"></i></button>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col-2">
              <img src="img/cart/item1.png">
            </div>
            <div class="col-4">
              <h5 class="m-0">Jeans Papp</h5>
              <p class="m-0" style="color:#B7B7B7;">IDR 280.000.100</p>
            </div>
            <!-- <div class="col-4">
              <button type="button" class="btn btn-sm" style="background-color: #EAEAEF; color: white;"><i
                  class="fas fa-minus-circle"></i></button>
              <span class="mx-2">20</span>
              <button type="button" class="btn btn-sm btn-success" style="color: white;"><i
                  class="fas fa-plus-circle"></i></button>
            </div> -->
            <div class="col-4">
              <button type="button" class="btn btn-sm" style="background-color: #EAEAEF; color: white;" id="minus-btn2"><i
                  class="fas fa-minus-circle"></i></button>
              <!-- <span class="mx-2">20</span> -->
              <input type="number" id="qty_input2" class="text-right" value="1" min="1" style="background-color: white;border: none;width: 22%;">
              <button type="button" class="btn btn-sm btn-success" style="color: white;" id="plus-btn2"><i
                  class="fas fa-plus-circle"></i></button>
            </div>
            <div class="col-2 text-right">
              <button type="button" class="btn btn-sm btn-danger" style="color: white;"><i
                  class="fas fa-times-circle"></i></button>
            </div>
          </div>
          <div class="row mb-4">
            <div class="col-2">
              <img src="img/cart/item1.png">
            </div>
            <div class="col-4">
              <h5 class="m-0">Jeans Papp</h5>
              <p class="m-0" style="color:#B7B7B7;">IDR 280.000.100</p>
            </div>
            <div class="col-4">
              <button type="button" class="btn btn-sm" style="background-color: #EAEAEF; color: white;" id="minus-btn3"><i
                  class="fas fa-minus-circle"></i></button>
              <!-- <span class="mx-2">20</span> -->
              <input type="number" id="qty_input3" class="text-right" value="1" min="1" style="    background-color: white;border: none;width: 22%;">
              <button type="button" class="btn btn-sm btn-success" style="color: white;" id="plus-btn3"><i
                  class="fas fa-plus-circle"></i></button>
            </div>
            <div class="col-2 text-right">
              <button type="button" class="btn btn-sm btn-danger" style="color: white;"><i
                  class="fas fa-times-circle"></i></button>
            </div>
          </div>

          <h4 class="mb-3" style="margin-top: 100px;">Your Address</h4>

          <form>
            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="Alamat lengkap">
            </div>
            <div class="form-group">
              <label for="address2">Address II</label>
              <input type="text" class="form-control" id="address2" placeholder="Alamat tambahan">
            </div>
            <div class="form-group">
              <label for="city">City</label>
              <select class="custom-select">
                <option selected>Select City</option>
                <option value="1">Bandung</option>
                <option value="2">Jakarta</option>
                <option value="3">Surabaya</option>
              </select>
            </div>
            <div class="form-group">
              <label for="country">Country</label>
              <select class="custom-select">
                <option selected>Select Country</option>
                <option value="1">Indonesia</option>
                <option value="2">Malaysia</option>
                <option value="3">Singapore</option>
              </select>
            </div>
          </form>
        </div>

        <div class="col-lg-5">
          <div class="card rounded-0 checkout-detail">
            <div class="card-body">
              <h5 class="card-title">Informasi Biaya</h5>
              <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0">Jeans Papp</h6>
                  <small style="color: #B7B7B7;">2 Items</small>
                </div>
                <div class="col d-flex justify-content-end">
                  <h6 class="m-0 align-self-center text-success">IDR 600.000.000</h6>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0">Jeans Papp</h6>
                  <small style="color: #B7B7B7;">2 Items</small>
                </div>
                <div class="col d-flex justify-content-end">
                  <h6 class="m-0 align-self-center text-success">IDR 600.000.000</h6>
                </div>
              </div>

              <hr>

              <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0">Courier</h6>
                  <small style="color: #B7B7B7;">JNT Express</small>
                </div>
                <div class="col d-flex justify-content-end">
                  <h6 class="m-0 align-self-center text-success">IDR 201.000</h6>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0">Tax</h6>
                  <small style="color: #B7B7B7;">Negara 20%</small>
                </div>
                <div class="col d-flex justify-content-end">
                  <h6 class="m-0 align-self-center text-success">IDR 1.799.000</h6>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0">Eid Promo</h6>
                  <small style="color: #B7B7B7;">10% OFF</small>
                </div>
                <div class="col d-flex justify-content-end">
                  <h6 class="m-0 align-self-center text-danger">-IDR 50.000.000</h6>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col">
                  <h6 class="m-0">Total Harga</h6>
                </div>
                <div class="col d-flex justify-content-end">
                  <h6 class="m-0 align-self-center text-primary">IDR 1.520.940.300</h6>
                </div>
              </div>

            </div>
          </div>

          <div class="row mt-3">
            <div class="col">
              <a class="btn btn-block" href="<?= BASE_URL;?>"
                style="background-color: #EAEAEF; color: #ADADAD;">Cancel</a>
              <!-- <button type="button" class="btn btn-block" href="<?= BASE_URL;?>"
                style="background-color: #EAEAEF; color: #ADADAD;">Cancel</button> -->
            </div>
            <div class="col">
              <button type="button" class="btn btn-warning btn-block text-white" data-toggle="modal"
                data-target="#checkoutModal">Checkout</button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- Akhir Checkout -->


  <!-- Modal -->
  <div class="modal fade checkout-modal-success row" id="checkoutModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body text-center">
          <img src="img/cart/sukses_checkout.png" class="mb-5">
          <h3>Checkout Berhasil</h3>
          <p>Anda akan mendapatkan barang anda <br> dalam beberapa hari</p>
          <!-- <button type="button" class="btn mt-3" style="background-color: #EAEAEF; color: #ADADAD;"
            data-dismiss="modal">
            Home
          </button> -->
          <a class="btn mt-3" style="background-color: #EAEAEF; color: #ADADAD;"
            role="button" href="<?= BASE_URL;?>">
            Home
          </a>
        </div>
      </div>
    </div>
  </div>



  <!-- Footer -->
  <footer class="border-top p-5">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-1">
          <a href="">
            <img src="img/logo_small.png">
          </a>
        </div>
        <div class="col-4 text-right">
          <a href="">
            <img src="img/social/fb.png">
          </a>
          <a href="">
            <img src="img/social/twitter.png">
          </a>
          <a href="">
            <img src="img/social/ig.png">
          </a>
        </div>
      </div>
      <div class="row mt-3 justify-content-between">
        <div class="col-5">
          <p>All Rights Reserved by Hefa Store Copyright 2019.</p>
        </div>
        <div class="col-6">
          <nav class="nav justify-content-end text-uppercase">
            <a class="nav-link active" href="#">Jobs</a>
            <a class="nav-link" href="#">Developer</a>
            <a class="nav-link" href="#">Terms</a>
            <a class="nav-link pr-0" href="#">Privacy Policy</a>
          </nav>
        </div>
      </div>
    </div>
  </footer>
  <!-- Akhir Footer -->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/all.js"></script>

  <script>
        $(document).ready(function(){
            $('#qty_input1').prop('disabled', true);
            $('#plus-btn1').click(function(){
                $('#qty_input1').val(parseInt($('#qty_input1').val()) + 1 );
            });
            $('#minus-btn1').click(function(){
                $('#qty_input1').val(parseInt($('#qty_input1').val()) - 1 );
                if ($('#qty_input1').val() == 0) {
                    $('#qty_input1').val(1);
                }
            });
            
            $('#qty_input2').prop('disabled', true);
            $('#plus-btn2').click(function(){
                $('#qty_input2').val(parseInt($('#qty_input2').val()) + 1 );
            });
            $('#minus-btn2').click(function(){
                $('#qty_input2').val(parseInt($('#qty_input2').val()) - 1 );
                if ($('#qty_input2').val() == 0) {
                    $('#qty_input2').val(1);
                }
            });

            $('#qty_input3').prop('disabled', true);
            $('#plus-btn3').click(function(){
                $('#qty_input3').val(parseInt($('#qty_input3').val()) + 1 );
            });
            $('#minus-btn3').click(function(){
                $('#qty_input3').val(parseInt($('#qty_input3').val()) - 1 );
                if ($('#qty_input3').val() == 0) {
                    $('#qty_input3').val(1);
                }
            });
        });
  </script>

</body>

</html>