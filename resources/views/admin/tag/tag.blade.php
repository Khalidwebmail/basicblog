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
              <h3 class="box-title">Tag</h3>
            </div>
            <!-- /.box-header -->
            @include('includes.message')
            <!-- form start -->
            <form role="form" action="{{ route('tag.store') }}" method="post">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="col-lg-6 col-lg-offset-3 ">
                  <div class="form-group">
                  <label for="name">Tag tile</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Tag...">
                </div>

                <div class="form-group">
                  <label for="slug">Tag slug</label>
                  <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug...">
                </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit"><!-- </button> -->
                <a href="{{ route('tag.index') }}" class="btn btn-warning">Back</a><!-- </button> -->
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