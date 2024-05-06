<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>D'antojitos</title>
		<link rel="stylesheet" href="styles.css">
	</head>
	<head>
		<style>

.btn {
    cursor: pointer;
    border: 1px solid white;
    background-color: transparent; 
    height: 50px;
    width: 200px;
    color: white; 
    font-size: 1.5em;
    box-shadow: 0 6px 6px rgba(0, 0, 0, 0.6);
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #001f3f;
}
		footer {
            background-color: #f9f5f0;
            color: rgb(15, 14, 14);
            text-align: center;
            padding: 20px;
        }
 
        .social-icons {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .social-icons a {
            color: rgb(15, 15, 15);
            font-size: 20px;
        }
    
        .copyright {
            font-size: 12px;
        }

        .chat-link {
            color: rgb(14, 14, 14);
            font-size: 14px;
        }
    </style>
	</head>
	<body>
		
       <header>
					<div class="container-logo">
						<i class="fa-solid fa-mug-hot"></i>
						<h1 class="logo"><a href="/">D'antojitos Goumet Decora</a></h1>
					</div>

					<div class="container-user">
						<i class="fa-solid fa-user"></i>
						<i class="fa-solid fa-basket-shopping"></i>
						<div class="content-shopping-cart">
							<span class="text">Carrito</span>
							<span class="number">(0)</span>
						</div>
					</div>
				</div>
			</div>

			<div class="container-navbar">
				<nav class="navbar container">
					<i class="fa-solid fa-bars"></i>
					<ul class="menu">
						<li><a href="#">Inicio</a></li>
						<li><a href="#">Moca Helado</a></li>
						<li><a href="#">Expreso</a></li>
						<li><a href="#">Capuchino</a></li>
						<li><a href="#">Más</a></li>
						<li><a href="#">Blog</a></li>
					</ul>

					<form class="search-form">
						<input type="search" placeholder="Buscar..." />
						<button class="btn-search">
							<i class="fa-solid fa-magnifying-glass"></i>
						</button>
					</form>
				</nav>
			</div>
		</header>

		<section class="banner">
			<div class="content-banner">
				<p>Café Delicioso</p>
				<h2>100% Natural <br />Café Fresco</h2>
				<a href="#" class="btn">Ver servicios</a>
			</div>
		</section>

		<script src="js/script.js"></script><br>

			
			<section class="container top-categories">
				<h1 class="heading-1">Mejores Categorías</h1>
				<div class="container-categories">
					<div class="card-category category-moca">
						<p>Café moca</p>
						<span>Ver más</span>
					</div>
					<div class="card-category category-expreso">
						<p>Expreso Americano</p>
						<span>Ver más</span>
					</div>
					<div class="card-category category-capuchino">
						<p>Capuchino</p>
						<span>Ver más</span>
					</div>
				</div>
			</section>

			

				
									
						
							
			
			

			<section class="gallery">
				<img
					src="img/gallery1.jpg"
					alt="Gallery Img1"
					class="gallery-img-1"
				/><img
					src="img/gallery2.jpg"
					alt="Gallery Img2"
					class="gallery-img-2"
				/><img
					src="img/gallery3.jpg"
					alt="Gallery Img3"
					class="gallery-img-3"
				/><img
					src="img/gallery4.jpg"
					alt="Gallery Img4"
					class="gallery-img-4"
				/><img
					src="img/gallery5.jpg"
					alt="Gallery Img5"
					class="gallery-img-5"
				/>
			</section>

			
				
					
		
		<footer>
			<div class="social-icons">
				<a href="#"><i class="fab fa-pinterest"></i></a>
				<a href="#"><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-instagram"></i></a>
			</div>
			<center>
			<p class="copyright">© 2035 Creado por D'antojitosGourmet decora.com</p>
			<p class="chat-link"><a href="#">Chat en línea</a></p>
		</footer></center>
		<script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>
	</body>
</html>
