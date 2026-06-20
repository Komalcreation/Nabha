let currentLang = localStorage.getItem("language") || "en";

function updateLanguage(lang) {
  document.querySelectorAll("[data-en]").forEach(el => {
    el.textContent = el.getAttribute(`data-${lang}`);
  });

  const btn = document.getElementById("langToggle");
  if (btn) {
    btn.textContent = lang === "en" ? "ਪੰਜਾਬੀ" : "English";
  }

  localStorage.setItem("language", lang);
}

document.addEventListener("DOMContentLoaded", () => {
  updateLanguage(currentLang);

  const toggleBtn = document.getElementById("langToggle");
  if (toggleBtn) {
    toggleBtn.addEventListener("click", () => {
      currentLang = currentLang === "en" ? "pa" : "en";
      updateLanguage(currentLang);
    });
  }
});