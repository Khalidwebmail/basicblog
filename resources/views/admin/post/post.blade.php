@extends('admin.layout.app')

@section('headSection')
<link rel="stylesheet" type="text/css" href="{{ asset('admin//plugins/select2/select2.min.css') }}">
@endsection

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
            @include('includes.message')
            <!-- form start -->
            <form role="form" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
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

                <div class="form-group">
                <label>Select categories</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;" name="categories[]">
                  @foreach($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label>Select tags</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;" name="tags[]">
                  @foreach($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                  @endforeach
                </select>
              </div>

                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="status" value="1"> Publish
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

                <textarea placeholder="Place some text here" style="width: 100%; height: 600px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="body" id="editor1"></textarea>
              
            </div>
          </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('post.index') }}" class="btn btn-warning">Back</a>
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

@section('footerSection')
<script type="text/javascript" src="{{ asset('admin/plugins/select2/select2.full.min.js') }}"></script>

<script src="{{ asset('admin/ckeditor/ckeditor.js') }}"></script>

<script type="text/javascript">
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    //$(".textarea").wysihtml5();
  });
</script>

  <script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();
  });
</script>

@endsection