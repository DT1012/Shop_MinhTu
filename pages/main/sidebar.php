<div class="sidebar">
    <ul class="list-group">
        <?php
            $sql_danhmuc="SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
            $query_danhmuc=mysqli_query($connect,$sql_danhmuc);
            while ($row=mysqli_fetch_array($query_danhmuc)){

        ?>
        <li class="list-group-item sidebar_bg"><a class="sidebar_link" href="index.php?quanly=danhmuclist&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc']?></a></li>
        <?php

            }
            ?>
    </ul>
    <form name="frmTimKiem" id="frmTimKiem" method="POST" action="index.php?quanly=timkiemkhoanggia"> 
        <div class="row">
          
        <!-- START: Form nhập liệu Tiêu chí Tìm kiếm -->
        <div class="col">
          <div class="form-tim-kiem-san-pham">
    
            <div class="card">
              <!-- Tìm kiếm theo tên sản phẩm -->
             
    
              <!-- Tìm kiếm theo Loại sản phẩm -->
              
              <!-- Tìm kiếm theo Nhà sản xuất -->
              
              
    
              <!-- Tìm kiếm theo khoảng giá tiền -->
              <article class="card-group-item">
                <header class="card-header">
                  <h6 class="title">Khoảng tiền </h6>
                </header>
                <div class="filter-content">
                  <div class="card-body">
                    <div class="form-row">
                      <div class="form-group col ">
                        <label>Từ</label>
                        <!-- 
                          Thuộc tính name="" cần có trong các thành phần Nhập liệu (input, select, ...)
                          - FORM sẽ đóng gói dữ liệu người dùng (End User) nhập liệu vào đúng tên được đặt trong thuộc tính name=""
                          - Nếu muốn truyền dữ liệu dạng mảng (array) thì sử dụng cú pháp name="ten_tham_so[]"
                          Ví dụ: đặt tên là name="keyword_khuyenmai"
                        -->
                        <input type="range" class="custom-range" name="keyword_sotientu" min="0" max="100000000" step="100000" id="sotientu" value="0" oninput="document.getElementById('sotientu-text').innerHTML = this.value;">
                        <span><span id="sotientu-text">0</span></span>
                      </div>
                      <div class="form-group col text-right">
                        <label>Đến</label>
                        <input type="range" class="custom-range" name="keyword_sotienden" min="0" max="100000000" step="100000" id="sotienden" value="100000000" oninput="document.getElementById('sotienden-text').innerHTML = this.value;">
                        <span><span id="sotienden-text">100.000.000</span></span>
                      </div>
                    </div>
                  </div> <!-- card-body.// -->
                </div>
              </article> <!-- // Tìm kiếm theo khoảng giá tiền -->
              <div class="col ">
          <div class="text-center">
            <button class="btn btn-primary" name="btnTimKiem" id="btnTimKiem" >Tìm kiếm <i class="fa fa-forward" aria-hidden="true"></i></button>
          </div>
        </div>
              <!-- Tìm kiếm theo màu sắc sản phẩm -->
              
            </div>
          </div>
        </div>
        <!-- END: Form nhập liệu Tiêu chí Tìm kiếm -->
    
        <!-- START: Kết quả tìm kiếm theo Tiêu chí Tìm kiếm -->
        
        <!-- END: Kết quả tìm kiếm theo Tiêu chí Tìm kiếm -->
      </div>
    </form>
</div>