<!DOCTYPE html>
<html>

<head>
 @include('home.css')
 <style>
    .title_deg{
        color: white;
        font-size: 60px;
        font-weight: bold;
        text-align: center;
        padding: 20px;
    }
    .div_center{
        text-align: center;
        margin: 10px;
        padding: 20px;
    }
    label{
        display: inline-block;
        width: 200px;
    }
    </style>
</head>

<body>

  <div class="hero_area">
  @include('home.header')

      <h1 class="title_deg">add food</h1>

  <div>
    <form action="{{url('store_food')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="div_center">
            <label for="">food name</label>
            <input type="text" name="dish_name">
        </div>
        <div class="div_center">
            <label for="">price</label>
            <input type="text" name="price">
        </div> <div class="div_center">
            <label for="">cuisine type</label>
            <input type="text" name="category">
        </div> <div class="div_center">
            <label for="">hotel name</label>
            <input type="text" name="hotel_name">
        </div>

<div class="div_center">
    <input type="submit" class="btn btn-primary">
</div>
</form>

</div>

  </div>
  @include('home.client')

 
  <div class="footer_container">
    @include('home.footer')
</body>

</html>