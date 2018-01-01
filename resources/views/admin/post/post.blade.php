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
              <h3 class="box-title">Title</h3>
            </div>
            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
            @endif
            <!-- form start -->
            <form role="form" action="{{ route('post.store') }}" method="post">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="col-lg-6">
                  <div class="form-group">
                  <label for="title">Post tile</label>
                  <input type="text" name="title" class="form-control" id="title" placeholder="Title...">
                </div>

                <div class="form-group">
                  <label for="subtitle">Sub tile</label>
                  <input type="text" name="subtitle" class="form-control" id="subtitle" placeholder="Sub title...">
                </div>

                <div class="form-group">
                  <label for="slug">Slug</label>
                  <input type="text" name="slug" class="form-control" id="slug" placeholder="Slug...">
                </div>
              </div>
                
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="uploadimage">Upload image</label>
                  <input type="file" name="image" class="form-control" id="uploadimage">
                </div>

                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="status"> Publish
                  </label>
                </div>
              </div>
              </div>
              <!-- /.box-body -->

            
              <div class="box">
            <div class="box-header">
              <h3 class="box-title">Bootstrap WYSIHTML5
                <small>Simple and fast</small>
              </h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body pad">

                <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 600px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="body"></textarea>
              
            </div>
          </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form><!--End form-->

        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
