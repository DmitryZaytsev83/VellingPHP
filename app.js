var main = function () {
    "use strict";
    $("form").on("submit", function (event) {
        event.preventDefault();
        $.ajax({
            url: "processorder.php",
            method: "post",
            data: {
                "tireqty": $("input[name='tireqty']").val(),
                "oilqty": $("input[name='oilqty']").val(),
                "sparkqty": $("input[name='sparkqty']").val()
            }
        }).done(function (t) {
            $("form").remove();
            $("main").append(t);
        })
    })
};
$(document).ready(main);