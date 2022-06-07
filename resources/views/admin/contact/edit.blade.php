@extends('layouts.app')
@section('title','Farand || Dashboard')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>Edit</strong> <strong>Form</strong>
                        </div>
                        <div class="card-body card-block">
                            <form action="{{route('contact.update',$contact->id)}}" method="POST">
                                {{ csrf_field()}}
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="email" class=" form-control-label">Email</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="email" name="email" placeholder="Enter Email..." class="form-control" value="{{$contact->email}}">
                                        <span class="help-block">Please enter your email</span>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="pesan" class=" form-control-label">Message</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" name="pesan" placeholder="Enter Message...." class="form-control" value="{{$contact->pesan}}">
                                        <span class="help-block">Please enter your message</span>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-dot-circle-o"></i> Submit
                                </button>
                            </form>
                        </div>
                        <div class="card-footer">
                            <span>Please Enter The Form With the right data</span>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection