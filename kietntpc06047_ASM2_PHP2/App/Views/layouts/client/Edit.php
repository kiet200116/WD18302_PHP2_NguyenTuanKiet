<a href="?url=AddDa/loadViewAddDa"></a>
<!-- Content Start -->
<div class="content">

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
        <a href="index.php" class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
        </a>
        <a href="#" class="sidebar-toggler flex-shrink-0">
            <i class="fa fa-bars"></i>
        </a>
        <form class="d-none d-md-flex ms-4">
            <input class="form-control bg-dark border-0" type="search" placeholder="Search">
        </form>
        <div class="navbar-nav align-items-center ms-auto">
            <div class="nav-item dropdown">
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img class="rounded-circle me-lg-2" src="../Src/img/user.jpg" alt=""
                        style="width: 40px; height: 40px;">
                    <span class="d-none d-lg-inline-flex">John Doe</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                    <a href="#" class="dropdown-item">Thông tin cá nhân</a>
                    <a href="#" class="dropdown-item">Cài đặt</a>
                    <a href="?url=LoginController/logout" class="dropdown-item">Đăng xuất</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Recent Sales Start -->
    <?php
    
    ?>
    <form action="?url=DaXc/suaXl" method="POST">
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Thêm dự án</h6>

                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-white">
                                <input type="hidden" name="id" value='<?=$id?>'>
                                <div>
                                    <label for="loginInputEmail1" class="form-label">Họ và tên khách hàng </label>
                                    <input name="name" type="name" class="form-control" id="loginInputEmail1"
                                        aria-describedby="nameHelp" value=<?=$name?>>

                                </div>
                                <div>
                                    <label for="loginInputEmail1" class="form-label">Tên dự án</label>
                                    <input name="nameDa" type="nameDa" class="form-control" id="loginInputEmail1"
                                        aria-describedby="nameHelp" value=<?=$nameDa?>>

                                </div>
                                <div>
                                    <label for="loginInputEmail1" class="form-label">Ngày bắt đầu</label>
                                    <input name="start_time" type="date" class="form-control" id="party"
                                        aria-describedby="nameHelp"
                                        value="<?=$start_time?>" >

                                </div>
                                <div>
                                    <label for="loginInputEmail1" class="form-label">Ngày kết thúc</label>
                                    <input name="end_time" type="date" class="form-control" id="loginInputEmail1"
                                        aria-describedby="nameHelp" value=<?=$end_time?>>

                                </div>
                            </tr>
                        </thead>
                        <input type="submit" name="them" class="btn btn-primary" value="THÊM MỚI">
                    </table>
                </div>
            </div>
        </div>
    </form>
    <!-- Recent Sales End -->