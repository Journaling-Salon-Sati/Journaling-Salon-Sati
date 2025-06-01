document.addEventListener("DOMContentLoaded", function () {
  // フェードイン処理
  const fadeElems = document.querySelectorAll(".fade-in");

  const observer = new IntersectionObserver(
    (entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          observer.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.1,
    }
  );

  fadeElems.forEach((elem) => {
    observer.observe(elem);
  });

  // ハンバーガーメニュー開閉処理（バツ印化も）
  const hamburger = document.getElementById("hamburger");
  const menu = document.getElementById("hamburger-menu");

  if (hamburger && menu) {
    hamburger.addEventListener("click", function () {
      hamburger.classList.toggle("active"); // ← バツ印に変える
      menu.classList.toggle("active"); // ← メニュー開閉
    });
  }

  // フッター手前でボタンを止める処理
  const footer = document.querySelector("footer"); // フッターの要素
  const kozaFooter = document.querySelector(".koza-footer");

  function updateStickyPosition() {
    if (!footer || !kozaFooter) return;
    const footerRect = footer.getBoundingClientRect();
    const overlap = window.innerHeight - footerRect.top;
    if (overlap > 0) {
      kozaFooter.style.transform = `translateY(-${overlap}px)`;
    } else {
      kozaFooter.style.transform = "translateY(0)";
    }
  }

  window.addEventListener("scroll", updateStickyPosition);
  window.addEventListener("resize", updateStickyPosition);
  updateStickyPosition(); // 初期化
});
