document.addEventListener("DOMContentLoaded", function () {
  // --- フェードインセクションの処理 ---
  const fadeInSections = [
    { selector: ".fade-title", className: "is-visible" },
    { selector: ".fade-in-section", className: "is-visible" },
  ];

  const observerOptions = {
    threshold: 0.1,
  };

  const fadeInOnScroll = function (entries, observer) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add(entry.target.dataset.fadeClass);
        observer.unobserve(entry.target);
      }
    });
  };

  const observer = new IntersectionObserver(fadeInOnScroll, observerOptions);

  fadeInSections.forEach((section) => {
    const elements = document.querySelectorAll(section.selector);
    elements.forEach((element) => {
      element.dataset.fadeClass = section.className;
      observer.observe(element);
    });
  });

  // --- ハンバーガーメニューのトグル処理 ---
  function toggleMenu() {
    const menuIcon = document.querySelector(".menu-icon");
    const slideMenu = document.getElementById("slide-menu");
    if (menuIcon && slideMenu) {
      menuIcon.classList.toggle("open");
      slideMenu.classList.toggle("open");
    } else {
      console.error("menuIcon or slideMenu not found");
    }
  }

  const menuIcon = document.querySelector(".menu-icon");
  if (menuIcon) {
    menuIcon.addEventListener("click", toggleMenu);
  } else {
    console.error("menuIcon element not found");
  }

  // --- カルーセル処理 ---
  const carousel = document.querySelector(".carousel");
  const dots = document.querySelectorAll(".dot");

  let currentSlide = 0;

  // ドットをクリックしてスライドを切り替える
  dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
      currentSlide = index;
      updateCarousel();
    });
  });

  function updateCarousel() {
    if (carousel) {
      // カルーセルの位置を変更
      const offset = currentSlide * -100; // 1つのスライドの幅
      carousel.style.transform = `translateX(${offset}%)`;

      // ドットのアクティブ状態を更新
      dots.forEach((dot, index) => {
        dot.classList.toggle("active", index === currentSlide);
      });
    } else {
      console.error("carousel element not found");
    }
  }

  // --- フォーム送信時にAPIにリクエストを送信する処理 ---
  document
    .getElementById("gpt-form")
    .addEventListener("submit", async function (e) {
      e.preventDefault(); // フォームのデフォルト動作（ページ遷移）を防ぐ

      // ユーザーの入力を取得
      const userInput = document.getElementById("user_input").value;

      if (!userInput) {
        alert("質問を入力してください！");
        return;
      }

      // 送信ボタンを無効化
      document.querySelector("button").disabled = true;
      document.querySelector("button").textContent = "送信中...";

      // APIエンドポイントとAPIキーを設定
      const apiUrl = "https://api.openai.com/v1/completions";
      const apiKey = "your-api-key-here"; // OpenAI APIキーを設定

      // APIリクエストの設定
      const requestData = {
        model: "text-davinci-003",
        prompt: userInput,
        max_tokens: 150,
      };

      try {
        const response = await fetch(apiUrl, {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            Authorization: `Bearer ${apiKey}`,
          },
          body: JSON.stringify(requestData),
        });

        // APIのレスポンスを受け取る
        const result = await response.json();

        if (result.choices && result.choices[0].text) {
          // APIの応答を画面に表示
          document.getElementById("gpt-response").textContent =
            result.choices[0].text.trim();
        } else {
          document.getElementById("gpt-response").textContent =
            "GPTからの応答がありません。";
        }
      } catch (error) {
        document.getElementById("gpt-response").textContent =
          "エラーが発生しました。再試行してください。";
        console.error("Error:", error);
      } finally {
        // 送信ボタンを再有効化
        document.querySelector("button").disabled = false;
        document.querySelector("button").textContent = "送信";
      }
    });
});

document.addEventListener("DOMContentLoaded", function () {
  // --- 画像フェードイン処理 ---
  const images = document.querySelectorAll(".title-img, .title-img-sp");

  const imageObserverOptions = {
    threshold: 0.1,
  };

  const fadeInImages = function (entries, observer) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("is-visible");
        observer.unobserve(entry.target); // 一度フェードインしたら監視を解除
      }
    });
  };

  const imageObserver = new IntersectionObserver(
    fadeInImages,
    imageObserverOptions
  );

  images.forEach((image) => {
    imageObserver.observe(image); // 画像要素を監視
  });
});
