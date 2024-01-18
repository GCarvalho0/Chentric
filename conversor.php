<head>
</head>
<body>
<h1>Conversor de Unidades</h1>

<?php
    // Função para converter Celsius para Fahrenheit
    function celsiusToFahrenheit($celsius) {
        return ($celsius * 9/5) + 32;
    }

    // Função para converter Fahrenheit para Celsius
    function fahrenheitToCelsius($fahrenheit) {
        return ($fahrenheit - 32) * 5/9;
    }

    // Função para converter Quilômetros para Milhas
    function kilometersToMiles($kilometers) {
        return $kilometers * 0.621371;
    }

    // Função para converter Milhas para Quilômetros
    function milesToKilometers($miles) {
        return $miles / 0.621371;
    }

    // Função para converter Quilogramas para Libras
    function kilogramsToPounds($kilograms) {
        return $kilograms * 2.20462;
    }

    // Função para converter Libras para Quilogramas
    function poundsToKilograms($pounds) {
        return $pounds / 2.20462;
    }

    // Processar o formulário quando enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor = $_POST["valor"];
        $fromUnit = $_POST["fromUnit"];
        $toUnit = $_POST["toUnit"];