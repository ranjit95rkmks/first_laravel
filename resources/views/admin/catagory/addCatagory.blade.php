@extends('admin.master')


@section('title')
Add Catagory
@endsection

@section('contain')
<!--<div class="container">
    <div class="alert-success">
        <h1 align="center"><?php //echo $message['1'];  ?></h1>
    </div>
    <div class="alert-warning">
        <h1 align="center"><?php //echo $message['2'];  ?></h1>
    </div>
</div><br><br><br>-->
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Create Catagory</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->


    <div class="container"><div class="row">
            <div class="col-md-9">
                <div class="panel panel-primary">

                    <div class="well">


                        <form class="form-horizontal" action="{{url('/category-store')}}" method="POST" enctype="multipart/form-data">{{ csrf_field() }}
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Category Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="catagory_name" placeholder="Your Catagory">
                                </div>
                            </div>
                           

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Category Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control"name="catagory_description"></textarea>
                                </div>
                            </div>
<!--                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Blog image</label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control" name="blog_image" accept="image/*"/>
                                </div>
                            </div>-->
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Publication Status</label>
                                <div class="col-sm-10">
                                    <select class="form-control"name="publication_status">
                                        <option>---select Publiction Status---</option>
                                        <option value="1"> Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" name="btn" class="btn btn-success btn-block" ">Save Category</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
