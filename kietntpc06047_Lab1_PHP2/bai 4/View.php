<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>


        <!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/admin/images/favicon.png">
    <!-- CSS -->
    <link href="../assets/admin/libs/flot/css/float-chart.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/admin/extra-libs/multicheck/multicheck.css">
    <link href="../assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../assets/admin/libs/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/admin/libs/jquery-minicolors/jquery.minicolors.css">
    <link rel="stylesheet" type="text/css" href="../assets/admin/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/admin/libs/quill/dist/quill.snow.css">

    <!-- Custom CSS -->
    <link href="../assets/admin/dist/css/style.min.css" rel="stylesheet">

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <!-- <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div> -->
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
       
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
       
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
<div class="page-wrapper">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Thông tin</h5>
                        <div class="table-responsive">
                        <table id="" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Họ</th>
                                        <th>Email</th>
                                        <th>Mât Khẩu</th>
                                        <th>Tên</th>
                                        <th>Ngày Tạo</th>
                                        <th>Trạng Thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    while ($row = mysqli_fetch_assoc($user)):
                                ?>
                                    <tr>
                                        <td><?= $row['id'] ?></td>
                                        <td><?= $row['firstname'] ?></td>
                                        <td><?= $row['email'] ?></td>
                                        <td><?= $row['password'] ?></td>
                                        <td><?= $row['lastname'] ?></td>
                                        <td><?= $row['created_at'] ?></td>
                                        <td><?= $row['status'] ?></td>
                                        <td>
                                            <button type="button" class="btn btn-warning">Sửa</button>
                                        </td>
                                    </tr>

                                    <?php endwhile; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- footer -->
<!-- ============================================================== -->
<footer class="footer text-center">
    Copyright &copy; hello kiet
</footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="./../assets/admin/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="../assets/admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/admin/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="../assets/admin/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="../assets/admin/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="../assets/admin/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="../assets/admin/dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<!-- <script src="../assets/admin/dist/js/pages/dashboards/dashboard1.js"></script> -->
<!-- Charts js Files -->
<script src="../assets/admin/libs/flot/excanvas.js"></script>
<script src="../assets/admin/libs/flot/jquery.flot.js"></script>
<script src="../assets/admin/libs/flot/jquery.flot.pie.js"></script>
<script src="../assets/admin/libs/flot/jquery.flot.time.js"></script>
<script src="../assets/admin/libs/flot/jquery.flot.stack.js"></script>
<script src="../assets/admin/libs/flot/jquery.flot.crosshair.js"></script>
<script src="../assets/admin/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script src="../assets/admin/dist/js/pages/chart/chart-page-init.js"></script>

<script src="../assets/admin/extra-libs/multicheck/datatable-checkbox-init.js"></script>
<script src="../assets/admin/extra-libs/multicheck/jquery.multicheck.js"></script>
<script src="../assets/admin/extra-libs/DataTables/datatables.min.js"></script>
<script>
    /****************************************
     *       Basic Table                   *
     ****************************************/
    $('#zero_config').DataTable();
</script>

<script src="../assets/admin/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
<script src="../assets/admin/dist/js/pages/mask/mask.init.js"></script>
<script src="../assets/admin/libs/select2/dist/js/select2.full.min.js"></script>
<script src="../assets/admin/libs/select2/dist/js/select2.min.js"></script>
<script src="../assets/admin/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
<script src="../assets/admin/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
<script src="../assets/admin/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
<script src="../assets/admin/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
<script src="../assets/admin/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="../assets/admin/libs/quill/dist/quill.min.js"></script>


</script>


</body>

</html>

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
