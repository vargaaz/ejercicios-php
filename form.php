

<html>
<script type="text/javascript">
    function validar() {
        //obteniendo el valor que se puso en campo text del formulario
        miCampoTexto = document.getElementById("nombre").value;
        //la condición
        if (miCampoTexto.length == 0) {
            alert("Nel");
            aler
            return false;
        }
        return true;
    }
</script>

<form action="accion.php" onsubmit="return validar()" method="post">
 <p>Su nombre: <input type="text" id="nombre" name="nombre" /></p>
 <p>Su edad: <input type="text" name="edad" /></p>
 <p>Su direccion: <input type="text" name="dir" /></p>
 <p><input type="submit" /></p>
</form>

</html>