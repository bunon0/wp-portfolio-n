"use strict";

jQuery(function ($) {
  const HtmlBody = $("body");
  const Loading = $(".js-loading");
  const LoadingSvg = $(".js-loading-svg");
  const Header = $(".js-header");
  const Hamburger = $(".js−hamburger");
  const ModalNav = $(".js-modal-nav");
  const SideBar = $(".js-sidebar");
  const Footer = $(".js-footer");
  const ScrollTarget = $("a[href^='#']");
  /* =====================
  * loadingアニメーション
  ===================== */

  function loadingInit() {
    // sessionStorage.clear();
    async function lodingTimingInit() {
      await setTimeout(function () {
        LoadingSvg.addClass("is-active");
      }, 100);
      setTimeout(function () {
        Loading.fadeOut(500);
      }, 2000);
    }

    const webStorage = function () {
      if (sessionStorage.getItem("access")) {
        // 2回目以降アクセス時の処理
        HtmlBody.attr("id", "loaded");
      } else {
        // 初回アクセス時の処理
        sessionStorage.setItem("access", "true");
        HtmlBody.attr("id", "loaded");
        Loading.addClass("is-active");
        lodingTimingInit();
      }
    };

    webStorage();
  }
  /* =====================
  * 上部固定header分bodyに余白を追加する
  ===================== */


  function headerSpaceWithBody() {
    let headerHight = Header.outerHeight(true);
    HtmlBody.css("padding-top", headerHight);
  }
  /* =====================
  * サイドバーの固定高さをheader+40pxにする
  ===================== */


  function sidebarSpace() {
    let headerHight = Header.outerHeight(true);
    SideBar.css("top", headerHight + 40);
  }
  /* =====================
  * footerをbody（コンテンツ）の高さが100vh未満だったら画面下部に固定する
  ===================== */


  function footerPostionBottom() {
    let bodyHight = HtmlBody.outerHeight(true);
    let windowHeight = $(window).height();

    if (bodyHight <= windowHeight) {
      Footer.css({
        position: "fixed",
        bottom: 0
      });
    } else {
      return;
    }
  }
  /* =====================
  * スムーススクロール
  ===================== */


  function smoothScroll() {
    let urlHash = location.hash;
    const headerHight = Header.outerHeight(true);

    if (urlHash) {
      $("body,html").stop().scrollTop(0);
      setTimeout(function () {
        const target = $(urlHash);
        const speed = 400;
        const spaceSp = 60;
        const spacePc = 80; //別ページ用のスムーススクロールの関数

        if (window.matchMedia("(min-width: 767px)").matches) {
          const position = $(target).offset().top - headerHight - spacePc;
          $("body,html").stop().animate({
            scrollTop: position
          }, speed, "swing");
        } else {
          const position = $(target).offset().top - headerHight - spaceSp;
          $("body,html").stop().animate({
            scrollTop: position
          }, speed, "swing");
        }
      }, 100);
    } // トップページページ内Smoothスクロール;


    ScrollTarget.on("click", function () {
      const href = $(this).attr("href");
      const target = $(href == "#" || href == "" ? "html" : href);
      const speed = 300;
      const spaceSp = 60;
      const spacePc = 80; // SPとPCでスクロール時の上部の余白を変える

      if (window.matchMedia("(min-width: 768px)").matches) {
        const position = $(target).offset().top - headerHight - spacePc;
        $("body,html").animate({
          scrollTop: position
        }, speed, "swing");
      } else {
        const position = $(target).offset().top - headerHight - spaceSp;
        $("body,html").animate({
          scrollTop: position
        }, speed, "swing");
      } // スムーススクロールクリックでSPナビを閉じる


      Hamburger.removeClass("is-active");
      Header.removeClass("is-menu-open");
      ModalNav.removeClass("is-active");
    });
    return false;
  }
  /* =====================
  * ハンバーガーメニュー
  ===================== */


  function hamburger() {
    Hamburger.on("click", function () {
      Hamburger.toggleClass("is-active");
      Header.toggleClass("is-menu-open");
      ModalNav.toggleClass("is-active");
    });
  }
  /* =====================
  * ホーム - mainvisual swiperSlider
  ===================== */


  function mvSipwerSlider() {
    /* eslint-disable */
    const swiper = new Swiper(".swiper", {
      effect: "fade",
      fadeEffect: {
        crossFade: true
      },
      slidesPerView: 1,
      loop: true,
      loopAdditionalSlides: 1,
      // 無限ループさせる場合に複製するスライド数
      speed: 2000,
      // スライドアニメーションのスピード（ミリ秒）
      autoplay: {
        delay: 5000,
        // 次のスライドに切り替わるまでの時間（ミリ秒）
        disableOnInteraction: false,
        // ユーザーが操作しても自動再生を止めない
        waitForTransition: false // アニメーションの間も自動再生を止めない（最初のスライドの表示時間を揃えたいときに）

      },
      pagination: {
        el: ".swiper-pagination",
        // ページネーション要素のクラス
        clickable: true,
        // クリックによるスライド切り替えを有効にする
        type: "bullets" // 'bullets'（デフォルト） | 'fraction' | 'progressbar'

      }
    });
    /* eslint-enable */
  }
  /* =====================
  * contactForm7 - Submitボタンにdisabledを追加
  ===================== */


  function contactForm7Disabled() {
    const required = document.querySelectorAll(".wpcf7-validates-as-required");
    let requiredArray = {};
    const submit = document.querySelector(".wpcf7-submit");

    if (required.length > 0) {
      submit.disabled = true;
      required.forEach(el => {
        if (el.value === "") {
          requiredArray[el.name] = false;
        }

        el.addEventListener("input", () => {
          if (el.value === "") {
            requiredArray[el.name] = false;
          } else if (requiredArray[el.name] === false) {
            delete requiredArray[el.name];
          }

          if (Object.keys(requiredArray).length === 0) {
            submit.disabled = false;
          } else {
            submit.disabled = true;
          }
        });
      });
    }
  }
  /* =====================
  * 各関数の初期化・実行
  ===================== */


  loadingInit();
  headerSpaceWithBody();
  sidebarSpace();
  footerPostionBottom();
  smoothScroll();
  hamburger();
  mvSipwerSlider();
  contactForm7Disabled();
});
//# sourceMappingURL=sourcemaps/main.js.map