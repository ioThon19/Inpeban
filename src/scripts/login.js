import '../styles/main.css';

document.getElementById("login-button").addEventListener("click", function(event) {
    event.preventDefault(); // Menghentikan pengiriman form

    // Mengambil nilai username dan password dari input
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // Cek apakah username dan password adalah "admin"
    if (username === "admin" && password === "admin") {
      // Pindah ke halaman admin
      window.location.href = "index2.html";
    }
});
