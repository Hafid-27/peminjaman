<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin</title>

  <!-- Bootstrap Core CSS -->
  <link href="<?php echo base_url() ?>assets/backend_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- MetisMenu CSS -->
  <link href="<?php echo base_url() ?>assets/backend_assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="<?php echo base_url() ?>assets/backend_assets/dist/css/sb-admin-2.css" rel="stylesheet">

  <!-- Morris Charts CSS -->
  <link href="<?php echo base_url() ?>assets/backend_assets/vendor/morrisjs/morris.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="<?php echo base_url() ?>assets/backend_assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- DataTables CSS -->
  <!-- <link href="<?php echo base_url() ?>assets/backend_assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet"> -->

  <!-- DataTables Responsive CSS -->
  <!-- <link href="<?php echo base_url() ?>assets/backend_assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet"> -->

  <!-- datatabel export to pdf exel dll -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  <style>
    @media print {

      .pp,
      .ppb,
      .print,
      .tabel,
      .setujui,
      .tolak,
      .lbsd,
      .bd {
        display: none;
      }
    }

    @page {
      size: landscape;
    }
  </style>

</head>

<body>

  <div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-primary bg-info navbar-static-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand text-white" href="#">Selamat Datang Admin, <?php echo $userdata['name'] ?></a>
      </div>
      <!-- /.navbar-header -->

      <!--<ul class="nav navbar-top-links navbar-right">

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
          </a>
          <ul class="dropdown-menu dropdown-user">
            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
            </li>
            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
            </li>
            <li class="divider"></li>
            <li><a href="<?php echo base_url('admin/do_logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
          </ul>

        </li>

      </ul>-->
      <!-- /.navbar-top-links -->

      <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
          <ul class="nav" id="side-menu">

            <!--<li>
              <a href="<?php echo base_url() ?>"><img src="<?= base_url('asset-login/images/login/pos_indonesia.png'); ?>" title="poltek" width="40" /> <b> Administrator</b></a>
            </li>-->
            <li>
              <a href="<?php echo base_url('admin/dashboard') ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
              <a href="#"><i class="fa fa-users fa-fw"></i> Data Peminjam<span class="fa arrow"></span></a></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="<?php echo base_url('admin_system/peminjam') ?>"><i class="fa fa-eye fa-fw"></i> Lihat Akun </a>
                </li>
                <li>
                  <a href="<?php echo base_url('admin_system/peminjam_form') ?>"><i class="fa fa-plus fa-fw"></i> Add Akun</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="fa fa-life-ring fa-spin fa-1x fa-fw"></i> Fasilitas<span class="fa arrow"></span></a></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="<?php echo base_url('admin_system/dokumen') ?>"><i class="fa fa-eye fa-fw"></i> Lihat Stok Fasilitas</a>
                </li>
                <li>
                  <a href="<?php echo base_url('admin_system/dokumen_form') ?>"><i class="fa fa-plus fa-fw"></i> Add Fasilitas</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="<?php echo base_url('admin_system/pinjam') ?>"><i class="fa fa-check-square fa-fw"></i> Permintaan Peminjaman</a>
            </li>
            <li>
              <a href="<?php echo base_url('admin_system/kembali') ?>"><i class="fa fa-undo fa-fw"></i> Permintaan Pengembalian</a>
            </li>
            <li>
              <a href="<?php echo base_url('admin_system/riwayat') ?>"><i class="fa fa-history fa-fw"></i> Riwayat Peminjaman</a>
            </li>
            <li>
              <a href="#"><i class="fa fa-flag fa-fw"></i> Laporan<span class="fa arrow"></span></a></a>
              <ul class="nav nav-second-level">
                <li>
                  <a href="<?php echo base_url('admin_system/laporan_pinjam') ?>"><i class="fa fa-flag-checkered fa-fw"></i> Fasilitas Yang Sedang Dipinjam</a>
                </li>
              </ul>
            </li>
            <li>
              <a href="<?php echo base_url('admin/do_logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>

          </ul>
        </div>
        <!-- /.sidebar-collapse -->
      </div>
      <!-- /.navbar-static-side -->
    </nav>


    <div id="page-wrapper">
      <?php echo $content ?>
    </div>
    <!-- /#page-wrapper -->

    <div class="panel-footer">
      <div class="copyright text-right text-primary">Copyright &copy; 2023 UBSI Karawang 12207164</div>
    </div>
  </div>
  <!-- /#wrapper -->

  <!-- jQuery -->
  <script src="<?php echo base_url() ?>assets/backend_assets/vendor/jquery/jquery.min.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="<?php echo base_url() ?>assets/backend_assets/vendor/bootstrap/js/bootstrap.min.js"></script>

  <!-- Metis Menu Plugin JavaScript -->
  <script src="<?php echo base_url() ?>assets/backend_assets/vendor/metisMenu/metisMenu.min.js"></script>

  <!-- Morris Charts JavaScript -->
  <script src="<?php echo base_url() ?>assets/backend_assets/vendor/raphael/raphael.min.js"></script>
  <script src="<?php echo base_url() ?>assets/backend_assets/vendor/morrisjs/morris.min.js"></script>
  <script src="<?php echo base_url() ?>assets/backend_assets/data/morris-data.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="<?php echo base_url() ?>assets/backend_assets/dist/js/sb-admin-2.js"></script>

  <!-- DataTables JavaScript -->
  <!-- <script src="<?php echo base_url() ?>assets/backend_assets/vendor/datatables/js/jquery.dataTables.min.js"></script> -->
  <!-- <script src="<?php echo base_url() ?>assets/backend_assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script> -->
  <!-- <script src="<?php echo base_url() ?>assets/backend_assets/vendor/datatables-responsive/dataTables.responsive.js"></script> -->

  <!-- Validation Plugin -->
  <script src="<?php echo base_url() ?>assets/backend_assets/vendor/jquery-validation/jquery.validate.js"></script>


  <!-- datatabel export to pdf exel dll-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.colVis.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#example').DataTable({
        dom: 'Bfrtip',
        buttons: [{
            extend: 'excelHtml5',
            exportOptions: {
              columns: ':visible'
            }
          },
          {
            extend: 'pdfHtml5',
            messageTop: 'Laporan PDF Reporting',
            download: 'open',
            exportOptions: {
              columns: [0, 1, 2, 3, 4]
            }
          },
          'colvis'
        ]
      });
    });
  </script>
  <!-- end of datatabel export to pdf exel dll-->


  <!-- WARNING: DATA TABLES SCRIPT -->
  <!-- <script>
    $(document).ready(function() {
      $('#dataTables-example').DataTable({
        responsive: true
      });
    });
  </script> -->

  <!-- WARNING VALIDATE SCRIPT  -->
  <script type="text/javascript">
    var jvalidate = $("#peminjam_form").validate({
      ignore: [],
      rules: {
        username: {
          required: true
        },
        password: {
          required: true
        },
        name: {
          required: true
        },
        kode: {
          required: true
        },
        email: {
          required: true
        },
      },
      submitHandler: function(form) {
        var target = $(form).attr('action');
        $('#peminjam_form .alert-warning').removeClass('hidden');
        $('#peminjam_form .alert-success').addClass('hidden');
        $('#peminjam_form .alert-danger').addClass('hidden');
        $.ajax({
          url: target,
          type: 'POST',
          dataType: 'json',
          data: $(form).serialize(),
          success: function(response) {
            $('#peminjam_form .alert-warning').addClass('hidden');
            if (response.status == 'ok') {
              $('#peminjam_form .alert-success').removeClass('hidden').children('span').text(response.msg);
              window.location.href = response.redirect;
            } else
              $('#peminjam_form .alert-danger').removeClass('hidden').children('span').text(response.msg);
          },
          error: function(jqXHR, textStatus, errorThrown) {
            alert(textStatus, errorThrown);
          }
        });
      }
    });
  </script>

  <!-- WARNING VALIDATE SCRIPT  -->
  <script type="text/javascript">
    var jvalidate = $("#dokumen_form").validate({
      ignore: [],
      rules: {
        name: {
          required: true
        },
        nama_pt: {
          required: true
        },
        kode: {
          required: true
        },
        desc: {
          required: true
        },
        stock: {
          required: true
        },
        status: {
          required: true
        },
      },
      submitHandler: function(form) {
        var target = $(form).attr('action');
        $('#dokumen_form .alert-warning').removeClass('hidden');
        $('#dokumen_form .alert-success').addClass('hidden');
        $('#dokumen_form .alert-danger').addClass('hidden');
        $.ajax({
          url: target,
          type: 'POST',
          dataType: 'json',
          data: $(form).serialize(),
          success: function(response) {
            $('#dokumen_form .alert-warning').addClass('hidden');
            if (response.status == 'ok') {
              $('#dokumen_form .alert-success').removeClass('hidden').children('span').text(response.msg);
              window.location.href = response.redirect;
            } else
              $('#dokumen_form .alert-danger').removeClass('hidden').children('span').text(response.msg);
          },
          error: function(jqXHR, textStatus, errorThrown) {
            alert(textStatus, errorThrown);
          }
        });
      }
    });
  </script>

</body>

</html>