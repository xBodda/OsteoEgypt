/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

var moment = __webpack_require__(Object(function webpackMissingModule() { var e = new Error("Cannot find module 'moment'"); e.code = 'MODULE_NOT_FOUND'; throw e; }()));

$(document).ready(function () {
  if (document.getElementById('appointment_booking_page')) {
    var branch = $("#location");
    var type = $("#visit_type");
    var doctor = $("#doctor");
    var date = $("#date");
    var branch_value = null;
    var type_value = null;
    var doctor_value = null;
    var date_value = null;
    appointment_checker(branch_value, type_value, doctor_value);
    branch.change(function () {
      branch_value = branch.val();
      $.get("/api/available_appointments/" + branch_value, function (data) {
        empty_date_time_options();
        appointment_checker(branch_value, type_value, doctor_value);
      });
    });
    type.change(function () {
      type_value = type.val();
      $.get("/api/available_appointments/" + branch_value + '/' + type_value, function (data) {
        empty_date_time_options();
        appointment_checker(branch_value, type_value, doctor_value);
      });
    });
    doctor.change(function () {
      doctor_value = doctor.val();
      $.get("/api/available_appointments/" + branch_value + '/' + type_value + '/' + doctor_value, function (data) {
        if (appointment_checker(branch_value, type_value, doctor_value)) {
          empty_date_time_options();
          data.forEach(set_date_time_options);
        }
      });
    });
  }

  function appointment_checker(branch_value, type_value, doctor_value) {
    var check = true;

    if (branch_value !== null) {
      type.prop("disabled", false);
    } else {
      check = false;
      type.prop("disabled", true);
    }

    if (type_value !== null) {
      doctor.prop("disabled", false);
    } else {
      check = false;
      doctor.prop("disabled", true);
    }

    if (doctor_value !== null) {
      date.prop("disabled", false);
    } else {
      check = false;
      date.prop("disabled", true);
    }

    if (!check) return false;
    return true;
  }

  function empty_date_time_options() {
    date.html('<option value="" selected disabled >Select a time...</option>');
  }

  function set_date_time_options(item) {
    var opt = document.createElement('option');
    var time = item.appointment_time;
    time = moment(time).format('LLL');
    opt.appendChild(document.createTextNode(time));
    opt.value = item.id;
    date.append(opt);
  }
});

/***/ }),

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ (() => {

throw new Error("Module build failed (from ./node_modules/mini-css-extract-plugin/dist/loader.js):\nModuleBuildError: Module build failed (from ./node_modules/postcss-loader/dist/cjs.js):\nSyntaxError\n\n(532:1) C:\\xampp\\htdocs\\OsteoEgypt\\resources\\css\\app.css Unclosed block\n\n \u001b[90m 530 | \u001b[39m    background-color\u001b[33m:\u001b[39m \u001b[36mvar\u001b[39m\u001b[36m(--heading)\u001b[39m\u001b[33m;\u001b[39m\n \u001b[90m 531 | \u001b[39m\u001b[33m}\u001b[39m\n\u001b[1m\u001b[31m>\u001b[39m\u001b[22m\u001b[90m 532 | \u001b[39m\u001b[35m#sidenav-t\u001b[39m , \u001b[35m#sidenav-te\u001b[39m\u001b[33m{\u001b[39m\n \u001b[90m     | \u001b[39m\u001b[1m\u001b[31m^\u001b[39m\u001b[22m\n \u001b[90m 533 | \u001b[39m    width\u001b[33m:\u001b[39m100%\u001b[33m;\u001b[39m\n \u001b[90m 534 | \u001b[39m    box-shadow\u001b[33m:\u001b[39m 0 0 4px 0 \u001b[36mrgba\u001b[39m\u001b[36m(0, 0, 0, 0.08)\u001b[39m, 0 2px 4px 0 \u001b[36mrgba\u001b[39m\u001b[36m(0, 0, 0, 0.12)\u001b[39m\u001b[33m;\u001b[39m \u001b[90m/* ! Add Box-Shadow to the first nav-bar */\u001b[39m\n\n    at processResult (C:\\xampp\\htdocs\\OsteoEgypt\\node_modules\\webpack\\lib\\NormalModule.js:676:19)\n    at C:\\xampp\\htdocs\\OsteoEgypt\\node_modules\\webpack\\lib\\NormalModule.js:778:5\n    at C:\\xampp\\htdocs\\OsteoEgypt\\node_modules\\loader-runner\\lib\\LoaderRunner.js:399:11\n    at C:\\xampp\\htdocs\\OsteoEgypt\\node_modules\\loader-runner\\lib\\LoaderRunner.js:251:18\n    at context.callback (C:\\xampp\\htdocs\\OsteoEgypt\\node_modules\\loader-runner\\lib\\LoaderRunner.js:124:13)\n    at Object.loader (C:\\xampp\\htdocs\\OsteoEgypt\\node_modules\\postcss-loader\\dist\\index.js:94:7)");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	__webpack_require__("./resources/js/app.js");
/******/ 	// This entry module doesn't tell about it's top-level declarations so it can't be inlined
/******/ 	var __webpack_exports__ = __webpack_require__("./resources/css/app.css");
/******/ 	
/******/ })()
;