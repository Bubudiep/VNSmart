import {vns} from "./app.js";
$(document).ready(async function(){
  $("#maximinze").click(function(){
      vns.maximinze();
  });
  $("#sendPopup").click(function(){
    vns.popup("Title","This is a popup");
  });
  $("#miniminze").click(function(){
      vns.miniminze();
  });
  $("#hidden").click(function(){
      vns.hidden();
  });
  $("#exit").click(function(){
      vns.exit();
  });
  $(".app-item").click(function(){
      var item = document.getElementsByClassName("app-item");
      for (var i = 0; i < item.length; i++) {
          item[i].classList.remove("active");
      }
      console.log(this);
      this.classList.add("active");
  });
});