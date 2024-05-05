(function() {
    "use strict";

    /**
     * Easy selector helper function
     */
    const select = (el, all = false) => {
        // el = el.trim()
        if (all) {
            return [...document.querySelectorAll(el)]
        } else {
            return document.querySelector(el)
        }
    }

    /**
     * Easy event listener function
     */
    const on = (type, el, listener, all = false) => {
        let selectEl = select(el, all)
        if (selectEl) {
            if (all) {
                selectEl.forEach(e => e.addEventListener(type, listener))
            } else {
                selectEl.addEventListener(type, listener)
            }
        }
    }

    /**
     * Easy on scroll event listener 
     */
    const onscroll = (el, listener) => {
        el.addEventListener('scroll', listener)
    }

    /**
     * Navbar links active state on scroll
     */
    let navbarlinks = select('#navbar .scrollto', true)
    const navbarlinksActive = () => {
        let position = window.scrollY + 200
        navbarlinks.forEach(navbarlink => {
            if (!navbarlink.hash) return
            let section = select(navbarlink.hash)
            if (!section) return
            if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
                navbarlink.classList.add('active')
            } else {
                navbarlink.classList.remove('active')
            }
        })
    }
    window.addEventListener('load', navbarlinksActive)
    onscroll(document, navbarlinksActive)

    /**
     * Scrolls to an element with header offset
     */
    const scrollto = (el) => {
        let header = select('#header')
        let offset = header.offsetHeight

        let elementPos = select(el).offsetTop
        window.scrollTo({
            top: elementPos - offset,
            behavior: 'smooth'
        })
    }

    /**
     * Toggle .header-scrolled class to #header when page is scrolled
     */
    let selectHeader = select('#header')
    if (selectHeader) {
        const headerScrolled = () => {
            if (window.scrollY > 100) {
                selectHeader.classList.add('header-scrolled')
            } else {
                selectHeader.classList.remove('header-scrolled')
            }
        }
        window.addEventListener('load', headerScrolled)
        onscroll(document, headerScrolled)
    }

    /**
     * Back to top button
     */
    let backtotop = select('.back-to-top')
    if (backtotop) {
        const toggleBacktotop = () => {
            if (window.scrollY > 100) {
                backtotop.classList.add('active')
            } else {
                backtotop.classList.remove('active')
            }
        }
        window.addEventListener('load', toggleBacktotop)
        onscroll(document, toggleBacktotop)
    }

    /**
     * Mobile nav toggle
     */
    on('click', '.mobile-nav-toggle', function(e) {
        select('#navbar').classList.toggle('navbar-mobile')
        this.classList.toggle('bi-list')
        this.classList.toggle('bi-x')
    })

    /**
     * Mobile nav dropdowns activate
     */
    on('click', '.navbar .dropdown > a', function(e) {
        if (select('#navbar').classList.contains('navbar-mobile')) {
            e.preventDefault()
            this.nextElementSibling.classList.toggle('dropdown-active')
        }
    }, true)

    /**
     * Scrool with ofset on links with a class name .scrollto
     */
    on('click', '.scrollto', function(e) {
        if (select(this.hash)) {
            e.preventDefault()

            let navbar = select('#navbar')
            if (navbar.classList.contains('navbar-mobile')) {
                navbar.classList.remove('navbar-mobile')
                let navbarToggle = select('.mobile-nav-toggle')
                navbarToggle.classList.toggle('bi-list')
                navbarToggle.classList.toggle('bi-x')
            }
            scrollto(this.hash)
        }
    }, true)

    /**
     * Scroll with ofset on page load with hash links in the url
     */
    window.addEventListener('load', () => {
        if (window.location.hash) {
            if (select(window.location.hash)) {
                scrollto(window.location.hash)
            }
        }
    });

    /**
     * Preloader
     */
    let preloader = select('#preloader');
    if (preloader) {
        window.addEventListener('load', () => {
            preloader.remove()
        });
    }

    /**
     * Initiate  glightbox 
     */
    const glightbox = GLightbox({
        selector: '.glightbox'
    });

    /**
     * Skills animation
     */
    let skilsContent = select('.skills-content');
    if (skilsContent) {
        new Waypoint({
            element: skilsContent,
            offset: '80%',
            handler: function(direction) {
                let progress = select('.progress .progress-bar', true);
                progress.forEach((el) => {
                    el.style.width = el.getAttribute('aria-valuenow') + '%'
                });
            }
        })
    }

    /**
     * Porfolio isotope and filter
     */
    window.addEventListener('load', () => {
        let portfolioContainer = select('.portfolio-container');
        if (portfolioContainer) {
            let portfolioIsotope = new Isotope(portfolioContainer, {
                itemSelector: '.portfolio-item'
            });

            let portfolioFilters = select('#portfolio-flters li', true);

            on('click', '#portfolio-flters li', function(e) {
                e.preventDefault();
                portfolioFilters.forEach(function(el) {
                    el.classList.remove('filter-active');
                });
                this.classList.add('filter-active');

                portfolioIsotope.arrange({
                    filter: this.getAttribute('data-filter')
                });
                portfolioIsotope.on('arrangeComplete', function() {
                    AOS.refresh()
                });
            }, true);
        }

    });

    /**
     * Initiate portfolio lightbox 
     */
    const portfolioLightbox = GLightbox({
        selector: '.portfolio-lightbox'
    });

    /**
     * Portfolio details slider
     */
    new Swiper('.portfolio-details-slider', {
        speed: 400,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        }
    });

    /**
     * Animation on scroll
     */
    window.addEventListener('load', () => {
        AOS.init({
            duration: 1000,
            easing: "ease-in-out",
            once: true,
            mirror: false
        });
    });

})()

