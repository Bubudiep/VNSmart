import {vns} from "../sources/js/app.js";
window.$ = window.jQuery = require('jquery');
$(document).ready(async function(){
  $(".sign-in").click(async function(){
      var login=await vns.post("/app/login/control.php", {
        user: "admin",
        pass: "1234",
      });
      if (login.result=="OK"){
        location.reload();
      }
  });
  $("#log-out").click(async function(){
    vns.exit();
  });
});