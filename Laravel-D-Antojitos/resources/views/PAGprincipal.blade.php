
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D'antojitos Gourmet Decora</title>
   
</head>
<body>
<style>
    .vertical-menu {
        width: 200px; /* Establece un ancho si lo deseas */
    }
    .vertical-menu a {
        background-color: #eee; /* Color de fondo gris */
        color: black; /* Color de texto negro */
        display: block; /* Hace que los enlaces aparezcan uno debajo del otro */
        padding: 12px; /* Agrega un poco de espacio */
    }

    /* Icono de menú */
    .hamb {
        cursor: pointer;
        float: right;
        padding: 40px 20px;
    }
    /* Estilo de la etiqueta */
    .hamb-line {
        background: var(--white);
        display: block;
        height: 2px;
        position: relative;
        width: 24px;
    }
    /* Estilo del span */
    .hamb-line::before,
    .hamb-line::after {
        background: var(--white);
        content: '';
        display: block;
        height: 100%;
        position: absolute;
        transition: all 0.2s ease-out;
        width: 100%;
    }
    .hamb-line::before {
        top: 5px;
    }
    .hamb-line::after {
        top: -5px;
    }
    /* Menú lateral (oculto por defecto) */
    .side-menu {
        display: none;
    }
  </style>

<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Active</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>


</body>
</html>
