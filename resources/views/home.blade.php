@extends('layouts.app')

@section('content')
    @if (session('error'))
        <div class="alert alert-success">
            {{ session('error') }}
        </div>
    @endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if(auth()->user()->role == 'ADMIN')
                    <a href="{{url('admin/routes')}}">Admin</a>
                @elseif (auth()->user()->role == 'GURU')
                    <div class=”panel-heading”>Guru</div>
                @else
                    <div class=”panel-heading”>Siswa</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
