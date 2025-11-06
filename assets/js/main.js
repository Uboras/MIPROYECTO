import { inicialTema } from "./components/tema.js";
import { Header, HeaderHome } from "./components/header.js";
import { inicialEventos } from "./validaciones/FormsEvents.js";

Header(".header",
  { description: "Gestión de Productos y Categorías" },
  { logo: "../../assets/img/logonegro.png" }
);
HeaderHome({ logo: "../../assets/img/logonegro.png" });
inicialTema();
inicialEventos();
