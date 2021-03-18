@extends("layouts.index")
@section("content")
  <main>
        <h1>Location</h1>
        <div id="map"></div>
    </main>
      <script>
       function initMap() {
        const uluru = { lat: 53.6901507, lng: 91.3009575 };
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 5,
            center: uluru,
        });
        const marker = new google.maps.Marker({
          position: uluru,
          map: map,
        });
       }
       </script>
       <script async defer
         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDq2wPKRouiKca_6tHV90UqqgGnwpGtAN8&callback=initMap">
       </script>
@endsection
