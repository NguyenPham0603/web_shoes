<nav id="navbar-example2" class="navbar bg-body-tertiary px-3 mb-3">
    <ul class="nav nav-pills" style = "font-size: 18.3px; font-weight: bold; --bs-nav-link-color: var(--bs-pink);">
        <li class="nav-item">
            <a class="nav-link" href="ad_index.php?act=quanlyloaisanpham">Loại Sản Phẩm</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="ad_index.php?act=quanlysanpham">Sản Phẩm</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="ad_index.php?act=quanlydonhang">Đơn Hàng</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="ad_index.php?act=quanlykhachhang">Khách Hàng</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="ad_index.php?act=quanlynhanvien">Nhân Viên</a>
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" href="ad_index.php?act=quanlytintuc">Tin Tức</a>
        </li> -->
        <form action = "ad_index.php?act=timkiem" method = "POST">     
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
            
            <a class="nav-link" href="action/login_destroy.php"
                style = 'font-weight: 10; font-size: 18px; color: red'>
                <i class="fas fa-sign-out-alt fa-xs" style="color: #d63384;"></i>
                <?php
                    if(isset($_SESSION['username'])){
                        echo $_SESSION['username'];
                    }
                ?>
            </a>
        </li>
    </ul>
</nav>