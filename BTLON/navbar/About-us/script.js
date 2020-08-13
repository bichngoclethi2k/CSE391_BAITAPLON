// Vô hiệu hóa việc gửi biểu mẫu nếu có các trường không hợp lệ
(function() {
    'use strict';
    window.addEventListener('load', function() {
      // Lấy các biểu mẫu ta muốn thêm các kiểu xác thực vào
      var forms = document.getElementsByClassName('needs-validation');
      // Lặp lại và ngăn chặn việc gửi
      var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
          if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
          }
          form.classList.add('was-validated');
        }, false);
      });
    }, false);
  })();