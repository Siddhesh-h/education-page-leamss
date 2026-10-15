(function () {
    "use strict";

    // lucide icons
    var initIcons = function () {
        if (window.lucide) window.lucide.createIcons();
    };
    initIcons();

    // header scrolled state
    var header = document.querySelector("[data-header]");
    var onScroll = function () {
        if (!header) return;
        header.classList.toggle("scrolled", window.scrollY > 24);
    };
    onScroll();
    window.addEventListener("scroll", onScroll, { passive: true });

    // scroll reveal
    var revealEls = document.querySelectorAll("[data-reveal]");
    if ("IntersectionObserver" in window) {
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting) {
                    e.target.classList.add("revealed");
                    io.unobserve(e.target);
                }
            });
        }, { threshold: 0.15 });
        revealEls.forEach(function (el) { io.observe(el); });
    } else {
        revealEls.forEach(function (el) { el.classList.add("revealed"); });
    }

    // hero image parallax
    var parallax = document.querySelector("[data-parallax]");
    if (parallax) {
        var ticking = false;
        window.addEventListener("scroll", function () {
            if (ticking) return;
            ticking = true;
            window.requestAnimationFrame(function () {
                var y = Math.min(window.scrollY * 0.12, 90);
                parallax.style.transform = "translateY(" + y + "px)";
                ticking = false;
            });
        }, { passive: true });
    }

    // modals
    var lockScroll = function (lock) {
        document.body.style.overflow = lock ? "hidden" : "";
    };
    var openModal = function (id) {
        var m = document.getElementById(id);
        if (!m) return;
        m.classList.remove("hidden");
        m.classList.add("open");
        lockScroll(true);
    };
    var closeModal = function (m) {
        m.classList.add("hidden");
        m.classList.remove("open");
        lockScroll(false);
    };

    document.querySelectorAll("[data-open-enquiry]").forEach(function (btn) {
        btn.addEventListener("click", function () {
            var label = btn.getAttribute("data-course-label");
            var input = document.querySelector("[data-enquiry-course-input]");
            if (label && input) input.value = label;
            openModal("enquiry-modal");
        });
    });

    document.querySelectorAll("[data-open-brochure]").forEach(function (btn) {
        btn.addEventListener("click", function () {
            var courseId = btn.getAttribute("data-course-id") || "all";
            var hidden = document.querySelector("[data-brochure-course-id]");
            if (hidden) hidden.value = courseId;
            var sub = document.querySelector("[data-brochure-subtitle]");
            var label = btn.getAttribute("data-brochure-label");
            if (sub) {
                sub.textContent = label
                    ? "Brochure for " + label + " — instant PDF download."
                    : "The complete 2026 catalogue: every UGC-recognized program, university, fee and duration.";
            }
            openModal("brochure-modal");
        });
    });

    document.querySelectorAll("[data-close-modal]").forEach(function (el) {
        el.addEventListener("click", function () {
            var modal = el.closest(".modal");
            if (modal) closeModal(modal);
        });
    });

    document.addEventListener("keydown", function (e) {
        if (e.key !== "Escape") return;
        document.querySelectorAll(".modal.open").forEach(closeModal);
    });

    if (document.body.getAttribute("data-open-enquiry-on-load") === "1") {
        openModal("enquiry-modal");
    }

    // catalog filters: auto-submit + chips + reset
    var form = document.getElementById("filter-form");
    if (form) {
        form.querySelectorAll("[data-auto-submit]").forEach(function (el) {
            el.addEventListener("change", function () { form.submit(); });
        });

        form.querySelectorAll("[data-degree-chip]").forEach(function (chip) {
            chip.addEventListener("click", function () {
                var input = form.querySelector("[data-degree-input]");
                if (input) input.value = chip.getAttribute("data-degree-chip");
                form.submit();
            });
        });

        var reset = form.querySelector("[data-reset-filters]");
        if (reset) {
            reset.addEventListener("click", function () {
                window.location.href = form.getAttribute("action");
            });
        }
    }

    // mobile menu
    var menuBtn = document.querySelector("[data-menu-toggle]");
    var menu = document.querySelector("[data-mobile-menu]");
    if (menuBtn && menu) {
        var menuLabel = menuBtn.querySelector("[data-menu-label]");
        var iconOpen = menuBtn.querySelector("[data-menu-icon-open]");
        var iconClose = menuBtn.querySelector("[data-menu-icon-close]");
        menuBtn.addEventListener("click", function () {
            var open = !menu.classList.contains("hidden");
            menu.classList.toggle("hidden", open);
            if (menuLabel) menuLabel.textContent = open ? "Menu" : "Close";
            if (iconOpen) iconOpen.classList.toggle("hidden", !open);
            if (iconClose) iconClose.classList.toggle("hidden", open);
            initIcons();
        });
        menu.querySelectorAll("a").forEach(function (a) {
            a.addEventListener("click", function (e) {
                var href = a.getAttribute("href") || "";
                if (href.charAt(0) === "#") {
                    e.preventDefault();
                    var target = document.getElementById(href.slice(1));
                    if (target) target.scrollIntoView({ behavior: "smooth" });
                }
                menu.classList.add("hidden");
                if (menuLabel) menuLabel.textContent = "Menu";
            });
        });
    }

    // toast auto-hide
    var toast = document.querySelector(".toast");
    if (toast) {
        setTimeout(function () {
            toast.style.transition = "opacity .4s";
            toast.style.opacity = "0";
            setTimeout(function () { toast.remove(); }, 400);
        }, 4500);
    }
})();
