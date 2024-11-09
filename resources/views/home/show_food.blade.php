<!DOCTYPE html>
<html>

<head>
 @include('home.css')
</head>

<body>

  <div class="hero_area">
  @include('home.header')

 
           <h1 style="text-align: center;"> ALL FOOD LISTINGS</h1>
       <div class="form-group">
    <div class="card">
 <h3>filter by price</h3> 
 <form action="{{url('/show_food')}}" method="GET">
 <article class="filter-group">
     <header class="card-header">
         <a href="#" data-toggle="collapse" data-target="#collapse_aside2" data-abc="true" aria-expanded="false" class="collapsed">
             <i class="icon-control fa fa-chevron-down"></i>
             <h6 class="title">Price </h6>
         </a>
     </header>
     <div class="filter-content collapse" id="collapse_aside2" style="">
         <div class="card-body">
             <div class="form-row">
             <div class="form-group col-md-6">
               <label>Min</label>
               <input class="form-control" placeholder="Rs0" type="number" name="min">
             </div>
             <div class="form-group text-right col-md-6">
               <label>Max</label>
               <input class="form-control" placeholder="Rs1,0000" type="number" name="max">
             </div>
             </div>  
             <button type="submit" class="btn btn-primary">Filter</button>
            </div>  
     </div>
 </article>
</form>
 
    </div>
       </div>
    



  <div class="form-group">
    <label for="date_filter">Filter by Date:</label>
    <form method="get" action="{{url('show_food')}}">
    <div class="input-group">
    <select class="form-select" name="date_filter">
    <option value="">All Dates</option>
    <option value="today">Today</option>
    <option value="yesterday">Yesterday</option>
    <option value="this_week">This Week</option>
    <option value="last_week">Last Week</option>
    <option value="this_month">This Month</option>
    <option value="last_month">Last Month</option>
    <option value="this_year">This Year</option>
    <option value="last_year">Last Year</option>
    </select>
    <button type="submit" class="btn btn-primary">Filter</button>
    </div>
    </form>
    </div>
  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">dish name</th>
        <th scope="col">price</th>
        <th scope="col">category</th>
        <th scope="col">hotel name</th>
        <th scope="col">posted at</th>

      </tr>
    </thead>
    <tbody>
        @php
        $a = 1;
    @endphp
        @foreach ($food as $p)
      <tr>
        <td>@php
            echo $a++;
        @endphp</td>        <td>{{$p->dish_name}}</td>
        <td>{{$p->price}}</td>
        <td>{{$p->category}}</td>
        <td>{{$p->hotel_name}}</td>
        <td>{{$p->created_at}}</td>



    </tr>
    @endforeach
     
    </tbody>
  </table>

  </div>

  @include('home.client')
  
  <div class="footer_container">
    @include('home.footer')
</body>

</html>