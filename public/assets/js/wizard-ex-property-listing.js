"use strict";
! function() {
    window.Helpers.initCustomOptionCheck();
    var e = document.querySelector(".flatpickr"),
        t = document.querySelector(".contact-number-mask"),
        o = $("#plCountry"),
        i = document.querySelector("#plFurnishingDetails"),
        t = (t && new Cleave(t, {
            phone: !0,
            phoneRegionCode: "US"
        }), o && (o.wrap('<div class="position-relative"></div>'), o.select2({
            placeholder: "Select country",
            dropdownParent: o.parent()
        })), e && e.flatpickr(), i && new Tagify(i, {
            whitelist: ["Fridge", "TV", "AC", "WiFi", "RO", "Washing Machine", "Sofa", "Bed", "Dining Table", "Microwave", "Cupboard"],
            maxTags: 10,
            dropdown: {
                maxItems: 20,
                classname: "tags-inline",
                enabled: 0,
                closeOnSelect: !1
            }
        }), document.querySelector("#wizard-property-listing"));
    if (null !== t) {
        var o = t.querySelector("#wizard-property-listing-form"),
            e = o.querySelector("#personal-details"),
            i = o.querySelector("#property-details"),
            a = o.querySelector("#property-features"),
            n = o.querySelector("#property-area"),
            r = o.querySelector("#price-details"),
            l = [].slice.call(o.querySelectorAll(".btn-next")),
            o = [].slice.call(o.querySelectorAll(".btn-prev"));
        const s = new Stepper(t, {
                linear: !0
            }),
            u = FormValidation.formValidation(e, {
                fields: {
                    plFirstName: {
                        validators: {
                            notEmpty: {
                                message: "Please enter your first name"
                            }
                        }
                    },
                    plLastName: {
                        validators: {
                            notEmpty: {
                                message: "Please enter your last name"
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
                },
                init: e => {
                    e.on("plugins.message.placed", function(e) {
                        e.element.parentElement.classList.contains("input-group") && e.element.parentElement.insertAdjacentElement("afterend", e.messageElement)
                    })
                }
            }).on("core.form.valid", function() {
                s.next()
            }),
            c = FormValidation.formValidation(i, {
                fields: {
                    plPropertyType: {
                        validators: {
                            notEmpty: {
                                message: "Please select property type"
                            }
                        }
                    },
                    plZipCode: {
                        validators: {
                            notEmpty: {
                                message: "Please enter zip code"
                            },
                            stringLength: {
                                min: 4,
                                max: 10,
                                message: "The zip code must be more than 4 and less than 10 characters long"
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap5: new FormValidation.plugins.Bootstrap5({
                        eleValidClass: "",
                        rowSelector: function(e, t) {
                            return "plAddress" !== e ? ".col-sm-6" : ".col-lg-12"
                        }
                    }),
                    autoFocus: new FormValidation.plugins.AutoFocus,
                    submitButton: new FormValidation.plugins.SubmitButton
                }
            }).on("core.form.valid", function() {
                s.next()
            });
        t = $("#plPropertyType");
        t.length && (t.wrap('<div class="position-relative"></div>'), t.select2({
            placeholder: "Select property type",
            dropdownParent: t.parent()
        }).on("change", function() {
            c.revalidateField("plPropertyType")
        }));
        const p = FormValidation.formValidation(a, {
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
                s.next()
            }),
            d = FormValidation.formValidation(n, {
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
                s.next()
            }),
            m = FormValidation.formValidation(r, {
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
        l.forEach(e => {
            e.addEventListener("click", e => {
                switch (s._currentIndex) {
                    case 0:
                        u.validate();
                        break;
                    case 1:
                        c.validate();
                        break;
                    case 2:
                        p.validate();
                        break;
                    case 3:
                        d.validate();
                        break;
                    case 4:
                        m.validate()
                }
            })
        }), o.forEach(e => {
            e.addEventListener("click", e => {
                switch (s._currentIndex) {
                    case 4:
                    case 3:
                    case 2:
                    case 1:
                        s.previous()
                }
            })
        })
    }
}();