// //array account
// var infoUser = [{
//         userName: "userkhach",
//         password: 456,
//     },
//     {
//         userName: "khach",
//         password: 123,
//     }
// ];


// // js modal login

// const buyBtnsLogin = document.querySelectorAll('.js-login');
// const modalLogin = document.querySelector('.modal');
// const modalContainerLogin = document.querySelector('.js-modal-container')
// const modalCloseLogin = document.querySelector('.js-modal-close');
// //hàm hiển thị modal mua vé ( thêm class open vào modal)
// function showBuyTickets() {
//     modalLogin.classList.add('open');
// }
// //hàm ẩn modal mua vé (gỡ bỏ class open trên nút close)
// function hideBuyTickets() {
//     modalLogin.classList.remove('open');
// }

// //lặp qua từng thẻ btn và nghe hành vi click
// for (const buyBtn of buyBtnsLogin) {
//     buyBtn.addEventListener('click', showBuyTickets)
// }
// //nghe hành vi click vào nút close
// modalCloseLogin.addEventListener('click', hideBuyTickets);

// //ấn ra ngoài modal thì tắt modal
// // modalLogin.addEventListener('click', hideBuyTickets);

// modalContainerLogin.addEventListener('click', function(event) {
//     event.stopPropagation();
// });


// //js sign up

// const btnSignUp = document.querySelectorAll('.js-sign-up');
// const modalSignUp = document.querySelector('.modal-sign-up');
// const modalContainerSignUp = document.querySelector('.js-modal-container-sign-up');
// const modalCloseSignUp = document.querySelector('.js-modal-close-sign-up');
// const linkLogin = document.querySelector('.transfer-login');

// function showModalSignUp() {
//     modalSignUp.classList.add('open-sign-up');
// }

// function hideModalSignUp() {
//     modalSignUp.classList.remove('open-sign-up');
// }
// for (const btnSign of btnSignUp) {
//     btnSign.addEventListener('click', showModalSignUp);
// }

// modalCloseSignUp.addEventListener('click', hideModalSignUp);
// modalContainerSignUp.addEventListener('click', function(event) {
//     event.stopPropagation();
// });


