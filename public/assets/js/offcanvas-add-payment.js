"use strict";
! function() {
    var e = document.querySelector(".invoice-amount");
    e && new Cleave(e, {
        numeral: !0
    });
    const t = new Date,
        c = document.querySelectorAll(".invoice-date");
    c && c.forEach(function(e) {
        e.flatpickr({
            monthSelectorType: "static",
            defaultDate: t
        })
    })
}();
