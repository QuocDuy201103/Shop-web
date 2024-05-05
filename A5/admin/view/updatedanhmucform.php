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
        margin-top: 30px;
        position: relative;
        animation: modalFadein ease 0.5s;
    }

    .modal-heading {
        background-color: rgba(40, 58, 90, 0.9);
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 30px;
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
        margin-bottom: 12px;
        cursor: pointer;
    }

    .modal-input {
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 100%;
        font-size: 16px;
        padding: 5px 10px;
        margin-bottom: 20px;
    }

    #buy-ticket {
        border: none;
        background-color: rgba(40, 58, 90, 0.9);
        width: 100%;
        font-size: 15px;
        padding: 16px;
        color: #fff;
        border-radius: 4px;
        text-align: center;
        text-transform: uppercase;
        cursor: pointer;
    }

    .modal__img {
        width: 100px;
        height: 100px;
    }

    #buy-ticket:hover {
        opacity: 0.8;
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

    /* end modal nhap them */

    .edit-category {
        padding: 4px 8px;
        font-size: 14px;
        background-color: #fad435;
        color: #000;
        border-radius: 4px;
        text-decoration: none;
    }

    .del-category {
        padding: 4px 8px;
        font-size: 14px;
        background-color: #f44336;
        color: #000;
        border-radius: 4px;
        text-decoration: none;
    }
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
                <H1>CẬP NHẬT DANH MỤC</H1>
            </div>
            <div class="row frmcontent">
                <div class="row mb10 btn-edit">
                    <button class="edit-index btn-input-js">
                        <i class="bi bi-keyboard"></i>
                        Sửa danh mục</button>
                    <!-- <input class="edit-dark" type="file" name="fileUpLoad" id="upFile"> -->
                    <!-- <form name="form-post" action="POST" enctype="multipart/form-data">
                        </form> -->
                </div>
                <!-- modal nhap them-->
                <form action="index.php?act=updatedanhmucform" method="post" class="modal js-modal">
                    <div class="modal-container js-modal-container">
                        <div class="modal-close js-modal-close">
                            <i class="bi bi-x-circle"></i>
                        </div>
                        <header class="modal-heading">
                            <i class="modal-heading-icon fa-solid fa-suitcase"></i> Chỉnh sửa danh mục
                        </header>
                        <div class="modal-body">
                            <label for="modal-ticket-name" class="modal-label">
                                <i class="bi bi-postcard"></i>
                                Tên sản Phẩm</label>
                            <input type="modal-email" name="tendanhmuc" id="modal-ticket-name" class="modal-input" value="<?= $kqone[0]['tendanhmuc'] ?>">
                            <input type="hidden" name="id" value="<?= $kqone[0]['id'] ?>">
                            <!-- <label for="modal-ticket-price" class="modal-label">
                                    <i class="bi bi-currency-dollar"></i>
                                    Giá sản Phẩm</label>
                                <input type="modal-email" id="modal-ticket-price" class="modal-input">

                                <label for="modal-ticket-amount" class="modal-label">
                                    <i class="bi bi-box-seam"></i>
                                    Số lượng sản Phẩm</label>
                                <input type="number" id="modal-ticket-amount" class="modal-input">

                                <label for="modal-ticket-picture" class="modal-label">
                                    <i class="bi bi-image"></i>
                                    Ảnh sản phẩm</label>
                                <input class="modal-input" type="file" name="fileUpLoad" id="upFile"> -->

                            <input type="submit" id="buy-ticket" name="capnhat" value="Cập nhật">


                        </div>
                    </div>
                </form>
                <!-- end modal nhap them -->

                <!-- modal edit-->
                <form class="modal-edit js-modal-edit">
                    <div class="modal-container-edit js-modal-container-edit">
                        <div class="modal-close-edit js-modal-close-edit">
                            <i class="bi bi-x-circle"></i>
                        </div>
                        <header class="modal-heading-edit">
                            <i class="modal-heading-icon-edit fa-solid fa-suitcase"></i> Sửa đơn hàng
                        </header>
                        <div class="modal-body-edit">
                            <label for="modal-ticket-name" class="modal-label-edit">
                                <i class="bi bi-postcard"></i>
                                Tên sản phẩm</label>
                            <input type="modal-email" id="modal-ticket-name" class="modal-input-edit" value="Nước Hoa Gucci">

                            <label for="modal-ticket-price" class="modal-label-edit">
                                <i class="bi bi-currency-dollar"></i>
                                Giá sản phẩm</label>
                            <input type="modal-email" id="modal-ticket-price" class="modal-input-edit" value="200.000đ">

                            <label for="modal-ticket-amount" class="modal-label-edit">
                                <i class="bi bi-box-seam"></i>
                                Số lượng sản Phẩm</label>
                            <input type="number" id="modal-ticket-amount" class="modal-input-edit" value="50">

                            <label for="modal-ticket-picture" class="modal-label-edit-picture">
                                <i class="bi bi-image"></i>
                                Ảnh sản phẩm</label>
                            <img src="../assets/img/portfolio/bleuchanel.webp" alt="" class="modal__img">
                            <input class="modal-input-edit" type="file" name="fileUpLoad" id="upFile">

                            <button id="buy-ticket-edit" onclick="editProduct()">Sửa đơn hàng
                                <i class="fa-solid fa-check"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <!-- end modal edit -->

                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Tên danh mục</th>
                            <th>Ưu tiên</th>
                            <th>Hiển thị</th>
                            <th>Hành động</th>
                        </tr>
                        <?php
                        // var_dump($kq);
                        if (isset($kq) && (count($kq) > 0)) {
                            $i = 1;
                            foreach ($kq as $item) {
                                echo '
                                        <tr>
                                            <td>' . $i . '</td>
                                            <td>' . $item['tendanhmuc'] . '</td>
                                            <td>' . $item['uutien'] . '</td>
                                            <td>' . $item['hienthi'] . '</td>
                                            <td>
                                                <a class="edit-category" href="index.php?act=updatedanhmucform&id=' . $item['id'] . '">Sửa</a> | 
                                                <a class="del-category" href="index.php?act=deldanhmuc&id=' . $item['id'] . '">Xóa</a>
                                            </td>
                                        </tr>';
                                $i++;
                            }
                        }
                        ?>
                    </table>
                </div>

            </div>
        </div>
        <!-- <div class="footer-section">
                <ul class="pagination home-content__pagination">
                    <li class="pagination-item">
                        <a href="#" class="pagination-item__link">
                            <i class="bi bi-caret-left"></i>
                        </a>
                    </li>
                    <li class="pagination-item pagination-item--active">
                        <a href="#" class="pagination-item__link">
                            1
                        </a>
                    </li>
                    <li class="pagination-item">
                        <a href="#" class="pagination-item__link">
                            2
                        </a>
                    </li>
                    <li class="pagination-item">
                        <a href="#" class="pagination-item__link">
                            3
                        </a>
                    </li>
                    <li class="pagination-item">
                        <a href="#" class="pagination-item__link">
                            4
                        </a>
                    </li>
                    <li class="pagination-item">
                        <a href="#" class="pagination-item__link">
                            5
                        </a>
                    </li>
                    <li class="pagination-item">
                        <a href="#" class="pagination-item__link">
                            <i class="bi bi-caret-right"></i>
                        </a>
                    </li>
                </ul>
            </div> -->
    </div>
</section>

<script>
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

    function deleteUser() {
        alert("Bạn có chắc chắn xóa không?")
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
</script>

</body>

</html>