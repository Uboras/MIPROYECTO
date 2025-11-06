import {
  validateformularioCategoria,
  validateformularioProducto,
  ValidateformularioCategoriaOnfocus,
  validateformularioProductoOnFocus,
} from "./validaciones.js";

export function inicialEventos() {
  //SUBMIT FORMULARIO CATEGORIAS
  $("#form-categoria").on("submit", function (e) {
    e.preventDefault();
    if (validateformularioCategoria()) {
      setTimeout(() => {
        this.submit();
      }, 3000);
    }
  });
  // Validación onFocus para formulario de Categorías
  $("#id-categoria-form").on("focus", function () {
    ValidateformularioCategoriaOnfocus();
  });
  $("#id-categoria-form").on("blur", function () {
    ValidateformularioCategoriaOnfocus();
  });
  $("#nombre-categoria-form").on("focus", function () {
    ValidateformularioCategoriaOnfocus();
  });
  $("#nombre-categoria-form").on("blur", function () {
    ValidateformularioCategoriaOnfocus();
  });

  //SUBMIT FORMULARIO PRODUCTOS
  $("#form-productos").on("submit", function (e) {
    e.preventDefault();
    if (validateformularioProducto()) {
      setTimeout(() => {
        this.submit();
      }, 3000);
    }
  });
  // validación onFocus para formulario de Productos
  $("#id-producto").on("focus", function () {
    validateformularioProductoOnFocus();
  });
  $("#id-producto").on("blur", function () {
    validateformularioProductoOnFocus();
  });
  $("#nombre-producto").on("focus", function () {
    validateformularioProductoOnFocus();
  });
  $("#nombre-producto").on("blur", function () {
    validateformularioProductoOnFocus();
  });
  $("#descripcion-producto").on("focus", function () {
    validateformularioProductoOnFocus();
  });
  $("#descripcion-producto").on("blur", function () {
    validateformularioProductoOnFocus();
  });
  $("#precio-producto").on("focus", function () {
    validateformularioProductoOnFocus();
  });
  $("#precio-producto").on("blur", function () {
    validateformularioProductoOnFocus();
  });
  $("#categoria-producto").on("focus", function () {
    validateformularioProductoOnFocus();
  });
  $("#categoria-producto").on("blur", function () {
    validateformularioProductoOnFocus();
  });
}
