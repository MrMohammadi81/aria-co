@php
use App\Config;
$config = Config::URL;
@endphp
@extends('content')
@php
//var_dump($items);
@endphp
@section('userEdit')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="mb-4">Basic</h5>
                    <form action="/users/{{ $items[0]->id }}/update">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            @php
                               // print_r($items);
                                @endphp
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                placeholder="Enter username" name="firstName" value="{{ $items[0]->firstName }}">
                            <small id="emailHelp" class="form-text text-muted">Well never share your email
                                with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">lastName</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="lastName" name="lastName" value="{{ $items[0]->lastName }}">
                        </div>
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
                                ویرایش
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            آیای از ویرایش اطلاعات مطمئن هستید؟؟
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">خیر</button>
                                            <button type="submit" class="btn btn-primary mb-0">بله</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection
