document.addEventListener("DOMContentLoaded", function () {
  const contactForm = document.querySelector(".contact-form");

  contactForm.addEventListener("submit", function (e) {
    e.preventDefault(); // ページリロードを防ぐ

    const formData = new FormData(contactForm);
    formData.append("action", "custom_contact_form");

    fetch(ajax_object.ajax_url, {
      method: "POST",
      body: formData,
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.success) {
          alert(data.data); // 成功メッセージ
          contactForm.reset(); // フォームをリセット
        } else {
          alert(data.data); // エラーメッセージ
        }
      })
      .catch((error) => {
        console.error("Error:", error);
        alert("送信に失敗しました。再度お試しください。");
      });
  });
});
