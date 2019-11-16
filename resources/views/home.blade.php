@extends('layouts.frontLayouts.master')
@section('content')
@push('styles')
    <link href="{{ asset('css/frontend_css/index.css') }}" rel="stylesheet">

<div class="main">
  <div class="phim">
    <div class="active"><a href="#">PHIM HAY ĐANG CHIẾU</a> </div>
    <div><a href="#"> PHIM HAY SẮP CHIẾU</a> </div>
  </div>

  <!-- Portfolio Gallery Grid -->
  <div class="row">
  @foreach($home as $h)
    <div class="column ">
      <div class="content">
        <a href="{{route('detail',$h->id)}}">
          <img src="{{asset($h->photo)}}" alt="Mountains" class="w-100">
        </a>
        <p>{{$h->title}}</p>
      </div>
    </div>
  @endforeach
  </div> 
  <!-- END GRID -->
</div>
@endsection()

<!-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>

@endsection -->