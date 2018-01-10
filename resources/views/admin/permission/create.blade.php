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
              <h3 class="box-title">Roles</h3>
            </div>
            <!-- /.box-header -->
            @include('includes.message')
            <!-- form start -->
            <form role="form" action="{{ route('permission.store') }}" method="post">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="col-lg-6 col-lg-offset-3 ">
                  <div class="form-group">
                  <label for="name">Permission</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Permission...">
                </div>

                <div class="form-group">
                  <label for="for">Permission for</label>
                  <select name="for" id="for" class="form-control">
                    <option selected disabled>Select permission for</option>

                    <option value="user">User</option>
                    <option value="post">Post</option>
                    <option value="other">Other</option>
                  </select>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit"><!-- </button> -->
                    <a href="{{ route('permission.index') }}" class="btn btn-warning">Back</a><!-- </button> -->
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