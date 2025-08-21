"use strict";
/* 
バニラJavaScript
*/
// burger
let nav = document.querySelector("#navArea");
let btn = document.querySelector(".c-burger");
let mask = document.querySelector("#mask");

btn.onclick = () => {
  nav.classList.toggle("open");
};

mask.onclick = () => {
  nav.classList.toggle("open");
};

/*
jQuery
*/
$(function() {
  // 画面が読み込まれたとき
  $(".u-fadeIn--scroll").addClass("show");
  // スクロールしたとき
  $(window).scroll(function() {
    // スクロール量を取得
    const scroll = $(window).scrollTop();
    // 画面の高さを取得
    const windowHeight = $(window).height();

    $(".u-fadeIn").each(function() {
      // それぞれの.boxまでの高さを取得
      const boxHeight = $(this).offset().top;
      // 条件式に合致する場合はis-activeを付与
      if(scroll + windowHeight > boxHeight) {
        $(this).addClass("show");
      }
    });
  });
});