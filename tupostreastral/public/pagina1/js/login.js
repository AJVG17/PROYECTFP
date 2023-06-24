
const $linkTabla = link("http://127.0.0.1:5500/tabla.html")
$is.click(function() {
    if ($usuario == "lpm" && $clave=="123"){
       open($linkTabla)

    }else{
        $usuario = ""
        $clave==""
    }
});
