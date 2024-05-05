<style>
    input.tim-kiem-nang-cao-input {
        color: #fff;
        background-color: rgba(40, 58, 90, 0.9);
        border: none;
        border-radius: 4px 0 4px 0;
        padding: 4px 6px;
    }
    input.tim-kiem-nang-cao-input:hover{
        opacity: 0.9;
    }
    .pagination-search {
        margin-top: 40px;
    }

    .page-link {
        --height: 30px;
        display: block;
        text-decoration: none;
        font: 1.6rem;
        color: rgba(40, 58, 90, 0.9);
        min-width: 40px;
        height: var(--height);
        line-height: var(--height);
        text-align: center;
        border-radius: 2px;
    }

    li.page-item.active {
        color: #fff;
        background-color: rgba(40, 58, 90, 0.9);
        border-radius: 4px 0 4px 0;
    }

    li.page-item.active:hover {
        opacity: 0.8;
    }

    .col-lg-4 {
        flex: 0 0 auto;
        width: 33.33333333%;
        text-align: center;
    }

    input.shopping-cart.btn.btn-outline-dark {
        display: flex;
        justify-content: center;
        margin: auto;
    }

    .shopping-cart {
        display: block;
        margin-top: 5px;
        padding: 2px 10px;
        width: 56%;
        height: 34px;
        color: #000;
    }

    .input-search {
        border: 1px solid #000;
    }

    ul.pagination-search {
        display: flex;
        justify-content: center;
        align-items: center;
        list-style-type: none;
    }

    .grid {
        width: 100%;
        display: block;
        padding: 0;
    }

    .grid.wide {
        max-width: 1200px;
        margin: 100px auto;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        margin-left: -4px;
        margin-right: -4px;
    }

    .row.no-gutters {
        margin-left: 0;
        margin-right: 0;
    }

    .col {
        padding-left: 10px;
        padding-right: 10px;
    }

    .row.no-gutters .col {
        padding-left: 0;
        padding-right: 0;
    }

    .c-0 {
        display: none;
    }

    .c-1 {
        flex: 0 0 8.33333%;
        max-width: 8.33333%;
    }

    .c-2 {
        flex: 0 0 16.66667%;
        max-width: 16.66667%;
    }

    .c-3 {
        flex: 0 0 25%;
        max-width: 25%;
    }

    .c-4 {
        flex: 0 0 33.33333%;
        max-width: 33.33333%;
    }

    .c-5 {
        flex: 0 0 41.66667%;
        max-width: 41.66667%;
    }

    .c-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .c-7 {
        flex: 0 0 58.33333%;
        max-width: 58.33333%;
    }

    .c-8 {
        flex: 0 0 66.66667%;
        max-width: 66.66667%;
    }

    .c-9 {
        flex: 0 0 75%;
        max-width: 75%;
    }

    .c-10 {
        flex: 0 0 83.33333%;
        max-width: 83.33333%;
    }

    .c-11 {
        flex: 0 0 91.66667%;
        max-width: 91.66667%;
    }

    .c-12 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    .c-o-1 {
        margin-left: 8.33333%;
    }

    .c-o-2 {
        margin-left: 16.66667%;
    }

    .c-o-3 {
        margin-left: 25%;
    }

    .c-o-4 {
        margin-left: 33.33333%;
    }

    .c-o-5 {
        margin-left: 41.66667%;
    }

    .c-o-6 {
        margin-left: 50%;
    }

    .c-o-7 {
        margin-left: 58.33333%;
    }

    .c-o-8 {
        margin-left: 66.66667%;
    }

    .c-o-9 {
        margin-left: 75%;
    }

    .c-o-10 {
        margin-left: 83.33333%;
    }

    .c-o-11 {
        margin-left: 91.66667%;
    }

    /* >= Tablet */

    @media (min-width: 740px) {
        .row {
            margin-left: -8px;
            margin-right: -8px;
        }

        .col {
            padding-left: 8px;
            padding-right: 8px;
        }

        .m-0 {
            display: none;
        }

        .m-1,
        .m-2,
        .m-3,
        .m-4,
        .m-5,
        .m-6,
        .m-7,
        .m-8,
        .m-9,
        .m-10,
        .m-11,
        .m-12 {
            display: block;
        }

        .m-1 {
            flex: 0 0 8.33333%;
            max-width: 8.33333%;
        }

        .m-2 {
            flex: 0 0 16.66667%;
            max-width: 16.66667%;
        }

        .m-3 {
            flex: 0 0 25%;
            max-width: 25%;
        }

        .m-4 {
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .m-5 {
            flex: 0 0 41.66667%;
            max-width: 41.66667%;
        }

        .m-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .m-7 {
            flex: 0 0 58.33333%;
            max-width: 58.33333%;
        }

        .m-8 {
            flex: 0 0 66.66667%;
            max-width: 66.66667%;
        }

        .m-9 {
            flex: 0 0 75%;
            max-width: 75%;
        }

        .m-10 {
            flex: 0 0 83.33333%;
            max-width: 83.33333%;
        }

        .m-11 {
            flex: 0 0 91.66667%;
            max-width: 91.66667%;
        }

        .m-12 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .m-o-1 {
            margin-left: 8.33333%;
        }

        .m-o-2 {
            margin-left: 16.66667%;
        }

        .m-o-3 {
            margin-left: 25%;
        }

        .m-o-4 {
            margin-left: 33.33333%;
        }

        .m-o-5 {
            margin-left: 41.66667%;
        }

        .m-o-6 {
            margin-left: 50%;
        }

        .m-o-7 {
            margin-left: 58.33333%;
        }

        .m-o-8 {
            margin-left: 66.66667%;
        }

        .m-o-9 {
            margin-left: 75%;
        }

        .m-o-10 {
            margin-left: 83.33333%;
        }

        .m-o-11 {
            margin-left: 91.66667%;
        }
    }

    /* PC medium resolution > */

    @media (min-width: 1113px) {
        .row {
            margin-left: -12px;
            margin-right: -12px;
        }

        .row.sm-gutter {
            margin-left: -5px;
            margin-right: -5px;
        }

        .col {
            padding-left: 12px;
            padding-right: 12px;
        }

        .row.sm-gutter .col {
            padding-left: 5px;
            padding-right: 5px;
        }

        .l-0 {
            display: none;
        }

        .l-1,
        .l-2,
        .l-2-4,
        .l-3,
        .l-4,
        .l-5,
        .l-6,
        .l-7,
        .l-8,
        .l-9,
        .l-10,
        .l-11,
        .l-12 {
            display: block;
        }

        .l-1 {
            flex: 0 0 8.33333%;
            max-width: 8.33333%;
        }

        .l-2 {
            flex: 0 0 16.66667%;
            max-width: 16.66667%;
        }

        .l-2-4 {
            flex: 0 0 20%;
            max-width: 20%;
        }

        .l-3 {
            flex: 0 0 25%;
            max-width: 25%;
        }

        .l-4 {
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .l-5 {
            flex: 0 0 41.66667%;
            max-width: 41.66667%;
        }

        .l-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .l-7 {
            flex: 0 0 58.33333%;
            max-width: 58.33333%;
        }

        .l-8 {
            flex: 0 0 66.66667%;
            max-width: 66.66667%;
        }

        .l-9 {
            flex: 0 0 75%;
            max-width: 75%;
        }

        .l-10 {
            flex: 0 0 83.33333%;
            max-width: 83.33333%;
        }

        .l-11 {
            flex: 0 0 91.66667%;
            max-width: 91.66667%;
        }

        .l-12 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .l-o-1 {
            margin-left: 8.33333%;
        }

        .l-o-2 {
            margin-left: 16.66667%;
        }

        .l-o-3 {
            margin-left: 25%;
        }

        .l-o-4 {
            margin-left: 33.33333%;
        }

        .l-o-5 {
            margin-left: 41.66667%;
        }

        .l-o-6 {
            margin-left: 50%;
        }

        .l-o-7 {
            margin-left: 58.33333%;
        }

        .l-o-8 {
            margin-left: 66.66667%;
        }

        .l-o-9 {
            margin-left: 75%;
        }

        .l-o-10 {
            margin-left: 83.33333%;
        }

        .l-o-11 {
            margin-left: 91.66667%;
        }
    }

    /* Tablet - PC low resolution */

    @media (min-width: 740px) and (max-width: 1023px) {
        .wide {
            width: 644px;
        }
    }

    /* > PC low resolution */

    @media (min-width: 1024px) and (max-width: 1239px) {
        .wide {
            width: 984px;
        }

        .wide .row {
            margin-left: -12px;
            margin-right: -12px;
        }

        .wide .row.sm-gutter {
            margin-left: -5px;
            margin-right: -5px;
        }

        .wide .col {
            padding-left: 12px;
            padding-right: 12px;
        }

        .wide .row.sm-gutter .col {
            padding-left: 5px;
            padding-right: 5px;
        }

        .wide .l-0 {
            display: none;
        }

        .wide .l-1,
        .wide .l-2,
        .wide .l-2-4,
        .wide .l-3,
        .wide .l-4,
        .wide .l-5,
        .wide .l-6,
        .wide .l-7,
        .wide .l-8,
        .wide .l-9,
        .wide .l-10,
        .wide .l-11,
        .wide .l-12 {
            display: block;
        }

        .wide .l-1 {
            flex: 0 0 8.33333%;
            max-width: 8.33333%;
        }

        .wide .l-2 {
            flex: 0 0 16.66667%;
            max-width: 16.66667%;
        }

        .wide .l-2-4 {
            flex: 0 0 20%;
            max-width: 20%;
        }

        .wide .l-3 {
            flex: 0 0 25%;
            max-width: 25%;
        }

        .wide .l-4 {
            flex: 0 0 33.33333%;
            max-width: 33.33333%;
        }

        .wide .l-5 {
            flex: 0 0 41.66667%;
            max-width: 41.66667%;
        }

        .wide .l-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }

        .wide .l-7 {
            flex: 0 0 58.33333%;
            max-width: 58.33333%;
        }

        .wide .l-8 {
            flex: 0 0 66.66667%;
            max-width: 66.66667%;
        }

        .wide .l-9 {
            flex: 0 0 75%;
            max-width: 75%;
        }

        .wide .l-10 {
            flex: 0 0 83.33333%;
            max-width: 83.33333%;
        }

        .wide .l-11 {
            flex: 0 0 91.66667%;
            max-width: 91.66667%;
        }

        .wide .l-12 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .wide .l-o-1 {
            margin-left: 8.33333%;
        }

        .wide .l-o-2 {
            margin-left: 16.66667%;
        }

        .wide .l-o-3 {
            margin-left: 25%;
        }

        .wide .l-o-4 {
            margin-left: 33.33333%;
        }

        .wide .l-o-5 {
            margin-left: 41.66667%;
        }

        .wide .l-o-6 {
            margin-left: 50%;
        }

        .wide .l-o-7 {
            margin-left: 58.33333%;
        }

        .wide .l-o-8 {
            margin-left: 66.66667%;
        }

        .wide .l-o-9 {
            margin-left: 75%;
        }

        .wide .l-o-10 {
            margin-left: 83.33333%;
        }

        .wide .l-o-11 {
            margin-left: 91.66667%;

        }


    }
</style>
<div class="grid wide">
    <div class="row">
        <div class="col l-3">
            <form action="index.php?act=advancesearch" method="POST">
                <div id="" class="tim-kiem-nang-cao">
                    <div class="searchname" style="margin-bottom: 10px;">
                        <span>Theo tên</span><br>
                        <input class="input-search" type="text" name="keyword" placeholder="Nhập từ khóa">
                    </div>
                    <div class="khoanggia" style="margin-bottom: 10px;">
                        <span>Theo khoảng giá</span>
                        <div style="display: flex;align-items: center;justify-content:flex-start;">
                            <input id="slider_pr" type="range" name="price" min="0" max="20000000" value="0">
                            <span id="max" style="font-family:sans-serif;">0</span>
                            <input type="hidden" name="price-min" value="0">
                            <input type="hidden" name="price-max" value="20000000">
                        </div>
                    </div>
                    <div class="dmuc" style="margin-bottom: 10px;">
                        <span>Theo thương hiệu</span>
                        <ul class="danhmuc" style="list-style-type: none;padding-left:0;">
                            <?php
                            foreach ($dsdm as $item) {
                                echo '
                                    <li>
                                        <input id="dm" name="danhmuc" type="radio" class="custom-control-input" required="" value="' . $item['id'] . '">
                                        <label class="custom-control-label" for="dmuc">' . $item['tendanhmuc'] . '</label>
                                    </li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <div style="width: 100%; text-align: center;display:flex;justify-content:flex-start;">
                        <input class="tim-kiem-nang-cao-input" type="submit" name="addvanceSearch" value="Tìm kiếm">
                    </div>
                </div>
            </form>
        </div>
        <div id="searchResults" class="col l-9">
            <!-- Phổ biến -->
            <div id="trend" class="home-suggestion">
                <!-- Tìm kiếm nâng cao -->
                <div class="row">
                    <div class="col">
                        <?php
                        $keyword = "";
                        $price_min = "";
                        $price_max = "";
                        $danhMuc = "";
                        $currentPage = 1;
                        $startIndex = 0;
                        $endIndex = 6;

                        if (isset($_POST['addvanceSearch'])) {
                            $keyword = $_POST['keyword'];
                            $price_min = $_POST['price-min'];
                            $price_max = $_POST['price-max'];
                            $danhMuc = $_POST['danhmuc'];
                            $dsSanPham = searchSanPham($keyword, $price_min, $price_max, $danhMuc);
                            $totalProducts = count($dsSanPham);
                            $pageLimit = 6;
                            $totalPages = ceil($totalProducts / $pageLimit);

                            if (isset($_GET['page'])) {
                                $currentPage = intval($_GET['page']);
                            }

                            $startIndex = ($currentPage - 1) * $pageLimit;
                            $endIndex = $startIndex + $pageLimit;

                            if ($endIndex > $totalProducts) {
                                $endIndex = $totalProducts;
                            }

                            $pageGrid = "";
                            for ($i = 1; $i <= $totalPages; $i++) {
                                if ($i == $currentPage) {
                                    $pageGrid .= "<li class='active'><a href='index.php?act=advancesearch&page=$i'>$i</a></li>";
                                } else {
                                    $pageGrid .= "<li><a href='index.php?act=advancesearch&page=$i'>$i</a></li>";
                                }
                            }
                        } else {
                            $dsSanPham = $tdm;
                            $totalProducts = count($dsSanPham);
                            $pageLimit = 6;
                            $totalPages = ceil($totalProducts / $pageLimit);

                            if (isset($_GET['page'])) {
                                $currentPage = intval($_GET['page']);
                            }

                            $startIndex = ($currentPage - 1) * $pageLimit;
                            $endIndex = $startIndex + $pageLimit;

                            if ($endIndex > $totalProducts) {
                                $endIndex = $totalProducts;
                            }

                            $pageGrid = "";
                            if ($currentPage > 1) {
                                $pageGrid .= "<li class='page-item'><a class='page-link' href='index.php?act=advancesearch&page=1'>Trang đầu</a></li>";
                            }
                            for ($i = max(1, $currentPage - 2); $i <= min($totalPages, $currentPage + 2); $i++) {
                                if ($i == $currentPage) {
                                    $pageGrid .= "<li class='page-item active'><a class='page-link' href='index.php?act=advancesearch&page=$i'>$i</a></li>";
                                } else {
                                    $pageGrid .= "<li class='page-item'><a class='page-link' href='index.php?act=advancesearch&page=$i'>$i</a></li>";
                                }
                            }
                            if ($currentPage < $totalPages) {
                                $pageGrid .= "<li class='page-item'><a class='page-link' href='index.php?act=advancesearch&page=$totalPages'>Trang cuối</a></li>";
                            }
                        }
                        ?>

                        <!-- Hiển thị kết quả tìm kiếm -->
                        <div class="container">
                            <h2>Kết quả tìm kiếm</h2>
                            <div class="row">
                                <?php
                                $productSubset = array_slice($dsSanPham, $startIndex, $endIndex - $startIndex);
                                showProduct($productSubset);
                                ?>
                            </div>
                            <?php if (isset($pageGrid)) { ?>
                                <nav>
                                    <ul class="pagination-search">
                                        <?php echo $pageGrid; ?>
                                    </ul>
                                </nav>
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
</div>
<script>
    // thanh trượt giá
    var slider = document.getElementById("slider_pr");
    var output = document.getElementById("max");
    output.innerHTML = slider.value;

    slider.oninput = function() {
        max.innerHTML = this.value;;
    };

    function load_data() {
        var input = document.getElementById("slider_pr");
        <?php
        if (isset($_SESSION['pr']) && $_SESSION['pr']) {
        ?>
            input.value = <?= $_SESSION['pr'] ?>;
        <?php
        } else {
        ?>
            input.value = 0;
        <?php
        }
        ?>
        document.getElementById("max").innerHTML = slider.value;
    }
    load_data();
    //lay gia trị trên thanh trượt giá
    slider.addEventListener("input", function(event) {
        const currentValue = event.target.value;
        output.textContent = currentValue + "đ";

        const formData = new FormData();
        formData.append("price", currentValue);

        const request = new XMLHttpRequest();
        request.open("POST", "advancesearch.php");
        request.send(formData);
    });
</script>