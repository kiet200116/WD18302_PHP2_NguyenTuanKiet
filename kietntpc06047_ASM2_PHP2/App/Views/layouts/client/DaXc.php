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
                            <img class="rounded-circle me-lg-2" src="../Src/img/user.jpg" alt="" style="width: 40px; height: 40px;">
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
<form action="?url=DaXc/listDa" method="POST">
            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Danh sách dự án xây cầu</h6>
                        <a href="">Xem tất cả</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                <th scope="col">ID</th>
                                    <th scope="col">Họ và tên khách hàng</th>
                                    <th scope="col">Thời gian bắt đầu</th>
                                    <th scope="col">Thời gian kết thúc</th>
                                    
                                    <th scope="col">Tên dự án</th>
                                    <th>Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                         foreach ( $listDa as $items ):
                            extract($items);
                            ?>
                            <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td><?=$name?></td>
                            <td><?=$start_time?></td>
                            <td><?=$end_time?></td>
                            <td><?=$nameDa?></td>
                            
                            <td><a class="btn btn-sm btn-primary" href="?url=DaXc/suaDaXc&id=<?=$id?>">Sửa</a>
                                    <a class="btn btn-sm btn-primary" href="">Xóa</a></td>
                            
                        </tr>
                        <?endforeach?>
                         
                    ?> 
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </form>
            <!-- Recent Sales End -->