// function addAccountToArray() {
//     var userSignUp = document.getElementById('modal-username-sign-up');
//     var passSignUp = document.getElementById('modal-pass-sign-up');
//     var againPassSignUp = document.getElementById('modal-pass-again-sign-up');


//     if (userSignUp.value != "") {
//         if (userSignUp.value.length < 4) {
//             alert("Vui lòng nhập tên đăng nhập lớn hơn 4 kí tự");
//             userSignUp.focus();
//             return false;
//         }
//     } else {
//         alert("Vui lòng nhập tên đăng nhập");
//         userSignUp.focus();
//         return false;
//     }
//     if (passSignUp.value != "") {
//         if (userSignUp.value.length < 3) {
//             alert("Vui lòng nhập mật khẩu lớn hơn 4 kí tự");
//             passSignUp.focus();
//             return false;
//         }
//     } else {
//         alert("Vui lòng nhập mật khẩu");
//         passSignUp.focus();
//         return false;
//     }
//     if (againPassSignUp.value != "") {
//         if (againPassSignUp.value != passSignUp.value) {
//             alert("Mật khẩu không trùng khớp");
//             againPassSignUp.focus();
//             return false;
//         }
//     } else {
//         alert("Vui lòng nhập lại mật khẩu");
//         againPassSignUp.focus();
//         return false;
//     }
//     alert("Đăng kí tài khoản thành công");
//     infoUser.push({
//         userName: userSignUp.value,
//         password: passSignUp.value,
//     });
//     console.log(infoUser);
//     return true;

// }


// function checkForm() {
//     thongbao = false;
//     var users = document.getElementById('modal-username');
//     var pass = document.getElementById('modal-pass');
//     var btnDangNhap = document.getElementById('btn-dang-nhap');
//     var btnDangky = document.getElementById("btn-dang-ky");


//     for (i = 0; i < infoUser.length; i++) {
//         if (users.value != "" && pass.value != "") {
//             if (users.value == infoUser[i].userName && pass.value == infoUser[i].password) {
//                 alert("Bạn đã đăng nhập thành công");

//                 thongbao = true;
//                 btnDangNhap.innerHTML = users.value;
//                 btnDangky.remove();

//                 const newLi = document.createElement("li");
//                 const newBtn = document.createElement("button");
//                 newBtn.innerHTML = "Đăng Xuất";
//                 newBtn.style = "margin-left:20px;border: 2px solid #47b2e4;background-color:#000;color:#fff;border-radius:10px;padding: 6px 16px;";
//                 newBtn.onclick = function() { toLogout() };
//                 newLi.appendChild(newBtn);
//                 document.getElementById("nav-ul").appendChild(newLi);

//             }

//         } else {
//             alert("Vui lòng nhập đủ thông tin");
//             return false;
//         }
//     }
//     if (i = infoUser.length - 1 && thongbao == false) {
//         alert("Nhập sai");
//     }

// }
// //function logout

// function toLogout() {
//     window.location.href = "./index.html";
// }




// //js Shopping Cart
// var giohang = new Array();



// function addcart(x) {
//     var img = x.parentElement.children[2].href;
//     var tensp = x.parentElement.children[0].innerHTML;
//     var giasp = parseInt(x.parentElement.children[1].children[0].children[0].innerText);
//     var sl = parseInt(x.parentElement.children[3].value);
//     var item = new Array(img, tensp, giasp, sl);

//     //kiem tra gio hang
//     var ktr = 0;
//     for (let i = 0; i < giohang.length; i++) {
//         if (giohang[i][1] == tensp) {
//             ktr = 1;
//             sl += parseInt(giohang[i][3]);
//             giohang[i][3] = sl;
//             break;
//         }
//     }
//     if (ktr == 0) {
//         //them moi - add to cart
//         giohang.push(item);
//     }


//     document.getElementById("slsp").innerHTML = giohang.length;


//     //lưu giỏ hàng
//     sessionStorage.setItem("giohang", JSON.stringify(giohang));

// }

// function viewcart() {

//     var kq = `            
//     <div style="display: flex;justify-content: space-between;" class="header-cart">
//     <h2>ĐƠN HÀNG CỦA BẠN</h2>
//         <i style = "font-size:25px;" class = "bi bi-x-circle cart-close"  onclick = "angiohang()" > </i>
//     </div>
//     <table style="border-collapse:collapse;">
//         <tr>
//             <th>STT</th>
//             <th>Hình</th>
//             <th>Tên sản phẩm</th>
//             <th>Đơn giá</th>
//             <th style="width:14%;">Số lượng</th>
//             <th>Thành tiền</th>
//             <th>Xóa</th>
//         </tr>`;
//     var tong = 0;
//     for (let i = 0; i < giohang.length; i++) {
//         let stt = i + 1;
//         let ttien = parseInt(giohang[i][2]) * parseInt(giohang[i][3]);
//         tong += ttien;
//         kq += `<tr>
//             <td>` + stt + `</td>
//             <td><img src="` + giohang[i][0] + `" height="80px"></td>
//             <td>` + giohang[i][1] + `</td>
//             <td>` + giohang[i][2].toLocaleString() + `</td>
//             <td>` + `<i class="bi bi-dash" onclick="btnMinus(` + stt + `)"></i>` + giohang[i][3] + `<i class="bi bi-plus-lg" onclick="btnPlus( ` + stt + `)"></i>` + `</td>
//             <td>` + ttien.toLocaleString() + `</td>
//             <td><button onclick="deleteSp()">Xóa</button></td>
//         </tr>`;

//     }

//     kq += `<tr>
//             <td colspan="5">Tổng đơn hàng</td>
//             <td style="background-color: #333;">` + tong.toLocaleString() + `</td>
//             <td></td>
//         </tr>


//     </table>
//     <a class="btn__modal-cart" style="
//     float: left;
//     padding: 6px;
//     background-color: #47b2e4;
//     color: #fff;
//     border-radius: 4px;
//     margin-top: 11px;
//     font-weight: 600;
//     border: 1px solid #000;" onclick="checkToBuy()">Thanh Toán</a>
//     <button class="btn__modal-cart" style="float:left;margin-left:615.2px;padding: 6px;
//     background-color: #47b2e4;
//     color: #fff;
//     border-radius: 4px;
//     margin-top: 11px;
//     font-weight: 600;
//     border: 1px solid #000;" onclick="deleteAll()">Xóa Tất Cả</button>
//     `;

//     document.getElementById("showgiohang").innerHTML = kq;
// }

// function checkToBuy() {
//     check = false;
//     for (i = 0; i < infoUser.length; i++) {
//         if (document.getElementById("btn-dang-nhap").innerHTML == infoUser[i].userName) {
//             window.location.assign("pay-cart.html");
//             check = true;
//         }
//     }

//     if (i = infoUser.length - 1 && check == false) {
//         alert("Vui lòng đăng nhập để mua hàng");
//     }

// }


// function btnPlus(paramStt) {
//     giohang[paramStt - 1][3] = parseInt(giohang[paramStt - 1][3]) + 1;
//     viewcart();
// }

// function btnMinus(paramStt) {
//     if (parseInt(giohang[paramStt - 1][3]) > 1) {
//         giohang[paramStt - 1][3] = parseInt(giohang[paramStt - 1][3]) - 1;
//     }
//     viewcart();
// }

// function deleteSp(paramStt) {
//     giohang.splice(paramStt - 1, 1);
//     document.getElementById("slsp").innerHTML = giohang.length;
//     viewcart();
// }

// function deleteAll() {
//     giohang.length = 0;
//     document.getElementById("slsp").innerHTML = giohang.length;
//     viewcart();

// }

// function hienthigiohang() {
//     var idgiohang = document.getElementById("showgiohang");
//     if (idgiohang.style.display == "") {
//         idgiohang.style.display = "block";
//     } else {
//         idgiohang.style.display = "";

//     }
//     viewcart();
// }

// function angiohang() {
//     document.getElementById("showgiohang").style.display = "";
// }

// function showcartPayment() {

//     var gh = sessionStorage.getItem("giohang");
//     var giohang = JSON.parse(gh);

//     var kq = `
//     <table style="border-collapse:collapse; ">
//         <tr>
//             <th style="text-align:center;">STT</th>
//             <th style="text-align:center;">Hình</th>
//             <th style="text-align:center;">Tên sản phẩm</th>
//             <th>Đơn giá</th>
//             <th style="width:12%;text-align:center;">Số lượng</th>
//             <th style="width:18%;text-align:center;">Thành tiền</th>
//         </tr>`;


//     var tong = 0;
//     for (let i = 0; i < giohang.length; i++) {
//         let stt = i + 1;
//         let ttien = parseInt(giohang[i][2]) * parseInt(giohang[i][3]);
//         tong += ttien;
//         kq += `<tr>
//             <td style="text-align:center;">` + stt + `</td>
//             <td><img src="` + giohang[i][0] + `" height="80px"></td>
//             <td>` + giohang[i][1] + `</td>
//             <td>` + giohang[i][2].toLocaleString() + `</td>
//             <td style="text-align:center;">` + giohang[i][3] + `</td>
//             <td style="text-align:center;">` + ttien.toLocaleString() + `</td>
//         </tr>`;
//     }

//     kq += `<tr>
//         <td colspan="5">Tổng đơn hàng</td>
//         <td style="background-color: #333;color:#fff;text-align:center;">` + tong.toLocaleString() + `</td>
//         </tr>
//         </table>`;
//     document.getElementById("showcart").innerHTML = kq;
// }



// // // apply pay 

// function btnApply() {
//     var ttnh = document.getElementById("thongtinnhanhang").children;
//     var method = document.getElementById("methods").children;
//     console.log(method);

//     var hoten = ttnh[0].children[1].children[0].value;
//     var diachi = ttnh[1].children[1].children[0].value;
//     var sdt = ttnh[2].children[1].children[0].value;
//     var email = ttnh[3].children[1].children[0].value;

//     var nguoinhan = new Array(hoten, diachi, sdt, email);

//     console.log(nguoinhan);

//     sessionStorage.setItem("nguoinhan", JSON.stringify(nguoinhan));


//     var shownguoinhan = sessionStorage.getItem("nguoinhan");
//     var thongtin = JSON.parse(shownguoinhan);

//     var gh = sessionStorage.getItem("giohang");
//     var giohang = JSON.parse(gh);

//     if (hoten != "" && diachi != "" && sdt != "" && email != "") {
//         var tt = `<h1>ĐẶT HÀNG THÀNH CÔNG</h1>` +
//             `<table class="thongtinnhanhang">` +
//             `<tr>` +
//             `<td width="30%">Họ tên</td>` +
//             `<td>` + thongtin[0] + `</td>` +
//             `</tr>` +
//             `<tr>` +
//             `<td>Địa chỉ</td>` +
//             `<td>` + thongtin[1] + `</td>` +
//             `</tr>` +
//             `<tr>` +
//             `<td>Điện thoại</td>` +
//             `<td>` + thongtin[2] + `</td>` +
//             `</tr>` +
//             `<tr>` +
//             `<td>Email</td>` +
//             `<td>` + thongtin[3] + `</td>` +
//             `</tr>`;;
//         var tong = 0;
//         for (let i = 0; i < giohang.length; i++) {
//             let stt = i + 1;
//             let ttien = parseInt(giohang[i][2]) * parseInt(giohang[i][3]);
//             tong += ttien;
//         }


//         tt += `<tr>` +
//             `<td>Tổng tiền</td>` +
//             `<td>` + tong.toLocaleString() + `</td>` +
//             `</tr>` +
//             `</table>`;

//         document.getElementById("bill-cart").innerHTML = tt;
//     } else {
//         document.getElementById("bill-cart").innerHTML = "Vui lòng nhập đủ thông tin để đặt hàng";
//     }

// }


//