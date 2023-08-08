$(document).ready(function () {
    // $("body").scrollspy({ target: ".site-nav" });
    var isActive = false;

    $("#searchInput").on("focus", function () {
        isActive = true;
        $(this).removeClass("short").addClass("wide");
        $("#searchResults").slideDown();
    });

    $("#searchInput").on("blur", function (e) {
        if (!$(e.relatedTarget).hasClass("result-link")) {
            isActive = false;
            $(this).removeClass("wide").addClass("short");
            $("#searchResults").slideUp();
        }
    });

    $("#searchInput").on("input", function () {
        var query = $(this).val().toLowerCase();
        var resultList = $("#resultList");

        // Hapus hasil pencarian sebelumnya
        resultList.empty();

        // Lakukan pencarian dan tambahkan hasil ke dalam daftar
        if (query.length > 0 && isActive) {
            // Ganti dengan logika Anda untuk pencarian dan hasilnya
            var queried = performSearch(query); // Misalnya, hasil dari fungsi pencarian

            if (queried.length > 0) {
                $.each(queried, function (index, item) {
                    var listItem = $("<li>").addClass("list-group-item");
                    var link = $("<a>")
                        .addClass("d-flex text-secondary result-link")
                        .attr("href", item.url)
                        .html(
                            '<span class="pr-2">' +
                                item.icon +
                                "</span>" +
                                '<span class="text-body text-left">' +
                                item.title +
                                "</span>"
                        );
                    listItem.append(link);
                    resultList.append(listItem);
                });
            } else {
                var noResultsItem = $("<li>")
                    .addClass("list-group-item")
                    .text("No results found.");
                resultList.append(noResultsItem);
            }
        }
    });
});

function performSearch(query) {
    // Logika pencarian Anda di sini, mengembalikan array hasil pencarian
    return [
        { url: "result1.html", icon: "&#x1F4C3;", title: "Search Result 1" },
        { url: "result2.html", icon: "&#x1F4C3;", title: "Search Result 2" },
    ];
}
