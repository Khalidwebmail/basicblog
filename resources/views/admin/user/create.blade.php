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
              <h3 class="box-title">Add Admin</h3>
            </div>
            <!-- /.box-header -->
            @include('includes.message')
            <!-- form start -->
            <form role="form" action="{{ route('user.store') }}" method="post">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="col-lg-6 col-lg-offset-3 ">
                  <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Username..." value="{{old('name')}}">
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Email..." value="{{old('email')}}">
                </div>
  
                <div class="form-group">
                  <label for="phone">Phone</label>
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone..." value="{{old('phone')}}">
                </div>

                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Password..." value="{{old('password')}}">
                </div>

                <div class="form-group">
                  <label for="confirm_password">Confirm Password</label>
                  <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm Password...">
                </div>
                
                <div class="form-group">
                  <label for="user_status">User status</label>
                  <div class="checkbox">
                    <label><input type="checkbox" name="status" 
                    @if(old('status') == 1) 
                      checked
                    @endif value="1">Status</label>
                  </div>
                </div>

                <div class="form-group col-lg-12">
                  <label>Assign Role</label>
                  <div class="row">
                    @foreach($roles as $role)
                      <div class="col-lg-4">
                        <div class="checkbox">
                          <label><input type="checkbox" name="role[]" value="{{ $role->id }}">{{ $role->name }}</label>
                        </div>
                      </div>
                    @endforeach
                  </div>
                    
              <div class="form-group">
                  <input type="submit" class="btn btn-primary" value="Submit"><!-- </button> -->
                  <a href="{{ route('user.index') }}" class="btn btn-warning">Back</a><!-- </button> -->
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