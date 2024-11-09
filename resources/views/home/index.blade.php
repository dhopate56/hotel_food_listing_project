<!DOCTYPE html>
<html>

<head>
 @include('home.css')
</head>

<body>

  <div class="hero_area">
  @include('home.header')

   @include('home.slider')
  </div>

  @include('home.client')
  <div class="footer_container">
    @include('home.footer')
</body>

</html>