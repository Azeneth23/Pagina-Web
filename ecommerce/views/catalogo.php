<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<title>AURA - Accesorios</title>

<!-- BOOTSTRAP -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- CSS -->
<link rel="stylesheet" href="css/estilos.css">

<style>

body{
    background-color:#fdf6f9;
}

.logo-aura{
    width:180px;
    height:auto;
    margin:20px auto;
    display:block;
    border-radius:20px;
}

</style>

</head>

<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">

<a class="navbar-brand" href="#">AURA</a>

<button
class="navbar-toggler"
type="button"
data-bs-toggle="collapse"
data-bs-target="#menu">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="#inicio">Inicio</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#catalogo">Productos</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#ofertas">Ofertas</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#contacto">Contacto</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#galeria">Galería</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#faq">FAQ</a>
</li>

<li class="nav-item">
<a class="nav-link" href="#redes">Redes</a>
</li>

</ul>

</div>

</div>

</nav>

<!-- CONTENIDO -->

<div class="container text-center mt-4">

<header>

<h1 class="titulo">AURA</h1>

<img
src="img/logo.jpeg"
alt="Logo AURA"
class="logo-aura"
>

<p>
<b>Accesorios que reflejan tu esencia</b>
</p>

</header>

<!-- SOBRE -->

<section id="inicio">

<h2>Sobre AURA</h2>

<p>
AURA es una marca enfocada en resaltar la belleza natural de cada mujer a través de accesorios únicos.

<button
onclick="toggleSeccion('info1')"
class="btn btn-outline-dark btn-sm">

Conoce más

</button>

</p>

<section id="info1" style="display:none;">

<p>
Nos especializamos en diseños modernos y elegantes.
</p>

</section>

<p>
Creemos que cada accesorio cuenta una historia y transmite personalidad.

<button
onclick="toggleSeccion('info2')"
class="btn btn-outline-dark btn-sm">

Conoce más

</button>

</p>

<section id="info2" style="display:none;">

<p>
Nuestros productos están diseñados para mujeres auténticas.
</p>

</section>

</section>

<hr>

<!-- PRODUCTOS -->

<section id="catalogo">

<h2 class="text-center">Productos</h2>

<div class="row justify-content-center">

<?php foreach($productos as $producto): ?>

<div class="col-md-3 tarjeta producto">

<h5>
<?php echo $producto['nombre']; ?>
</h5>

<img
src="<?php echo $producto['imagen']; ?>"
class="img-fluid"
alt=""
>

<p>
<?php echo $producto['descripcion']; ?>
</p>

<p>
<b>$<?php echo $producto['precio']; ?> MXN</b>
</p>

<button
class="btn btn-dark"
onclick="agregarCarrito(
<?php echo $producto['id']; ?>,
<?php echo $producto['precio']; ?>,
'<?php echo $producto['nombre']; ?>'
)">

Agregar al carrito

</button>

</div>

<?php endforeach; ?>

</div>

</section>

<hr>

<!-- OFERTAS -->

<section id="ofertas" class="mt-5">

<h2 class="text-center">Ofertas</h2>

<div class="row">

<div class="col-md-4 tarjeta producto">

<h5>Aretes Flor</h5>

<img src="img/AretesFlor.webp"
class="img-fluid">

<p class="text-muted">
<del>$200</del>
</p>

<p class="text-danger fw-bold">
$150 MXN
</p>

</div>

<div class="col-md-4 tarjeta producto">

<h5>Pulsera Minimalista</h5>

<img src="img/PulceraMinimalista.webp"
class="img-fluid">

<p class="text-muted">
<del>$120</del>
</p>

<p class="text-danger fw-bold">
$90 MXN
</p>

</div>

<div class="col-md-4 tarjeta producto">

<h5>Anillo Brillo</h5>

<img src="https://cdn.pixabay.com/photo/2016/11/29/09/32/ring-1867650_1280.jpg"
class="img-fluid">

<p class="text-muted">
<del>$100</del>
</p>

<p class="text-danger fw-bold">
$70 MXN
</p>

</div>

</div>

</section>

<hr>

<!-- GALERIA -->

<section id="galeria" class="mt-5">

<h2 class="text-center">Galería</h2>

<div class="row">

<div class="col-md-3">
<img src="https://cdn.pixabay.com/photo/2016/11/29/05/08/jewelry-1867059_1280.jpg"
class="img-fluid galeria-img">
</div>

