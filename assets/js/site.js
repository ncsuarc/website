(function () {
  "use strict";

  function closeDropdowns(except) {
    document.querySelectorAll(".dropdown-menu.show").forEach(function (menu) {
      if (menu === except) return;
      menu.classList.remove("show");
      var trigger = menu.parentElement.querySelector("[data-toggle='dropdown']");
      if (trigger) trigger.setAttribute("aria-expanded", "false");
    });
  }

  document.querySelectorAll("[data-toggle='collapse']").forEach(function (trigger) {
    trigger.addEventListener("click", function () {
      var selector = trigger.getAttribute("data-target");
      var target = selector ? document.querySelector(selector) : null;
      if (!target) return;

      var willOpen = !target.classList.contains("show");
      var parentSelector = target.getAttribute("data-parent");
      if (willOpen && parentSelector) {
        document.querySelectorAll(parentSelector + " .collapse.show").forEach(function (openPanel) {
          openPanel.classList.remove("show");
          var openTrigger = document.querySelector("[data-target='#" + openPanel.id + "']");
          if (openTrigger) {
            openTrigger.classList.add("collapsed");
            openTrigger.setAttribute("aria-expanded", "false");
          }
        });
      }

      target.classList.toggle("show", willOpen);
      trigger.classList.toggle("collapsed", !willOpen);
      trigger.setAttribute("aria-expanded", willOpen ? "true" : "false");
    });
  });

  document.querySelectorAll("[data-toggle='dropdown']").forEach(function (trigger) {
    trigger.addEventListener("click", function (event) {
      event.preventDefault();
      var menu = trigger.parentElement.querySelector(".dropdown-menu");
      var willOpen = Boolean(menu && !menu.classList.contains("show"));
      closeDropdowns(menu);
      if (menu) menu.classList.toggle("show", willOpen);
      trigger.setAttribute("aria-expanded", willOpen ? "true" : "false");
    });
  });

  document.addEventListener("click", function (event) {
    if (!event.target.closest(".dropdown")) closeDropdowns();
  });

  document.addEventListener("keydown", function (event) {
    if (event.key === "Escape") closeDropdowns();
  });
})();
