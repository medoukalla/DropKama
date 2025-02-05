"use strict";
! function() {
    var e = document.querySelector("#dealDuration"),
        e = (e && e.flatpickr({
            mode: "range"
        }), window.Helpers.initCustomOptionCheck(), document.querySelector("#wizard-create-deal"));
    if (null !== e) {
        var o = e.querySelector("#wizard-create-deal-form"),
            a = o.querySelector("#deal-type"),
            i = o.querySelector("#deal-details"),
            n = o.querySelector("#deal-usage"),
            l = o.querySelector("#review-complete"),
            r = [].slice.call(o.querySelectorAll(".btn-next")),
            o = [].slice.call(o.querySelectorAll(".btn-prev"));
        let t = new Stepper(e, {
            linear: !0
        });
        const s = FormValidation.formValidation(a, {
            fields: {
                dealAmount: {
                    validators: {
                        notEmpty: {
                            message: "Please enter amount"
                        },
                        numeric: {
                            message: "The amount must be a number"
                        }
                    }
                },
                dealRegion: {
                    validators: {
                        notEmpty: {
                            message: "Please select region"
                        }
                    }
                }
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger,
                bootstrap5: new FormValidation.plugins.Bootstrap5({
                    eleValidClass: "",
                    rowSelector: ".col-sm-6"
                }),
                autoFocus: new FormValidation.plugins.AutoFocus,
                submitButton: new FormValidation.plugins.SubmitButton
            }
        }).on("core.form.valid", function() {
            t.next()
        });
        e = $("#dealRegion");
        e.length && (e.wrap('<div class="position-relative"></div>'), e.select2({
            placeholder: "Select an region",
            dropdownParent: e.parent()
        }).on("change", function() {
            s.revalidateField("dealRegion")
        }));
        const d = FormValidation.formValidation(i, {
            fields: {
                dealTitle: {
                    validators: {
                        notEmpty: {
                            message: "Please enter deal title"
                        }
                    }
                },
                dealCode: {
                    validators: {
                        notEmpty: {
                            message: "Please enter deal code"
                        },
                        stringLength: {
                            min: 4,
                            max: 10,
                            message: "The deal code must be more than 4 and less than 10 characters long"
                        },
                        regexp: {
                            regexp: /^[A-Z0-9]+$/,
                            message: "The deal code can only consist of capital alphabetical and number"
                        }
                    }
                }
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger,
                bootstrap5: new FormValidation.plugins.Bootstrap5({
                    eleValidClass: "",
                    rowSelector: ".col-sm-6"
                }),
                autoFocus: new FormValidation.plugins.AutoFocus,
                submitButton: new FormValidation.plugins.SubmitButton
            }
        }).on("core.form.valid", function() {
            t.next()
        });
        a = $("#dealOfferedItem");
        a.length && (a.wrap('<div class="position-relative"></div>'), a.select2({
            placeholder: "Select an offered item",
            dropdownParent: a.parent()
        }).on("change", function() {}));
        const c = FormValidation.formValidation(n, {
                fields: {},
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap5: new FormValidation.plugins.Bootstrap5({
                        eleValidClass: "",
                        rowSelector: ".col-sm-6"
                    }),
                    autoFocus: new FormValidation.plugins.AutoFocus,
                    submitButton: new FormValidation.plugins.SubmitButton
                }
            }).on("core.form.valid", function() {
                t.next()
            }),
            u = FormValidation.formValidation(l, {
                fields: {},
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap5: new FormValidation.plugins.Bootstrap5({
                        eleValidClass: "",
                        rowSelector: ".col-md-12"
                    }),
                    autoFocus: new FormValidation.plugins.AutoFocus,
                    submitButton: new FormValidation.plugins.SubmitButton
                }
            }).on("core.form.valid", function() {
                alert("Submitted..!!")
            });
        r.forEach(e => {
            e.addEventListener("click", e => {
                switch (t._currentIndex) {
                    case 0:
                        s.validate();
                        break;
                    case 1:
                        d.validate();
                        break;
                    case 2:
                        c.validate();
                        break;
                    case 3:
                        u.validate()
                }
            })
        }), o.forEach(e => {
            e.addEventListener("click", e => {
                switch (t._currentIndex) {
                    case 3:
                    case 2:
                    case 1:
                        t.previous()
                }
            })
        })
    }
}();