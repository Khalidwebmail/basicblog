@extends('admin.layout.app')

@section('main-content')
	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Text Editors
        <small>Advanced form element</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          

          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Category</h3>
            </div>
            <!-- /.box-header -->
            @include('includes.message')
            <!-- form start -->
            <form role="form" method="post" action="{{ route('category.update',$category->id ) }}">
              {{ csrf_field() }}
              {{ method_field('PUT') }}
              <div class="box-body">
                <div class="col-lg-6 col-lg-offset-3 ">
                  <div class="form-group">
                  <label for="name">Category name</label>
                  <input type="text" name="name" class="form-control" id="name" value="{{ $category->name }}">
                </div>

                <div class="form-group">
                  <label for="slug">Category slug</label>
                  <input type="text" name="slug" class="form-control" id="slug" value="{{ $category->slug }}">
                </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit"><!-- Submit</button> -->
                <a href="{{ route('category.index') }}"><input type="button" class="btn btn-warning" value="Back"></a>
            </div>

              </div>

            </div>
          </div>

        </form>
          
          <!-- /.box -->


          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection