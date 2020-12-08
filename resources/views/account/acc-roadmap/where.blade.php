<title>phương tiện & thời gian - carsharing </title>
@extends("account.layouts.elements.master")
@section('content')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBqLMWBABFRGf932Y9dmmmby1mIrpL1-DQ&callback=initMap&libraries=places&v=weekly" defer></script>
<script>
  // This example requires the Places library. Include the libraries=places
  // parameter when you first load the API. For example:
  // <script
  // src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
  function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
      mapTypeControl: false,
      center: {
        lat: -33.8688,
        lng: 151.2195
      },
      zoom: 13,
    });
    new AutocompleteDirectionsHandler(map);
  }

  class AutocompleteDirectionsHandler {
    constructor(map) {
      this.map = map;
      this.originPlaceId = "";
      this.destinationPlaceId = "";
      this.travelMode = google.maps.TravelMode.WALKING;
      this.directionsService = new google.maps.DirectionsService();
      this.directionsRenderer = new google.maps.DirectionsRenderer();
      this.directionsRenderer.setMap(map);
      const originInput = document.getElementById("origin-input");
      const destinationInput = document.getElementById("destination-input");
      const modeSelector = document.getElementById("mode-selector");
      const originAutocomplete = new google.maps.places.Autocomplete(
        originInput
      );
      // Specify just the place data fields that you need.
      originAutocomplete.setFields(["place_id"]);
      const destinationAutocomplete = new google.maps.places.Autocomplete(
        destinationInput
      );
      // Specify just the place data fields that you need.
      destinationAutocomplete.setFields(["place_id"]);
      this.setupClickListener(
        "changemode-walking",
        google.maps.TravelMode.WALKING
      );
      this.setupClickListener(
        "changemode-transit",
        google.maps.TravelMode.TRANSIT
      );
      this.setupClickListener(
        "changemode-driving",
        google.maps.TravelMode.DRIVING
      );
      this.setupPlaceChangedListener(originAutocomplete, "ORIG");
      this.setupPlaceChangedListener(destinationAutocomplete, "DEST");
      this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(
        originInput
      );
      this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(
        destinationInput
      );
      this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(
        modeSelector
      );
    }
    // Sets a listener on a radio button to change the filter type on Places
    // Autocomplete.
    setupClickListener(id, mode) {
      const radioButton = document.getElementById(id);
      radioButton.addEventListener("click", () => {
        this.travelMode = mode;
        this.route();
      });
    }
    setupPlaceChangedListener(autocomplete, mode) {
      autocomplete.bindTo("bounds", this.map);
      autocomplete.addListener("place_changed", () => {
        const place = autocomplete.getPlace();

        if (!place.place_id) {
          window.alert("Please select an option from the dropdown list.");
          return;
        }

        if (mode === "ORIG") {
          this.originPlaceId = place.place_id;
        } else {
          this.destinationPlaceId = place.place_id;
        }
        this.route();
      });
    }
    route() {
      if (!this.originPlaceId || !this.destinationPlaceId) {
        return;
      }
      const me = this;
      this.directionsService.route({
          origin: {
            placeId: this.originPlaceId
          },
          destination: {
            placeId: this.destinationPlaceId
          },
          travelMode: this.travelMode,
        },
        (response, status) => {
          if (status === "OK") {
            me.directionsRenderer.setDirections(response);
          } else {
            window.alert("Directions request failed due to " + status);
          }
        }
      );
    }
  }
</script>
<style>
  #map {
    height: 100%;
  }

  html,
  body {
    height: 100%;
    margin: 0;
    padding: 0;
  }

  .controls {
    margin-top: 10px;
    border: 1px solid transparent;
    border-radius: 2px 0 0 2px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    height: 32px;
    outline: none;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
  }

  #origin-input,
  #destination-input {
    background-color: #fff;
    font-family: Roboto;
    font-size: 15px;
    font-weight: 300;
    margin-left: 12px;
    padding: 0 11px 0 13px;
    text-overflow: ellipsis;
    width: 200px;
  }

  #origin-input:focus,
  #destination-input:focus {
    border-color: #4d90fe;
  }

  #mode-selector {
    color: #fff;
    background-color: #4d90fe;
    margin-left: 12px;
    padding: 5px 11px 0px 11px;
  }

  #mode-selector label {
    font-family: Roboto;
    font-size: 13px;
    font-weight: 300;
  }
</style>

