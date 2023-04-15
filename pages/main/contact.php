<style>

.contact {
    display: flex;
    min-width: 1400px;
   margin: 120px auto 0;
   align-items: center;
   justify-content: center;
}

.image-1 iframe {
        width: 100%;
        margin: 60px;
    }

    .ten {
        font-weight: bold;
        font-size: 40px;
        margin-left: 50px;
        margin-bottom: 40px;
        margin-top: 10px;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }

    .icons {
        display: flex;
    }

    .icons i {
        font-size: 20px;
        margin-right: 20px;
        margin-bottom: 10px;
        color: rgb(15, 172, 26);
    }

    .icons p {
        font-size: 20px;
        margin-left: 5px;
    }

    .lienhe {
        font-weight: bold;
        font-size: 40px;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    
    .text {
        margin: auto;
    }
    
    .text-1 input {
        margin-top: 20px;
        font-size: 15px;
    }
    
    .form-name {
        width: 250px;
        height: 40px;
        border: 2px solid rgb(159, 156, 156);
    }

    .form-email {
        width: 250px;
        height: 40px;
        margin-left: 20px;
        border: 2px solid rgb(159, 156, 156);
    }
    
    .form-message {
        width: 522px;
        height: 100px;
        border: 2px solid rgb(159, 156, 156);
        margin-top: 20px;
        font-size: 15px;
        font-family: Arial;
    }

    .form-sbm {
        height: 40px;
        width: 350px;
        
        background-color: rgb(146 145 242);
        border: none;
        border-radius: 5px;
        margin-left: 85px;
        font-weight: bold;
        color: #25251d;
    }

    .form-sbm:hover {
        color: white;
        background-color: rgba(91, 90, 148, 0.605);
    }
</style>
<div class="contact">
    <div class="image-1">
        <iframe src="https://maps.app.goo.gl/skrpQcqYvqnsz3gX8" height="400" width="400" title="Google maps"></iframe>
    </div>

    <div class="text">
        <h2 class="ten">SHOP Minh Tú</h2>
        <div class="icons">
            <i class="fa-solid fa-location-dot"></i>
            <p>24 Đường Cầu Giấy, Bắc Từ Liêm, Hà Nội</p>
        </div>
        
        <div class="icons">
        <i class="fa-solid fa-phone-volume"></i>
        <p>1900 818 020</p>
        </div>

        <div class="icons">
            <i class="fa-solid fa-envelope"></i>
            <p>nguyenvantai@gmail.com</p>
        </div>

        <h2 class="lienhe">Liên Hệ Với Chúng Tôi</h2>

        <form method="post" class="form_contact">
            <div class="text-1">
                <input type="text" name="text-name" value-size="40" class="form-name" placeholder="Họ và tên">
                <input type="text" name="text-email" value-size="40" class="form-email" placeholder="Email">
            </div>

            <div class="text-1">
                <input type="text" name="text-email" value-size="40" class="form-name" placeholder="Số điện thoại">
                <input type="text" name="text-email" value-size="40" class="form-email" placeholder="Địa chỉ">
            </div>

            <div class="text-1">
                <textarea type="text" name="text-email" value-size="40" class="form-message" placeholder="Lời nhắn"></textarea>
            </div>

            <div class="text-1">
                <input type="submit" value="GỬI" class="form-sbm">
            </div>
        </form>
    </div>
</div>