$(document).ready(function() {
  $("#loginForm").submit(function(e) {
      e.preventDefault();

      var username = $("#username").val().trim();
      var password = $("#password").val().trim();

      if (username === "" || password === "") {
          $("#loginError").removeClass("d-none").text("Please Enter the Username and the Password.");
          return;
      }

      $.ajax({
          url: "http://localhost:5000/api/login", // تحديد الـ API endpoint
          method: "POST",
          contentType: "application/json",
          data: JSON.stringify({ username: username, password: password }),
          success: function(response) {
              if (response.status === "success") {
                  // حفظ بيانات المستخدم في localStorage
                  localStorage.setItem("username", response.username);
                  localStorage.setItem("employee_id", response.employee_id);

                  // إعادة التوجيه إلى الصفحة الرئيسية
                  window.location.href = "index.html";
              } else {
                  $("#loginError").removeClass("d-none").text(response.message || "Invalid Data Input");
              }
          },
          error: function(xhr, status, error) {
              console.error("خطأ في الاتصال بالسيرفر:", error);
              $("#loginError").removeClass("d-none").text("حدث خطأ أثناء تسجيل الدخول. حاول مرة أخرى.");
          }
      });
  });
});
