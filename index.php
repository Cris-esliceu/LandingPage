<?php
    include 'db.php' ;
    include 'header.php';
?>
    <section class="hero">
        <div class="contenido-hero">
                <h2>Formación online</h2>
                <div class="Informacion">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-home-star" 
                    width="80" height="80" viewBox="0 0 24 24" stroke-width="1.5" stroke="#007988" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M19.258 10.258l-7.258 -7.258l-9 9h2v7a2 2 0 0 0 2 2h4" />
                    <path d="M9 21v-6a2 2 0 0 1 2 -2h1.5" />
                    <path d="M17.8 20.817l-2.172 1.138a.392 .392 0 0 1 -.568 -.41l.415 -2.411l-1.757 -1.707a.389 .389 0 0 1 .217 -.665l2.428 -.352l1.086 -2.193a.392 .392 0 0 1 .702 0l1.086 2.193l2.428 .352a.39 .39 0 0 1 .217 .665l-1.757 1.707l.414 2.41a.39 .39 0 0 1 -.567 .411l-2.172 -1.138z" />
                </svg>
                <div class="Aprender">
                    <p>Aprende a tu ritmo</p>
                </div>
                </div>
                <a class="boton" href="tutorial.php">Tutorials</a>
        </div>
    </section>
<main class="contenedor sombra">
        <h4>Mi contenido </h4>
        <div class="micontenido">

            <section class="contenido">
                <h3>Cursos</h3>
            <div class="icono">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-certificate" width="84" height="84" viewBox="0 0 24 24" stroke-width="1.5" stroke="#007988" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M15 15m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                    <path d="M13 17.5v4.5l2 -1.5l2 1.5v-4.5" />
                    <path d="M10 19h-5a2 2 0 0 1 -2 -2v-10c0 -1.1 .9 -2 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -1 1.73" />
                    <path d="M6 9l12 0" />
                    <path d="M6 12l3 0" />
                    <path d="M6 15l2 0" />
                </svg >
            </div>
                <p> Aspernatur, veniam eius.</p>
            </section>

            <section class="contenido">
                <h3>Tutoriales</h3>
                <div class="icono">

                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-books" width="84" height="84" viewBox="0 0 24 24" stroke-width="1.5" stroke="#007988" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M5 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />
                    <path d="M9 4m0 1a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v14a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1z" />
                    <path d="M5 8h4" />
                    <path d="M9 16h4" />
                    <path d="M13.803 4.56l2.184 -.53c.562 -.135 1.133 .19 1.282 .732l3.695 13.418a1.02 1.02 0 0 1 -.634 1.219l-.133 .041l-2.184 .53c-.562 .135 -1.133 -.19 -1.282 -.732l-3.695 -13.418a1.02 1.02 0 0 1 .634 -1.219l.133 -.041z" />
                    <path d="M14 9l4 -1" />
                    <path d="M16 16l3.923 -.98" />
                </svg>
                </div>
                <p>Lorem, ipsum libero eius.</p>
            </section class="contenido"> 


            <section class="contenido">
                <h3>Blog</h3>
                <div class="icono">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-album" width="84" height="84" viewBox="0 0 24 24" stroke-width="1.5" stroke="#007988" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                        <path d="M12 4v7l2 -2l2 2v-7"/>
                    </svg>
                </div>
                <p>Ipsum Repellat iste, veniam.</p>

            </section>

        </div><!--.micontenido-->
        
    </main>
    <?php
    include 'footer.php';
?>