<div class="col-md-3">
<img src="https://cdn.pixabay.com/photo/2017/08/06/06/42/earrings-2588975_1280.jpg"
class="img-fluid galeria-img">
</div>

<div class="col-md-3">
<img src="https://cdn.pixabay.com/photo/2016/03/27/21/16/bracelet-1284240_1280.jpg"
class="img-fluid galeria-img">
</div>

<div class="col-md-3">
<img src="https://cdn.pixabay.com/photo/2016/11/29/03/53/jewelry-1866574_1280.jpg"
class="img-fluid galeria-img">
</div>

</div>

</section>

<hr>

<!-- CARRITO -->

<section id="tienda" class="mt-5">

<h2 class="text-center">
Carrito de Compras
</h2>

<div class="card shadow">

<div class="card-header bg-dark text-white">

<h4 class="mb-0">
Productos agregados
</h4>

</div>

<div class="card-body">

<ul id="carrito" class="list-group mb-3"></ul>

<h4>
Total: $
<span id="total">0.00</span>
</h4>

<button
class="btn btn-danger"
onclick="vaciarCarrito()">

Vaciar carrito

</button>

</div>

</div>

</section>

<hr>

<!-- FAQ -->

<section id="faq">

<h2>Preguntas Frecuentes</h2>

<details>

<summary>
¿Hacen envíos?
</summary>

<p>
Sí, a toda la República Mexicana.
</p>

</details>

<details>

<summary>
¿Aceptan devoluciones?
</summary>

<p>
Sí, dentro de los primeros 7 días.
</p>

</details>

</section>

<hr>

<!-- CONTACTO -->

<section id="contacto">

<h2>Contáctanos</h2>

<div class="row">

<div class="col-md-6">

<p>
<b>Dirección:</b> Pachuca, Hidalgo
</p>

<p>
<b>Teléfono:</b> +52 772-190-8411
</p>

<p>
<b>WhatsApp:</b> 7721908411
</p>

</div>

<div class="col-md-6">

<iframe
src="https://www.google.com/maps?q=Pachuca,Hidalgo&output=embed"
width="100%"
height="250"
style="border:0;">
</iframe>

</div>

</div>

<br>

<form>

<input
class="form-control"
type="text"
placeholder="Nombre">

<br>

<input
class="form-control"
type="email"
placeholder="Correo">

<br>

<textarea
class="form-control"
placeholder="Mensaje"></textarea>

<br>

<button class="btn btn-dark">
Enviar
</button>

</form>

</section>

<hr>

<!-- REDES -->

<section id="redes" class="text-center mt-5">

<h2>
Síguenos en redes sociales
</h2>

<div class="d-flex justify-content-center gap-4 mt-3">

<a href="#" class="red social">
Facebook
</a>

<a href="#" class="red social">
Instagram
</a>

<a href="#" class="red social">
WhatsApp
</a>

<a href="#" class="red social">
TikTok
</a>

</div>

</section>

<footer class="mt-5">

<p>
© 2026 AURA
</p>

</footer>

</div>

<!-- JAVASCRIPT -->

<script>

function toggleSeccion(id){

let sec=document.getElementById(id);

if(sec.style.display==="none"){

sec.style.display="block";

}else{

sec.style.display="none";

}

}

let carrito=[];

function agregarCarrito(id,precio,nombre){

const existe=carrito.find(
item=>item.id===id
);

if(existe){

existe.cantidad++;

}else{

carrito.push({

id:id,
nombre:nombre,
precio:precio,
cantidad:1

});

}

mostrarCarrito();

}

function mostrarCarrito(){

const lista=document.getElementById("carrito");

const totalHTML=document.getElementById("total");

lista.innerHTML="";

let total=0;

carrito.forEach(item=>{

let subtotal=item.precio*item.cantidad;

total+=subtotal;

lista.innerHTML+=`

<li class="list-group-item d-flex justify-content-between">

<div>

<strong>${item.nombre}</strong><br>

Cantidad: ${item.cantidad}

</div>

<div>

$${subtotal}

<button
class="btn btn-sm btn-danger ms-2"
onclick="eliminarProducto(${item.id})">

Eliminar

</button>

</div>

</li>

`;

});

totalHTML.innerText=total;

}

function eliminarProducto(id){

carrito=carrito.filter(
item=>item.id!==id
);

mostrarCarrito();

}

function vaciarCarrito(){

carrito=[];

mostrarCarrito();

}

</script>

<!-- BOOTSTRAP -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>