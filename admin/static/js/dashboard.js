/* globals feather:false */

(function () {
  'use strict'

  feather.replace({ 'aria-hidden': 'true' })

})()

function hide_table() {
  var e = document.getElementById("myTable");
  e.classList.toggle("hide-table");
}

