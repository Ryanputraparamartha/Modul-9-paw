(function () {
    var KEY = "tema";
    function terapkan(pilihan) {
        var tema = pilihan;
        if (pilihan === "auto") {
            tema = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }
        document.documentElement.setAttribute("data-bs-theme", tema);
    }
    function ambil() {
        try { return localStorage.getItem(KEY) || "auto"; } catch (e) { return "auto"; }
    }
    terapkan(ambil());

    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll("[data-theme-value]").forEach(function (tombol) {
            tombol.addEventListener("click", function () {
                var pilihan = tombol.getAttribute("data-theme-value");
                try { localStorage.setItem(KEY, pilihan); } catch (e) {}
                terapkan(pilihan);
            });
        });
    });
})();
