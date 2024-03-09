<?php
    $sql = "SELECT * FROM loai_sp ORDER BY LSP_MA ASC";
    $query = mysqli_query($connect, $sql);  
?>
<nav id="navbar-example2" class="navbar bg-body-tertiary px-5 mb-3">

    <a href="index.php" class="navbar-brand">
        <img src="../images/icon/Logo1.jpg" 
            style = "width: 85px; height: 65px;" >
    </a>
    <ul class="nav nav-pills" style = "font-size: 27px; font-weight: bold; --bs-nav-link-color: var(--bs-pink); margin-right: 58px;">
        <li class="nav-item">
            <a class="nav-link" href="index.php">  
                <i class="fa-solid fa-house" style="--bs-nav-link-color: var(--bs-pink);"></i>
                Trang Chủ
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Danh mục sản phẩm</a>
            <ul class="dropdown-menu">
                <?php
                while ($row = mysqli_fetch_array($query)) {
                ?>
                <li>
                    <a class="dropdown-item" href="index.php?quanly=danhmucsanpham&id=<?php echo $row['LSP_MA']; ?>">
                        <?php echo $row['LSP_TEN']; ?>
                    </a>
                </li>
                <?php
                }
                ?> 
            </ul>
        </li>
        <li class="nav-item">
            <!-- <button id = 'cart_menu' class="btn btn-primary" type="button" name = "giohang" style = "border:none; border-radius: 10px; background:none;"> -->
                <a href="index.php?quanly=giohang" class="nav-link">
                    Giỏ hàng    
                    <!-- <i class="fas fa-shopping-cart"></i> -->
                </a>    
            <!-- </button> -->
        </li>
        <!-- <li class="nav-item">
            <a class="nav-link" href="index.php?quanly=lienhe">Liên Hệ</a>  
        </li> -->
        <form action = "index.php?quanly=timkiem" method = "POST">     
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
            <div class="dropdown-center">
                <button class="btn btn-secondary dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false" style = "border: none; background: none; outline:none;">
                    <i class="fas fa-bars fa-lg"></i>
                </button>
                <ul class="dropdown-menu"   style = "width: 195px;">
                    <li style = "text-align:center;"><i class="fas fa-user-circle fa-lg" style="color: #ff0080;"></i></li>
                    <?php
                        if(isset($_SESSION['dangnhap'])){
                    ?>
                    <li><hr class="dropdown-divider"></li>
                    <li class="nav-item" id="user">
                        <a class="nav-link" href="index.php?quanly=thongtin">
                            <i class="fa-solid fa-user"></i>
                            <?php
                                echo "Thông Tin";
                            ?>
                        </a>
                    </li>
                    
                    <li class="nav-item" id="user">
                        <a class="nav-link" href="index.php?quanly=thaydoimk">
                            <i class="fa-solid fa-key"></i>
                            <?php
                                echo "Đổi Mật Khẩu";
                            ?>
                        </a>
                    </li>

                    <li class="nav-item" id="user">
                        <a class="nav-link" href="index.php?quanly=lichsu">
                            <i class="fa-solid fa-file-contract"></i>
                            <?php
                                echo "Đơn Hàng Của Bạn";
                            ?>
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li class="nav-item" id="user">
                        <a class="nav-link" href="action/dxuat_xuly.php">
                            <i class="fas fa-sign-out-alt fa-xs"></i>
                            <?php
                                echo $_SESSION['dangnhap'];
                            ?>
                        </a>
                    </li>
                    <?php
                            }
                        else if(isset($_SESSION['dangky'])){
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="main/dangnhap.php">Đăng nhập</a>
                    </li>
                    
                    <?php
                        }
                        else{
                    ?>
                    <!-- <li class="nav-item">
                        <span id="language">
                            <a href="#" onclick="setLang('en-US')"><img src="../images/icon/us.png" alt=""></a>
                            <a href="#" onclick="setLang('vi-VN')"><img src="../images/icon/vn.png" alt=""></a>
                        </span>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="main/dangky.php">Đăng Ký</a>
                    </li>
                    <?php
                        }
                    ?>
                </ul>
            </div> 
        </li>
                
    </ul>

</nav>
