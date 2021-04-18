/**
 * @author [harontaiko]
 * @email [harontaiko@gmail.com]
 * @create date 2021-04-03 04:18:24
 * @modify date 2021-04-03 04:18:24
 * @desc [MARKUP BASED JAVASCRIPT, BASED ON PAUL IRISH'S DOM INTRUBUSIVE JS]
 */
/**MARKUP BASED JAVASCRIPT, BASED ON PAUL IRISH'S DOM INTRUBUSIVE JS */
UTIL = {
  fire: function (func, funcname, args) {
    var namespace = chuoni;

    funcname = funcname === undefined ? "init" : funcname;
    if (
      func !== "" &&
      namespace[func] &&
      typeof namespace[func][funcname] == "function"
    ) {
      namespace[func][funcname](args);
    }
  },

  loadEvents: function () {
    var bodyId = document.body.id;

    // hit up common first.
    UTIL.fire("common");

    // do all the classes too.
    $.each(document.body.className.split(/\s+/), function (i, classnm) {
      UTIL.fire(classnm);
      UTIL.fire(classnm, bodyId);
    });

    UTIL.fire("common", "finalize");
  },
};

// kick it all off here
$(document).ready(UTIL.loadEvents);

//BEGIN EXECUTION HERE BASED ON PAGE
chuoni = {
  __home: {
    init: function _homepage() {
      //main page js
      const focusLink = (document.querySelector("#intro").style.color =
        "black");

      //start caching objects
      // Make sure sw are supported
      if ("serviceWorker" in navigator) {
        window.addEventListener("load", () => {
          navigator.serviceWorker
            .register(
              "https://cdn.jsdelivr.net/gh/harontaiko/chuoniAlumni@master/public/javascript/serviceworker.js"
            )
            .then((reg) => console.log("Service Worker: Registered (Pages)"))
            .catch((err) => console.log(`Service Worker: Error: ${err}`));
        });
      }
    },
  },
  __chapters: {
    init: function _chapters() {
      const focusLink = (document.querySelector("#chapters").style.color =
        "black");

      //start caching objects
      // Make sure sw are supported
      if ("serviceWorker" in navigator) {
        window.addEventListener("load", () => {
          navigator.serviceWorker
            .register(
              "https://cdn.jsdelivr.net/gh/harontaiko/chuoniAlumni@master/public/javascript/serviceworker.js"
            )
            .then((reg) => console.log("Service Worker: Registered (Pages)"))
            .catch((err) => console.log(`Service Worker: Error: ${err}`));
        });
      }
    },
  },
  __alumnilist: {
    init: function _chapters() {
      const focusLink = (document.querySelector("#alumni").style.color =
        "black");
      //start caching objects
      // Make sure sw are supported
      if ("serviceWorker" in navigator) {
        window.addEventListener("load", () => {
          navigator.serviceWorker
            .register(
              "https://cdn.jsdelivr.net/gh/harontaiko/chuoniAlumni@master/public/javascript/serviceworker.js"
            )
            .then((reg) => console.log("Service Worker: Registered (Pages)"))
            .catch((err) => console.log(`Service Worker: Error: ${err}`));
        });
      }
    },
  },
  __participate: {
    init: function _chapters() {
      const focusLink = (document.querySelector("#participate").style.color =
        "black");
      //start caching objects
      // Make sure sw are supported
      if ("serviceWorker" in navigator) {
        window.addEventListener("load", () => {
          navigator.serviceWorker
            .register(
              "https://cdn.jsdelivr.net/gh/harontaiko/chuoniAlumni@master/public/javascript/serviceworker.js"
            )
            .then((reg) => console.log("Service Worker: Registered (Pages)"))
            .catch((err) => console.log(`Service Worker: Error: ${err}`));
        });
      }

      //throw confirm window b4 user reloads
      window.onbeforeunload = function (e) {
        return window.confirm();
      };

      $(document).on("submit", "form", function (event) {
        window.onbeforeunload = null;
      });
    },
  },
};
