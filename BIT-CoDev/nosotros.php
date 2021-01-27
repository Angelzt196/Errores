<?php require_once 'layout/header.php'; ?>

<br> 
<div class="container shadow rounded bg-white">
    <h1 class="text-center">Acerca de nosotros</h1>
    
    <div class="d-flex justify-content-center">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Misión</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Visión</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Valores de la empresa</a>
            </li>
        </ul>
    </div>
    <br>
    <div class="d-flex justify-content-center">
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <p class="text-justify">Crear y desarrollar las soluciones digitales que tu negocio necesita, para potenciar al máximo las capacidades del mismo, y así tener la certeza y la posperidad del mismo. Dándote un acompañamiento en cada paso que des.</p>
            </div>

            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <p class="text-justify">Ser la empresa líder en cuanto la innovación y mejoramiento de los negocios de la región, así como ser la solución a tus necesidades tecnológicas.</p>
            </div>

            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <p class="font-italic text-justify">Los valores que nos representan son los siguientes:</p>
                <p class="font-weight-bold text-justify">1. Honestidad</p>
                <p class="text-justify">La transparencia, sinceridad y franqueza, son valores que actualmente el público no solamente desea para las empresas, las exige.</p>

                <p class="font-weight-bold text-justify">2. Calidad</p>
                <p class="text-justify text-justify">Vivimos en un mundo donde todos dicen que tienen los mejores productos del mercado. Pero una cosa es afirmarlo y la otra es garantizado.</p>
                <p class="text-justify">Los productos deben cumplir con los parámetros establecidos y promedios, que solo pueden ser cercanos a la perfección.</p>

                <p class="font-weight-bold text-justify">3. Puntualidad</p>
                <p class="text-justify">No solo estamos hablando de ser respetuoso con los plazos de entrega de mercancia. También darle la importancia a la puntualidad a la hora de la llegada y salida.</p>
                <p class="text-justify">Asi mismo, tener especial consideración con el tiempo de los clientes, proovedores y socios en casos de reuniones y pagos de facturas.</p>

                <p class="font-weight-bold text-justify">4. Pasión</p>
                <p class="text-justify">Pocas cosas atraen más a clientes que ver personas que disfrutan lo que hacen. Por ello, el tener la pasión como valor de una empresa, servirá para crear y mantener la emocionalidad al tope, y transmitir esa motivavión al exterior.</p>

                <p class="font-weight-bold text-justify">5. Competitividad</p>
                <p class="text-justify">Tener la meta clara que sólo te puedes conformar estando en la cima, es un valor que muy pocos logran llevar a la práctica.</p>
                <p class="text-justify">Tu empresa solo puede ser la mejor, si se exige lo mejor. Cuando esto sucede, la moral, la pasión y la motivación nunca faltarán y el crecimiento de la organización es una consecuencia natural.</p>

                <p class="font-weight-bold text-justify">6. Trabajo en equipo</p>
                <p class="text-justify">¿Cúando has visto un equipo deportivo ganar campeonatos solamente por individualidades? <span class="font-weight-bold">Posiblemente nunca</span></p>
                <p class="text-justify">La gestión de trabajo surge como una necesidad importante en ambientes corporativos donde la tolerancia, respeto, la admiración y la consideración son las prioridades.</p>
                <p class="text-justify">Por eso no llega hasta aquí, los valores de una empresa están ligadas a los principios personales de las cabezas de la compañia. Por ello, también, pueden considerarse valores como libertad, resiliencia, lealtad, solidaridad, entre otros.</p>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!-- Button trigger modal -->
    <hr>
    <p class="font-weight-bold">¿Desea que le enviemos noticias sobre nuestras ofertas y noticias? <span class="font-italic">Da click en el siguiente botón</span></p>
    <button type="button" style="margin-bottom: 15px;" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
    Noticias
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Suscribete para más noticias</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div> 
            <div class="modal-body">
                <form method="POST" id="form1" action="javascript:Enviar();">
                    <div class="form-group">
                        <label for="email">Correo:</label>
                        <input type="email" name="email" id="emailadd" class="form-control" placeholder="Tú correo electronico...">
                        <small class="form-text text-muted">Nunca compartiremos tu correo
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
    </div>
</div>
<br>

<?php require_once 'layout/footer.php'; ?>