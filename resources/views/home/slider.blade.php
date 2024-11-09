<section class="slider_section ">
    <div class="container ">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="detail-box">
            <h1>
              Discover Restuarant And Food
            </h1>
            <p>
              when looking at its layout. The point of using Lorem Ipsum
            </p>
          </div>
          <div class="d-grid gap-15">
            <a href="{{url('add_hotel')}}" class="btn btn-primary"> add hotel listing</a>
            <a href="{{url('add_food')}}" class="btn btn-primary"> add food listing</a>
            <a href="{{url('show_food')}}" class="btn btn-danger"> view all food </a>
            <a href="{{url('show_hotel')}}" class="btn btn-danger"> view hotels listing</a>
            
<form action="{{url('search_hotel')}}" method="get">
<input type="text" placeholder="Search with hotel name" name="search">
<button>Search</button>
</form>

<form action="{{url('search_food')}}" method="get">
  <input type="text" placeholder="Search with dish name" name="search">
  <button>Search</button>
  </form>

  <p  style="color: red; background-color:black; margin-top:40px;text-transform:capitalize;" >total number of hotels listed: {{$hotel}}</p>
  <p style="color: red; background-color:black;text-transform:capitalize;">total number of food listed: {{$food}}</p>



          </div>
        </div>
      </div>
    </div>
    <div class="slider_container">
      <div class="item">
        <div class="img-box">
          <img src="images/slider-img1.png" alt="" />
        </div>
      </div>
      <div class="item">
        <div class="img-box">
          <img src="images/slider-img2.png" alt="" />
        </div>
      </div>
      <div class="item">
        <div class="img-box">
          <img src="images/slider-img3.png" alt="" />
        </div>
      </div>
      <div class="item">
        <div class="img-box">
          <img src="images/slider-img4.png" alt="" />
        </div>
      </div>
      <div class="item">
        <div class="img-box">
          <img src="images/slider-img1.png" alt="" />
        </div>
      </div>
      <div class="item">
        <div class="img-box">
          <img src="images/slider-img2.png" alt="" />
        </div>
      </div>
      <div class="item">
        <div class="img-box">
          <img src="images/slider-img3.png" alt="" />
        </div>
      </div>
      <div class="item">
        <div class="img-box">
          <img src="images/slider-img4.png" alt="" />
        </div>
      </div>
    </div>
  </section>