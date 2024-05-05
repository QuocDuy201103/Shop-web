const validation = new JustValidate("#signup", {
    errorFieldCssClass: 'is-invalid',
    errorLabelStyle: {
        fontSize: '16px',
        color: '#dc3545',
    },
    // successFieldCssClass: 'is-valid',
    // successLabelStyle: {
    //     fontSize: '16px',
    //     color: '#20b418',
    // },
    focusInvalidField: true,
    lockForm: true,
});
validation
    .addField("#name", [{
        rule: "required",
        errorMessage: "Vui lòng nhập họ tên"
    }])
    .addField("#username", [{
        rule: "required",
        errorMessage: "Vui lòng nhập tên đăng nhập"
    }])
    .addField("#address", [{
        rule: "required",
        errorMessage: "Vui lòng nhập địa chỉ"
    }])
    .addField("#phonenumber", [{
        rule: "required",
        errorMessage: "Vui lòng nhập số điện thoại"
    }])
    .addField("#email", [{
            rule: "required",
            errorMessage: "Vui lòng nhập email"
        },
        {
            rule: "email",
            errorMessage: "Email có định dạng không hợp lệ"
        },
        {
            validator: (value) => () => {
                return fetch("validate-email.php?email=" + encodeURIComponent(value))
                    .then(function(response) {
                        return response.json();
                    })
                    .then(function(json) {
                        return json.available;
                    });
            },
            errorMessage: "Email đã được sử dụng"
        }
    ])
    .addField("#password", [{
            rule: "required",
            errorMessage: "Vui lòng nhập mật khẩu"
        },
        {
            rule: "password",
            errorMessage: "Mật khẩu phải chứa tối thiểu tám ký tự, ít nhất một chữ cái và một số"
        }
    ])
    .addField("#password_confirmation", [{
        validator: (value, fields) => {
            return value === fields["#password"].elem.value;
        },
        errorMessage: "Mật khẩu phải trùng khớp"
    }])
    .onSuccess((event) => {
        document.getElementById("signup").submit();
    });