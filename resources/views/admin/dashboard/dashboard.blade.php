@extends('admin.master')


@section('title')
Dashboard
@endsection

@section('contain')
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->


    <div class="container"><div class="row">
            <div class="col-md-3">
                <div class="panel panel-primary">

                    <div class="well">


                        <div class="banner-grid">
	
			
				<!-- Slide Image Area (1000 x 424) -->
			
					<img class="img-responsive" src="{{asset('public/frontEnd/images/')}}/kajal.jpg"  />
					
				

				<!-- Slide Description Image Area (316 x 328) -->
				
				
			
			
		
	<script type="text/javascript" src="{{asset('public/frontEnd/js/pignose.layerslider.js')}}"></script>
	
</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection