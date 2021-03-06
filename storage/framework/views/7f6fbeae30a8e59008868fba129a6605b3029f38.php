<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo $__env->yieldContent('title'); ?></title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo e(asset('public/admin/')); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo e(asset('public/admin/')); ?>/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo e(asset('public/admin/')); ?>/dist/css/sb-admin-2.css" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="<?php echo e(asset('public/admin/')); ?>/vendor/morrisjs/morris.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo e(asset('public/admin/')); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
                </div>
                <!-- /.navbar-header -->
                <?php echo $__env->make('admin.includefiles.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                
                <!-- /.navbar-top-links -->

                <?php echo $__env->make('admin.includefiles.leftside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <!-- /.sidebar-collapse -->
                
                <!-- /.navbar-static-side -->
            </nav>
            
            <?php echo $__env->yieldContent('contain'); ?>
            
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="<?php echo e(asset('public/admin/')); ?>/vendor/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo e(asset('public/admin/')); ?>/vendor/bootstrap/js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo e(asset('public/admin/')); ?>/vendor/metisMenu/metisMenu.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="<?php echo e(asset('public/admin/')); ?>/vendor/raphael/raphael.min.js"></script>
        <script src="<?php echo e(asset('public/admin/')); ?>/vendor/morrisjs/morris.min.js"></script>
        <script src="<?php echo e(asset('public/admin/')); ?>/data/morris-data.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo e(asset('public/admin/')); ?>/dist/js/sb-admin-2.js"></script>

    </body>

</html>

