<!DOCTYPE html>
<html>

<head>
 @include('home.css')
</head>

<body>

  <div class="hero_area">
  @include('home.header')

    
  <h1 style="text-align: center;"> ALL HOTEL LISTINGS</h1>


  {{-- <div class="container mt-5">
    <div class="row">
    <aside class="col-md-3">
    <form action="{{url('/')}}" method="GET">
    <div class="card">
    <article class="filter-group">
    <header class="card-header">
    <a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" <i class="icon-control fa fa-chevron-down"></i>
    </a>
    <h6 class="title">Product Title</h6>
    </header>
    <div class="filter-content collapse show" id="collapse_1" style="">
    <div class="card-body">
    <div class="input-group">
    <input type="text" class="form-control" placeholder="Search" name="title"> </div>
    </div>
    </div>
</div>
</div>
  </div>

</article> <!-- filter-group .// -->

<article
class="filter-group">
<div class="filter-content collapse show" id="collapse_3" style=""> <div class="card-body">
<div class="form-row">
<div class="form-group col-md-6">
<label>Min</label>
<input class="form-control" placeholder="$0" type="number" name="min"> </div>
<div class="form-group text-right col-md-6">
<label>Max</label>
<input class="form-control" placeholder="$1,0000" type="number! name= =""> </div>
</div> <!-- form-row.// -->
<button class="btn btn-block btn-primary">Apply</button>
</div><!-- card-body.// -->
</div>
</article>
</aside>
  </div>
</div> --}}



{{-- sort section up--}}
<div class="form-group">
<label for="date_filter">Filter by Date:</label>
<form method="get" action="{{url('show_hotel')}}">
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
        <th scope="col">hotel name</th>
        <th scope="col">location</th>
        <th scope="col">speciality</th>
        <th scope="col">posted at</th>


      </tr>
    </thead>
    <tbody>
        @php
        $a = 1;
    @endphp
        @foreach ($hotel as $p)
      <tr>
        <td>@php
            echo $a++;
        @endphp</td>        <td>{{$p->name}}</td>
        <td>{{$p->location}}</td>
        <td>{{$p->speciality}}</td>
<td>{{ $p->created_at->format('Y-m-d H:i:s') }}</td>

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