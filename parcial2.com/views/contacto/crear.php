<hr>
<div class="container">
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

            <form action="<?php  echo "index.php?c=". seg::codificar("contacto")."&m=". seg::codificar("mostrar").""?>" method="post">

                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="exampleInputText1" aria-describedby="textHelp" name="txtnombre_contacto">
                    <div id="textHelp" class="form-text"></div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label"> Correo </label>
                    <input type="email" class="form-control" id="exampleInputText1" name="txtcorreo_contacto" aria-describedby="textHelp">
                    <div id="textHelp" class="form-text"></div>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Comentario</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="txtcomentario_contacto"></textarea>
                    <div id="textHelp" class="form-text"></div>
                </div>

                <input type="hidden" value="<?php echo seg::generarToken() ?>" name="token">

                <button type="submit" class="btn btn-success">Enviar</button>
                <button type="reset" class="btn btn-warning">Borrar datos</button>


            </form>

        </div>

    </div>
</div>
<hr>
<br>
<br>
<br>
<br>