@extends('layouts.app') 
@section('content') 
<div class="container mt-5"> 
    <div class="row justify-content-center align-items-center"> 
        <div class="card" style="width: 24rem;"> 
            <div class="card-header"> 
                Tambah Nama 
            </div>
            <div class="card-body"> 
                @if ($errors->any()) 
                <div class="alert alert-danger"> 
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul> 
                        @foreach ($errors->all() as $error) 
                        <li>{{ $error }}</li> 
                        @endforeach 
                    </ul> 
                </div> 
                @endif 
                <form method="post" action="{{ route('kelompokadmin.store') }}" id="myForm">
                @csrf 
                <div class="form-group"> 
                    <label for="id">id</label> 
                    <input type="text" name="id" class="form-control" id="id" aria-describedby="id" > 
                </div>
                <div class="form-group"> 
                    <label for="nama">Nama</label> 
                    <input type="nama" name="nama" class="form-control" id="nama" aria-describedby="nama" > 
                </div> 
                <div class="form-group"> 
                    <label for="status">Status Menang Undian</label>
                    <input type="status" name="status" class="form-control" id="status" aria-describedby="status" > 
                </div>
                <div class="form-group"> 
                    <label for="bulan">Bulan</label> 
                    <input type="bulan" name="bulan" class="form-control" id="bulan" aria-describedby="bulan" > 
                </div>
                    <button type="submit" class="btn btn-primary">Submit</button> 
                    </form> 
                </div> 
            </div> 
        </div> 
    </div>
@endsection
