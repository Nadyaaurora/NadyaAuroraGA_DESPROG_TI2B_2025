<!DOCTYPE html>
<html>
<head>
  <title>Form Input dengan Validasi (AJAX + Password)</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <h1>Form Input dengan Validasi (AJAX + Password)</h1>
  <form id="myForm" method="post" action="proses_validasi.php">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama">
    <span id="nama-error" style="color: red;"></span><br>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
    <span id="email-error" style="color: red;"></span><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <span id="password-error" style="color: red;"></span><br>

    <input type="submit" value="Submit">
  </form>

  <div id="result"></div>

  <script>
    $(document).ready(function() {
      $("#myForm").submit(function(event) {
        event.preventDefault(); // hentikan pengiriman form biasa

        var nama = $("#nama").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var valid = true;

        // Validasi nama
        if (nama === "") {
          $("#nama-error").text("Nama harus diisi.");
          valid = false;
        } else {
          $("#nama-error").text("");
        }

        // Validasi email
        if (email === "") {
          $("#email-error").text("Email harus diisi.");
          valid = false;
        } else {
          $("#email-error").text("");
        }

        // Validasi password minimal 8 karakter
        if (password.length < 8) {
          $("#password-error").text("Password minimal 8 karakter.");
          valid = false;
        } else {
          $("#password-error").text("");
        }

        // Jika semua valid, kirim data ke server pakai AJAX
        if (valid) {
          $.ajax({
            url: "proses_validasi.php",
            type: "POST",
            data: { nama: nama, email: email, password: password },
            success: function(response) {
              $("#result").html("<p style='color:green;'>" + response + "</p>");
            },
            error: function() {
              $("#result").html("<p style='color:red;'>Terjadi kesalahan saat mengirim data.</p>");
            }
          });
        }
      });
    });
  </script>
</body>
</html>
