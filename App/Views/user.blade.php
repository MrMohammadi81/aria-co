@php
use App\Config;
$config = Config::URL;
@endphp
@extends('content')
@php
//var_dump($items);
@endphp
@section('user')
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tickets</h5>
                <div class="scroll dashboard-list-with-user ps">
                    @foreach ($items as $item)
                        <div class="d-flex flex-row mb-3 pb-3 border-bottom">
                            <a href="#">
                                <img src="/img/profiles/l-4.jpg" alt="Esperanza Lodge"
                                    class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall">
                            </a>
                            <div class="pl-3">
                                <a href="#">
                                    <p class="font-weight-medium mb-0 ">{{ $item->firstName }}</p>
                                    <p class="text-muted mb-0 text-small">24.07.2018 - 15:00</p>
                                </a>
                            </div>
                            <a href="/users/{{ $item->id }}/form" class="btn btn-success mx-auto">ویرایش
                            </a>
                        </div>
                    @endforeach
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; height: 270px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
