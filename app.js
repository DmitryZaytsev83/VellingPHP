var main = function () {
    "use strict";
    $("button").on("click", function () {
        $.ajax({
            url: "vieworders.php",
            method: "post",
            data: {
                "name": "begin"
            }
        }).done(function (t) {
            $("#file").empty();
            $("#file").append(t);
        })
    })
    $("form").on("submit", function (event) {
        event.preventDefault();
        $.ajax({
            url: "processorder.php",
            method: "post",
            data: {
                "tireqty": $("input[name='tireqty']").val(),
                "oilqty": $("input[name='oilqty']").val(),
                "sparkqty": $("input[name='sparkqty']").val(),
                "address": $("input[name='address']").val()
            }
        }).done(function (t) {
            $("form").remove();
            $("main").empty();
            $("main").append(t);
        })
    })
};
$(document).ready(main);