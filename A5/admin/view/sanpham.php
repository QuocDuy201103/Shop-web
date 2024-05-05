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

    .edit-pro {
        padding: 4px 8px;
        font-size: 14px;
        background-color: #fad435;
        color: #000;
        border-radius: 4px;
        text-decoration: none;
    }

    .del-pro {
        padding: 4px 8px;
        font-size: 14px;
        background-color: #f44336;
        color: #000;
        border-radius: 4px;
        text-decoration: none;
    }

    .hide-pro {
        margin-top: 4px;
        padding: 4px 8px;
        font-size: 14px;
        background-color: #338f8e;
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
                <H1>SẢN PHẨM</H1>
            </div>
            <div class="row frmcontent">
                <div class="row mb10 btn-edit">
                    <button class="edit-index btn-input-js">
                        <i class="bi bi-keyboard"></i>
                        Thêm sản phẩm</button>
                </div>
                <!-- modal nhap them-->
                <form action="index.php?act=sanpham_add" method="post" class="modal js-modal" enctype="multipart/form-data">
                    <div class="modal-container js-modal-container">
                        <div class="modal-close js-modal-close">
                            <i class="bi bi-x-circle"></i>
                        </div>
                        <header class="modal-heading">
                            <i class="modal-heading-icon fa-solid fa-suitcase"></i> Nhập thêm sản phẩm
                        </header>
                        <div class="modal-body">
                            <label for="modal-ticket-name" class="modal-label">
                                <i class="bi bi-bookmark"></i>
                                Danh mục sản Phẩm</label>
                            <select name="iddanhmuc" id="" class="modal-input">

                                <?php
                                if (isset($dsdm)) {
                                    foreach ($dsdm as $dm) {
                                        echo '<option value="' . $dm['id'] . '">' . $dm['tendanhmuc'] . '</option>';
                                    }
                                }
                                ?>
                            </select>

                            <label for="modal-ticket-name" class="modal-label">
                                <i class="bi bi-postcard"></i>
                                Tên sản Phẩm</label>
                            <input type="modal-email" id="modal-ticket-name" class="modal-input" name="tensanpham">

                            <label for="modal-ticket-picture" class="modal-label">
                                <i class="bi bi-image"></i>
                                Ảnh sản phẩm</label>
                            <input class="modal-input" type="file" name="img" id="upFile">

                            <label for="modal-ticket-price" class="modal-label">
                                <i class="bi bi-currency-dollar"></i>
                                Giá sản Phẩm</label>
                            <input type="modal-email" id="modal-ticket-price" class="modal-input" name="gia">

                            <label for="modal-ticket-amount" class="modal-label">
                                <i class="bi bi-geo-alt-fill"></i>
                                Xuất xứ</label>
                            <input type="text" id="modal-ticket-origin" class="modal-input" name="xuatxu">

                            <label for="modal-ticket-amount" class="modal-label">
                                <i class="bi bi-droplet-fill"></i>
                                Dung tích</label>
                            <input type="text" id="modal-ticket-origin" class="modal-input" name="dungtich">

                            <label for="modal-ticket-amount" class="modal-label">
                                <i class="bi bi-chat-left-text"></i>
                                Mô tả</label>
                            <input type="text" id="modal-ticket-desc" class="modal-input" name="detail">

                            <input id="buy-ticket" type="submit" name="themsanpham" value="Thêm sản phẩm">
                        </div>
                    </div>
                </form>
                <!-- end modal nhap them -->


                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                            <th >STT</th>
                            <th style="width:4%;">Tên sản phẩm</th>
                            <th style="width:4%;">Ảnh</th>
                            <th>Giá</th>
                            <th style="width:2%;">Xuất xứ</th>
                            <th style="width:2%;">Dung tích</th>
                            <th style="width:10%;">Mô tả</th>
                            <th>Hành động</th>
                        </tr>
                        <?php
                        if (isset($kq) && (count($kq) > 0)) {
                            $i = 1;
                            foreach ($kq as $item) {
                                echo '
                                        <tr>
                                            <td>' . $i . '</td>
                                            <td>' . $item['tensanpham'] . '</td>
                                            <td><img src="' . $item['img'] . '" width="10px"></td>
                                            <td>' . number_format($item['gia']) . '</td>
                                            <td>' . $item['xuatxu'] . '</td>
                                            <td>' . $item['dungtich'] . '</td>
                                            <td>' . $item['detail'] . '</td>
                                            <td>
                                            <div style="margin-bottom:10px;">
                                                <a class="edit-pro" href="index.php?act=updatesanpham&id=' . $item['id'] . '">Sửa</a> 
                                            </div>
                                                <a class="hide-pro" href="index.php?act=ansanpham&id=' . $item['id'] . '">' . (($item['status'] == 1) ? 'Hiện sản phẩm' : 'Ẩn sản phẩm') . '</a>
                                            
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