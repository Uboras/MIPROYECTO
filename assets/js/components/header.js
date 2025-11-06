export function Header({ logo }) {
  const selector = ".header";
  const head = document.querySelector(selector);
  if (!head) return;

  head.innerHTML = `
    <div class="logo">
      <a href="../../../views/home.html"><img src="${logo}" alt="Logo IronPulse" /></a>
    </div>
    <div class="menu">
    <div class="banner-promos" >
    <img src="../../assets/img/promos/promos.png" alt="Banner Promociones"/>
    </div>
    <nav>
    <ul>
    <li><a href="../../../views/home.html">Inicio</a></li>
    <li><a href="../../backend/views/categorias.html">New Categorías</a></li>
    <li><a href="../../backend/views/productos.html">New Productos</a></li>
    <li><a href="../../backend/views/lista_categorias.html">Categorías</a></li>
    <li><a href="../../backend/views/lista_productos.html">Productos</a></li>
    </ul>
    </nav>
    </div>
      <button id="cambiartema">☀️/🌙</button>
    <div class="clear"></div>
  `;
}
export function HeaderHome({ logo }) {
  const selector = ".headerHome";
  const head = document.querySelector(selector);
  head.innerHTML = `
     <div class="logo-headerHome">
      <a href="../../../views/home.html"><img src="${logo}" alt="Logo IronPulse" /></a>
    </div>
    
      </div>`;}