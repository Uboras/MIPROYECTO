import { inicialTema } from "./components/tema.js";
import { Header} from "./components/header.js";
import { inicialEventos } from "./validaciones/FormsEvents.js";

Header();

inicialTema();
inicialEventos();

function Location(ruta) {
  window.location.href = ruta;
}
window.Location = Location;
