//validacion para envio de formulario de categorias
export function validateformularioCategoria() {
  let nombre = $("#nombre-categoria-form").val().trim();
  let error = [];
  let erorrMensaje = $("#error-form").val("");
  if (nombre === "") {
    error.push("<p class='error-text danger'>El Nombre es obligatorio.</p>");
  }
  if (error.length > 0) {
    erorrMensaje.html(error.join(""));
    return false;
  } else {
    erorrMensaje.html("<p class='success-text success'>Formulario Enviado.</p>");
    return true;
  }
}
//validacion para envio de datos en formulario de productos
export function validateformularioProducto() {
  let nombre = $("#nombre-producto").val().trim();
  let descripcion = $("#descripcion-producto").val().trim();
  let precio = $("#precio-producto").val().trim();
  let categoria = $("#categoria-producto").val().trim();
  let error = [];
  let erorrMensaje = $("#error-form").val("");
   if (nombre === "") {
    error.push(
      "<p class='error-text danger'>El Nombre del Producto es obligatorio.</p>"
    );
  }
  if (descripcion === "") {
    error.push(
      "<p class='error-text danger'>La Descripción es obligatoria.</p>"
    );
  }
  if (precio === "")
    error.push(
      "<p class='error-text danger'> Ingrese Precio es obligatorio</p>"
    );
  if (isNaN(precio) || precio <= 0) {
    error.push(
      "<p class='error-text danger'>Ingrese Precio Válida, mayor a 0.</p>"
    );
  }
  if (categoria === "")
    error.push(
      "<p class='error-text danger'> Ingrese ID Categoría es obligatorio</p>"
    );
  if (isNaN(categoria) || categoria <= 0) {
    error.push(
      "<p class='error-text danger'>Ingrese ID Categoría Válida, mayor a 0.</p>"
    );
  }
  if (error.length > 0) {
    erorrMensaje.html(error.join(""));
    return false;
  } else {
    erorrMensaje.html("<p class='success-text success'>Formulario Enviado.</p>");
    return true;
  }
}
//validacion para verificacion de datos en formulario de productos
export function validateformularioProductoOnFocus() {
  let nombre = $("#nombre-producto").val().trim();
  let descripcion = $("#descripcion-producto").val().trim();
  let precio = $("#precio-producto").val().trim();
  let categoria = $("#categoria-producto").val().trim();
  let error = [];
  let erorrMensaje = $("#error-form").val("");
 
  if (nombre === "") {
    error.push(
      "<p class='error-text danger'>El Nombre del Producto es obligatorio.</p>"
    );
  }
  if (descripcion === "") {
    error.push(
      "<p class='error-text danger'>La Descripción es obligatoria.</p>"
    );
  }
  if (precio === "")
    error.push(
      "<p class='error-text danger'> Ingrese Precio es obligatorio</p>"
    );
  if (isNaN(precio) || precio <= 0) {
    error.push(
      "<p class='error-text danger'>Ingrese Precio Válida, mayor a 0.</p>"
    );
  }
  if (categoria === "")
    error.push(
      "<p class='error-text danger'> Ingrese ID Categoría es obligatorio</p>"
    );
  if (isNaN(categoria) || categoria <= 0) {
    error.push(
      "<p class='error-text danger'>Ingrese ID Categoría Válida, mayor a 0.</p>"
    );
  }
  if (error.length > 0) {
    erorrMensaje.html(error.join(""));
    } else {
    erorrMensaje.html("<p class='success-text success'>Formulario válido Para enviar.</p>");
  }
}
//validacion para verificacion de datos en formulario de categorias
export function ValidateformularioCategoriaOnfocus() {
  let nombre = $("#nombre-categoria-form").val().trim();
  let error = [];
  let erorrMensaje = $("#error-form").val("");
  if (nombre === "") {
    error.push("<p class='error-text danger'>El Nombre es obligatorio.</p>");
  }
  if (error.length > 0) {
    erorrMensaje.html(error.join(""));
  } else {
    erorrMensaje.html("<p class='success-text success'>Formulario válido para enviarse.</p>");
}
}
