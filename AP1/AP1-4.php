<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AP1-4</title>
</head>
<body>
    <form  method="post" action="">
        <label for="figura">Elige la figura: </label><br>
        <select id ="figura" name="figura" >
            <option value="triangulo">Triángulo</option>
            <option value="rectangulo">Rectangulo</option>
            <option value="circulo">Circulo</option>
        </select>
        <br><br>

        <div id="valores">
            <label for="base">Base: </label>
            <input type="number" id="base" name="base" step="0.1">
            <br><br>
            <label for="altura">Altura:</label>
            <input type="number" id="altura" name="altura" step="0.1">
            <br><br>
            <label for="radio" >Radio: </label>
            <input type="number" id="radio" name="radio" step="0.1" value="0">
        </div>

        <input type="submit" value="Calcular Área">
    </form>

    <?php

    //area triángulo
    function calcularAreaTriangulo($base, $altura) {
        return ($base * $altura)/ 2;
    }

    //area Rectangulo
    function calcularAreaRectangulo($base,$altura) {
        return $base * $altura;
    }

    //área Circulo
    function calcularAreaCirculo ($radio) {
        return pi()* pow($radio,2);
    }

    if($_SERVER["REQUEST_METHOD"] =="POST") {
        //recoger valores
        $figura= $_POST['figura'];
        $base = $_POST['base'] ?? 0;  // ternaria por si no metemos valores
        $altura = $_POST['altura'] ?? 0;
        $radio = $_POST['radio'] ?? 0;

        switch ($figura){
            case "triangulo";
                $area = calcularAreaTriangulo($base,$altura);
                echo "<h3>El área del triangulo es: $area</h3>";
                break;
            case "rectangulo";
                $area = calcularAreaRectangulo($base,$altura);
                echo "<h3>El área del Rectangulo es: $area</h3>";
                break;
            case "circulo";
                $area = calcularAreaCirculo($radio);
                echo "<h3>El área del Circulo es: $area </h3>";
                break;
            default:
                echo "<h3>Opción no válida</h3>";
                break;
        }
    }
    ?>
</body>
</html>
