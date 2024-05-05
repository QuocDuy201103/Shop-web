<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- các mã JavaScript khác -->
</head>
<style>
    /* modal nhap them */

    .modal {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.4);
        align-items: center;
        justify-content: center;
        display: none;
    }

    .modal.open {
        display: flex;
    }

    .modal-container {
        background-color: #fff;
        width: 900px;
        max-width: calc(100% - 32px);
        min-height: 200px;
        border-radius: 4px;
        margin-top: 60px;
        position: relative;
        animation: modalFadein ease 0.5s;
    }

    .modal-heading {
        background-color: rgba(40, 58, 90, 0.9);
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        border-radius: 4px;
        color: #fff;
    }

    .modal-heading-icon {
        margin-right: 10px;
    }

    .modal-close {
        position: absolute;
        right: 0;
        top: 0;
        padding: 8px 16px;
        font-size: 24px;
        color: #fff;
        cursor: pointer;
        opacity: 0.8;
    }

    .modal-close:hover {
        opacity: 1;
    }

    .modal-body {
        padding: 16px;
    }

    .modal-label {
        display: block;
        font-size: 15px;
        color: #000;
        margin-bottom: 10px;
        cursor: pointer;
    }

    .modal-input {
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 100%;
        font-size: 16px;
        padding: 5px 10px;
        margin-bottom: 6px;
    }

    #buy-ticket {
        border: none;
        background-color: rgba(40, 58, 90, 0.9);
        width: 100%;
        color: #fff;
        font-size: 15px;
        text-transform: uppercase;
        padding: 10px;
        cursor: pointer;
    }

    .modal__img {
        width: 100px;
        height: 100px;
    }

    #buy-ticket:hover {
        opacity: 0.8;
    }

    /* modal edit */

    .modal-edit {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background: rgba(0, 0, 0, 0.4);
        align-items: center;
        justify-content: center;
        display: none;
    }

    .modal-edit.open-edit {
        display: flex;
    }

    .modal-container-edit {
        background-color: #fff;
        width: 900px;
        max-width: calc(100% - 32px);
        min-height: 200px;
        border-radius: 4px;
        margin-top: 60px;
        position: relative;
        animation: modalFadein ease 0.5s;
    }

    .modal-heading-edit {
        background-color: rgba(40, 58, 90, 0.9);
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        border-radius: 4px;
        color: #fff;
    }

    .modal-heading-icon-edit {
        margin-right: 10px;
    }

    .modal-close-edit {
        position: absolute;
        right: 0;
        top: 0;
        padding: 8px 16px;
        font-size: 24px;
        color: #fff;
        cursor: pointer;
        opacity: 0.8;
    }

    .modal-close-edit:hover {
        opacity: 1;
    }

    .modal-body-edit {
        padding: 16px;
    }

    .modal-label-edit {
        display: block;
        font-size: 15px;
        color: #000;
        margin-bottom: 8px;
        cursor: pointer;
    }

    .modal-input-edit {
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 100%;
        font-size: 16px;
        padding: 5px 10px;
        margin-bottom: 10px;
    }

    #buy-ticket-edit {
        border: none;
        background-color: rgba(40, 58, 90, 0.9);
        width: 100%;
        color: #fff;
        font-size: 15px;
        text-transform: uppercase;
        padding: 16px;
        cursor: pointer;
    }

    #buy-ticket-edit:hover {
        opacity: 0.8;
    }

    .action {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    @keyframes modalFadein {
        from {
            opacity: 0;
            transform: translateY(-150px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .edit-user {
        padding: 4px;
        font-size: 14px;
        background-color: #fad435;
        color: #000;
        border-radius: 4px;
        text-decoration: none;

    }

    /* end modal nhap them */
</style>
<section class="home-section">
    <nav id="header">
        <div class="sidebar-button">
            <i class='bx bx-menu sidebarBtn'></i>
            <span class="dashboard">Quản Lý Sản Phẩm</span>
        </div>
        <div id="nav">
            <li>
                <a class="local-name" href="#">KDN
                </a>
            </li>
        </div>
    </nav>

    <div class="home-content">
        <div class="row ">
            <div class="row frmtitle">
                <H1>CẬP NHẬT DANH SÁCH TÀI KHOẢN KHÁCH HÀNG</H1>
            </div>
            <div class="row frmcontent">
                <div class="row mb10 btn-edit">
                    <button class="edit-index btn-input-js">
                        <i class="bi bi-keyboard"></i>
                        Chỉnh sửa thông tin
                    </button>
                </div>
                <!-- modal nhap them-->
                <form class="modal js-modal" method="post" action="index.php?act=updateuser">
                    <div class="modal-container js-modal-container">
                        <div class="modal-close js-modal-close">
                            <i class="bi bi-x-circle"></i>
                        </div>
                        <header class="modal-heading">
                            <i class="modal-heading-icon fa-solid fa-suitcase"></i> Chỉnh sửa thông tin tài khoản
                        </header>
                        <div class="modal-body">
                            <input type="hidden" name="id" value="<?= $oneuser[0]['id'] ?>">

                            <label for="modal-ticket-user" class="modal-label">
                                <i class="bi bi-postcard"></i>
                                Họ và tên</label>
                            <input type="text" id="modal-ticket-user" class="modal-input" name="fullname" value="<?= $oneuser[0]['fullname'] ?>">

                            <label for="modal-ticket-address" class="modal-label">
                                <i class="bi bi-house"></i>
                                Địa chỉ</label>
                            <input type="modal-email" id="modal-ticket-address" class="modal-input" name="address" value="<?= $oneuser[0]['address'] ?>">

                            <label for="modal-ticket-date" class="modal-label">
                                <i class="bi bi-calendar"></i>
                                Tên đăng nhập</label>
                            <input type="modal-email" id="modal-ticket-date" class="modal-input" name="username" value="<?= $oneuser[0]['username'] ?>" readonly>

                            <label for="modal-ticket-gender" class="modal-label">
                                <i class="bi bi-gender-ambiguous"></i>
                                Mật khẩu</label>
                            <input type="password" id="modal-password" class="modal-input" name="password" value="<?= $oneuser[0]['password'] ?>" readonly>
                            <input type="checkbox" value="" id="show-password-toggle">
                            <label for="show-pass">Hiện mật khẩu</label>

                            <label for="modal-ticket-phone" class="modal-label">
                                <i class="bi bi-phone-vibrate"></i>
                                Số điện thoại</label>
                            <input type="text" id="modal-ticket-phone" class="modal-input" name="phonenumber" value="<?= $oneuser[0]['phonenumber'] ?>">

                            <label for="modal-ticket-phone" class="modal-label">
                                <i class="bi bi-phone-vibrate"></i>
                                Email</label>
                            <input type="text" id="modal-ticket-phone" class="modal-input" name="email" value="<?= $oneuser[0]['email'] ?>" readonly>

                            <input id="buy-ticket-edit" type="submit" name="capnhatnguoidung" value="Cập nhật">
                        </div>
                    </div>
                </form>
                <!-- end modal nhap them -->

                <div class="row mb10 frmdsloai">
                    <table>
                        <?php
                        if (isset($user_info_list) && (count($user_info_list) > 0)) {
                            echo '<table>';
                            echo '
                                <tr>
                                    <th style="width:1%;">ID</th>
                                    <th style="width:5%;">Họ và Tên</th>
                                    <th>Địa chỉ</th>
                                    <th>Tên đăng nhập</th>
                                    <th style="width:2%;">SĐT</th>
                                    <th style="width:2%;">Email</th>
                                    <th style="width:6%;">Trạng thái</th>
                                    <th style="width:10%;background-color:#ccc;">Hành động</th>
                                </tr>';
                            foreach ($user_info_list as $user_info) {
                                echo '<tr>';
                                echo '<td>' . $user_info['id'] . '</td>';
                                echo '<td>' . $user_info['fullname'] . '</td>';
                                echo '<td>' . $user_info['address'] . '</td>';
                                echo '<td>' . $user_info['username'] . '</td>';
                                echo '<td>' . $user_info['phonenumber'] . '</td>';
                                echo '<td>' . $user_info['email'] . '</td>';
                                echo '<td>';
                                if ($user_info['status'] == 0) {
                                    echo '<span style="color: #f44336;">Đã khóa</span>';
                                } else {
                                    echo '<span style="color: #4caf50;">Đang hoạt động</span>';
                                }
                                echo '</td>';
                                echo '<td>
                                <form style="margin-bottom:5px;" method="post">
                                <input type="hidden" name="user_id" value="' . $user_info['id'] . '">
                                <button style="background-color: #f44336;color:#000;" type="button" class="lock-btn" onclick="lockUser(' . $user_info['id'] . ')">Khóa</button>
                                <button style="background-color: #4caf50;color:#000;" type="button" class="unlock-btn" onclick="unlockUser(' . $user_info['id'] . ')">Mở</button>
                                </form>
                                <a class="edit-user" href="index.php?act=updateuser&id=' . $user_info['id'] . '">Sửa</a> 
                                </td>';
                                echo '</tr>';
                            }
                            echo '</table>';
                        }
                        ?>
                        <!-- <tr>
                            <td><input type="checkbox" name="" id=""></td>

                            <td>#SIDFOP</td>
                            <td>Lý Triệu Phú</td>
                            <td>1A/79 ấp 3, phường 5, quận 7, Hồ Chí Minh</td>
                            <td>03/2/1990</td>
                            <td>Nam</td>
                            <td>0345182932</td>

                            <td>
                                <button class="edit-success" onclick="lockUser9()">
                                    <i id="btn-lock9" class="bi bi-unlock-fill"></i>
                                </button>
                                <button class="edit-color btn-edit-js" onclick="editUser()">
                                    <i class="bi bi-pencil-square"></i>
                            </td>
                        </tr> -->

                    </table>
                </div>
            </div>
        </div>
</section>

<script>
    const passwordInput = document.getElementById("modal-password");
    const showPasswordToggle = document.getElementById("show-password-toggle");

    showPasswordToggle.addEventListener("click", () => {
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            showPasswordToggle.textContent = "Hide";
        } else {
            passwordInput.type = "password";
            showPasswordToggle.textContent = "Show";
        }
    });
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else
            sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }

    function editUser() {
        alert("Bạn có muốn sửa không?")
    }


    //modal nhap them

    const buyBtnsAdd = document.querySelectorAll('.btn-input-js');
    const modalAdd = document.querySelector('.modal');
    const modalContainerAdd = document.querySelector('.js-modal-container')
    const modalCloseAdd = document.querySelector('.js-modal-close');
    //hàm hiển thị modal mua vé ( thêm class open vào modal)
    function showModalAdd() {
        modalAdd.classList.add('open');
    }
    //hàm ẩn modal mua vé (gỡ bỏ class open trên nút close)
    function hideModalAdd() {
        modalAdd.classList.remove('open');
    }

    //lặp qua từng thẻ btn và nghe hành vi click
    for (const buyBtn of buyBtnsAdd) {
        buyBtn.addEventListener('click', showModalAdd)
    }
    //nghe hành vi click vào nút close
    modalCloseAdd.addEventListener('click', hideModalAdd);

    modalAdd.addEventListener('click', hideModalAdd);

    modalContainerAdd.addEventListener('click', function(event) {
        event.stopPropagation();
    });



    //modal edit

    const buyBtnsEdit = document.querySelectorAll('.btn-edit-js');
    const modalEdit = document.querySelector('.modal-edit');
    const modalContainerEdit = document.querySelector('.js-modal-container-edit')
    const modalCloseEdit = document.querySelector('.js-modal-close-edit');
    //hàm hiển thị modal mua vé ( thêm class open vào modal)
    function showBuyTickets() {
        modalEdit.classList.add('open-edit');
    }
    //hàm ẩn modal mua vé (gỡ bỏ class open trên nút close)
    function hideBuyTickets() {
        modalEdit.classList.remove('open-edit');
    }

    //lặp qua từng thẻ btn và nghe hành vi click
    for (const buyBtnEdit of buyBtnsEdit) {
        buyBtnEdit.addEventListener('click', showBuyTickets)
    }
    //nghe hành vi click vào nút close
    modalCloseEdit.addEventListener('click', hideBuyTickets);

    modalEdit.addEventListener('click', hideBuyTickets);

    modalContainerEdit.addEventListener('click', function(event) {
        event.stopPropagation();
    });


    // <a href="/A5/model/unlock_user.php"></a>

    function lockUser(userId) {
        if (confirm('Bạn có chắc chắn muốn mở tài khoản này?')) {
            // Gửi yêu cầu mở tài khoản đến server
            $.ajax({
                url: 'view/lock_user.php',
                type: 'POST',
                data: {
                    user_id: userId
                },
                success: function(response) {
                    alert(response);
                    location.reload();
                },
                error: function() {
                    alert('Có lỗi xảy ra, vui lòng thử lại sau');
                }
            });
        }
    }

    function unlockUser(userId) {
        console.log("hello");
        if (confirm('Bạn có chắc chắn muốn mở khóa tài khoản này?')) {
            // Gửi yêu cầu mở khóa tài khoản đến server
            $.ajax({
                url: 'view/unlock_user.php',
                type: 'POST',
                data: {
                    user_id: userId
                },
                success: function(response) {
                    alert(response);
                    location.reload();
                },
                error: function() {
                    alert('Có lỗi xảy ra, vui lòng thử lại sau');
                }
            });
        }
    }
</script>

</body>

</html>