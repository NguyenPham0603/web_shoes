
<nav id="navbar-example2" class="navbar bg-body-tertiary px-3 mb-3">
    <ul class="nav nav-pills" style = "font-size: 18.3px; font-weight: bold; --bs-nav-link-color: var(--bs-pink);">
        <li class="nav-item">
            <a class="nav-link" href="index_emp.php?act=loaisanpham">Loại Sản Phẩm</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index_emp.php?act=sanpham">Sản Phẩm</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index_emp.php?act=donhang">Đơn Hàng</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="index_emp.php?act=khachhang">Khách Hàng</a>
        </li>
        <form action = "index_emp.php?act=timkiem" method = "POST">     
            <div class="p-1 bg-light rounded rounded-pill shadow-sm">
                <div class="input-group">
                    <input type="search" placeholder="Nhập nội dung tìm kiếm" name="tukhoa" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                    <div class="input-group-append">
                        <button name = "timkiem" id="button-addon1" type="submit" class="btn btn-link text-primary" style = "outline: none; border:none; border-radius: 10px; background:none; color:#d63384;">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>

        </form>
        <li class="nav-item">
            <div class="dropdown">
                <button class="btn btn-info btn-lg dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style = "border: none; background: none; outline:none;">
                    <i class="fas fa-bars" style="color: #ff0080;"></i>
                </button>
                <ul class="dropdown-menu">
                    <li style = "text-align:center;"><i class="fas fa-user-circle fa-lg" style="color: #ff0080;"></i></li>
                    <li><a class="dropdown-item" href="index_emp.php?act=thongtin">Thông tin nhân viên</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li class="nav-item">
                        <a class="nav-link" href="action/login_destroy_emp.php"
                            style = 'font-weight: 10; font-size: 14px; text-align: center; color: red'>
                            <i class="fas fa-sign-out-alt fa-xs" style="color: #d63384;"></i>
                            <?php
                                if(isset($_SESSION['username_emp'])){
                                    echo $_SESSION['name_emp'];
                                }
                            ?>
                        </a>
                    </li>
                </ul>
            </div> 
        </li>
        
    </ul>
</nav>

