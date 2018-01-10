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
            <form role="form" action="{{ route('role.store') }}" method="post">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="col-lg-6 col-lg-offset-3 ">
                  <div class="form-group">
                  <label for="name">Role title</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Role...">
                </div>

                <div class="row">
                  <div class="col-lg-4">
                    <label for="name">Post permission</label>
                    @foreach($permissions as $permission)
                      @if($permission->for == 'post')
                      <div class="checkbox">
                        <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name }}</label>
                      </div>
                      @endif
                    @endforeach
                  </div>

                  <div class="col-lg-4">
                    <label for="name">User permission</label>
                    <div class="checkbox">
                      @foreach($permissions as $permission)
                      @if($permission->for == 'user')
                      <div class="checkbox">
                        <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name }}</label>
                      </div>
                      @endif
                    @endforeach
                    </div>
                  </div>

                  <div class="col-lg-4">
                    <label for="name">Other permission</label>
                    @foreach($permissions as $permission)
                      @if($permission->for == 'other')
                      <div class="checkbox">
                        <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}">{{ $permission->name }}</label>
                      </div>
                      @endif
                    @endforeach
                  </div>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit"><!-- </button> -->
                    <a href="{{ route('role.index') }}" class="btn btn-warning">Back</a><!-- </button> -->
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