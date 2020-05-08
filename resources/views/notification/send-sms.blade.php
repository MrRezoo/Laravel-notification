@extends('layouts.vertical')

@section('title','Send Sms')

@section('css')
    <link rel="stylesheet" type="text/css" href='{{asset("/assets/css/select2.css")}}'>
@endsection

@section('content')
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="select2-drpdwn">
            <div class="row justify-content-md-center">

                <div class="col-md-8">
                    <div class="card">
                        @if (session('failed'))
                            <div class="alert alert-danger">{{session('failed')}}</div>
                        @endif
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif
                        <div class="card-header">
                            <h5 class="card-title">@lang('notification.send_sms')</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{route('notification.send.sms')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    @if($errors->any())
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <div class="small mb-2">
                                                    <li class="text-danger">{{$error}}</li>
                                                </div>
                                            @endforeach
                                        </ul>
                                    @endif

                                    <div class="mb-4">
                                        <label class="col-form-label" for="user">@lang('notification.user')</label>
                                        <select class="form-control js-example-basic-multiple col-sm-12"
                                                multiple="multiple"
                                                name="user" id="user">
                                            @foreach ($users as $user)
                                                <option
                                                    {{old('user') == $user->id ? 'selected' : '' }} value="{{$user->id}}">{{$user->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-5">
                                        <label class="col-form-label"
                                               for="text">@lang('notification.sms_text')</label>
                                        <textarea class="form-control form-control-secondary btn-square" name="text"
                                                  id="text">{{old('text')}}
                                        </textarea>
                                    </div>


                                    <div class="row justify-content-md-around">
                                        <button class="btn btn-pill btn-outline-success-2x btn-air-success"
                                                type="submit"
                                                title="">@lang('notification.send')</button>

                                        <a class="btn btn-pill btn-outline-danger-2x btn-air-danger"
                                           href="{{route('home')}}"
                                           title="">@lang('notification.cancel')</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection

@section('js')
    <script src='{{asset("/assets/js/select2/select2.full.min.js")}}'></script>
    <script src='{{asset("/assets/js/select2/select2-custom.js")}}'></script>
@endsection
