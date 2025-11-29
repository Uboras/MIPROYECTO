const html = document.documentElement;
const TEMA_KEY = "ironpulse-theme";
const BUTTON_ID = "cambiartema"; // asegúrate que en tu Header uses este id

function setTheme(theme) {
  html.setAttribute("data-theme", theme);
  localStorage.setItem(TEMA_KEY, theme);
  updateButtonLabel();
}

export function AlternarTema() {
  const current = html.getAttribute("data-theme");
  const next = current === "dark" ? "light" : "dark";
  setTheme(next);
}

export function inicialTema() {
  const saved = localStorage.getItem(TEMA_KEY);
  const prefersDark = window.matchMedia("(prefers-color-scheme: dark)").matches;
  setTheme(saved || (prefersDark ? "dark" : "light"));
}

// Busca el botón en el momento de actualizar el label
function updateButtonLabel() {
  const btn = document.getElementById(BUTTON_ID);
  if (!btn) return; // si aún no existe, no falla
  const theme = html.getAttribute("data-theme");
  btn.textContent = theme === "dark" ? "☀️" : "🌙";
}

//Inicializar tema cuando el DOM está listo
document.addEventListener("DOMContentLoaded", inicialTema);

// Delegación de eventos: funciona aunque el botón
document.addEventListener("click", (e) => {
  const target = e.target;
  if (target && target.id === BUTTON_ID) {
    AlternarTema();
  }
});
