$(function () {
    $(".js-approve").click(function () {
        let id = $(this).data("id");
        axios.put(route("articles.set-status", {id: id}), {status_id: 1}).then(() => {
            $(this).closest("tr")
                .find(".js-status")
                .text("Опубликованно")
                .removeClass("badge-warning")
                .removeClass("badge-danger")
                .addClass("badge-success");
        })
        return false;
    })
    $(".js-decline").click(function () {
        let id = $(this).data("id");
        axios.put(route("articles.set-status", {id: id}), {status_id: 3}).then(() => {
            $(this).closest("tr")
                .find(".js-status")
                .text("Снято с публикации")
                .removeClass("badge-success")
                .removeClass("badge-warning")
                .addClass("badge-danger");
        })
        return false;
    })
})