<body>
  <div class="container-fluid" id="grad1" style="    margin-top: 52px;">
    <div class="row justify-content-center mt-0">
      <div class="map_content">
        <div class="card px-0 pt-4 pb-0 mt-3 mb-3">

          <div class="row">
            <div class="col-md-12 mx-0">
              <form id="msform" action="{{ url('/account/acc-roadmap/vehicle') }}" method="POST" role="form">
                <!-- progressbar -->
                {{ csrf_field() }}
                <ul id="progressbar">
                  <li class="active" id="account"><strong>Đi đến đâu?</strong></li>
                  <li id="personal"><strong>Phương tiện & thời gian </strong></li>
                  <li id="payment"><strong>Thông tin & giá</strong></li>
                  <li id="confirm"><strong>Hoàn thành</strong></li>
                </ul>
                  <div class="col-4">
                    <label class="label-infor text-center" for=" ">NHẬP THÔNG TIN CHUYẾN</label>
                   
                  </div>
                <div class="row">
                 

                  <div class="col-md-12" id="map" style="height: 500px ">

                  </div>
                  <div style="display: none">
                    <input id="origin-input" class="controls w-25" type="text" placeholder="nhập địa điểm đi" />

                    <input id="destination-input" class="controls w-25" type="text" placeholder="nhập địa điểm đến" />

                    <div id="mode-selector" class="controls">
                      <input type="radio" name="type" id="changemode-walking" checked="checked" />
                      <label for="changemode-walking">đi bộ</label>

                      <input type="radio" name="type" id="changemode-transit" />
                      <label for="changemode-transit">đi tàu</label>

                      <input type="radio" name="type" id="changemode-driving" />
                      <label for="changemode-driving">đi xe</label>
                    </div>
                  </div>
                </div>
                </br>
                <div class="col-md-12" style="background-color: #effbfb00B">
                  <a href="{{('account/acc-roadmap/vehicle')}}" style="padding-right: 25px">
                    <button id="sign-up-button " id="nextVehicle" class="button-primary button-big " type="submit " value="Registrar ">TIẾP THEO</button></a>

                </div>
              </form>
              {{--  <div class="col-md-12" style="background-color: #effbfb00B">
                <a href="{{('acc-roadmap/vehicle')}}" style="padding-right: 25px">
                  <button id="sign-up-button " id="nextVehicle" class="button-primary button-big " type="submit " value="Registrar ">TIẾP THEO</button></a>

              </div>  --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container ">
      <div class="newsletter text-center ">
        <p class="title-top ">THEO DÕI BẢN TIN CỦA CHÚNG TÔI</p>
        <form class="contact-form contactAjax " action="contact ">
          <!-- <input type="hidden " name="titlePost " value="Đăng ký nhận thông tin ">
                    <input type="hidden " name="lang " value="vn ">
                    <input type="hidden " name="gmail " value="ntthuuyen.98@gmail.com "> -->
          <input name="email " type="email " id="contact_email " placeholder="Nhập địa chỉ email của bạn " required=" ">
          <button type="submit " class="button btn-register ">Subscribe</button>
        </form>
      </div>

      <div class="footer-menu text-center ">
        <ul>
          <li>
            <a href="cong-ty " data-name="tuyen-dung " data-title="Tuyển dụng ">
              Tuyển dụng </a>
          </li>
          <li>
            <a href="Dang-cap-nhat-1589779119 " data-name="phuong-thuc-thanh-toan " data-title="Phương thức thanh toán ">
              Phương thức thanh toán </a>
          </li>
          <li>
            <a href="tro-giup " data-name="giao-hang-va-doi-tra " data-title="Giao hàng và đổi trả ">
              Chuyến xe &amp; Hủy chuyến </a>
          </li>

          <li>
            <a href="lien-he " data-name="lien-he " data-title="Liên hệ ">
              HỆ THỐNG &amp; LIÊN HỆ </a>
          </li>
        </ul>
      </div>

      <div class="footer-bottom row ">
        <div class="col-xs-12 col-sm-3 ">
          <ul class="footer-icon ">
            <h4>FOLLOW US</h4>

            <li>
              <a href="https://www.facebook.com/kidostudiowear " class="fa fa-facebook-square " target="_blank " rel="nofollow "></a>
            </li>

            <li>
              <a href="https://www.instagram.com/kidosince2011 " class="fa fa-instagram " target="_blank " rel="nofollow "></a>
            </li>

            <li>
              <a href=" " class="fa fa-youtube-play " target="_blank " rel="nofollow "></a>
            </li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-6 ">
          <p class="copyright ">Copyright © 2020 CARSHARING. <a target="_blank " href="#/ ">By uyenb1605316</a></p>
        </div>
        <div class="col-xs-12 col-sm-3 ">
          <ul class="footer-icon text-right ">
            <!-- <li><i class="fa fa-cc-mastercard "></i></li>
                        <li><i class="fa fa-cc-paypal "></i></li>
                        <li><i class="fa fa-cc-visa "></i></li> -->
          </ul>
        </div>
      </div>
    </div>
  </footer>

</body>



@section('jsScript')

@endsection