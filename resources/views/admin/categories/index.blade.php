@extends('layouts.admin')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">categories</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <section class="content">
      <div class="container-fluid">
        <p>
          <a href="#" class="btn btn-primary">Add new category</a>
        </p>
        <table class="table table-bordered table-striped">
          <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>ACTION</th>
          </tr>
          @foreach($categories as $c)
          <tr>
            <td>{{ $c->id }}</td>
            <td>{{$c->title}}</td>
            <td><a href="#" class="btn btn-info">Edit</a> <a href="#" class="btn btn-danger"> Delete</a></td>
          </tr>
          @endforeach
        </table>
      </div>
    </section>
@endsection
