@extends('layouts.app')
@section('title','Farand || Dashboard')
@section('content')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Data Contact</h2>
                    </div>
                </div>
            </div>
            <div class="row m-t-30">
                <div class="col-md-12">
                    <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Email</th>
                                    <th>Pesan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $index => $contact)
                                <tr>
                                    <td>{{$index +1}}</td>
                                    <td>{{$contact->email}}</td>
                                    <td>{{$contact->pesan}}</td>

                                    <td>
                                        <a href="{{ route('contact.edit', $contact->id)}}"><i class="fa-solid fa-user-pen"></i>Edit</a>
                                        |
                                        <a href="{{ route('contact.destroy', $contact->id)}}"><i class="fa-solid fa-trash-can-list"></i>Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                        {{$contacts->links()}}
                    </div>
                    <!-- END DATA TABLE-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection