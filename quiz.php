<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><b><pre>
        pseudo kod <br>
        <p>
    JEŚLI REQUEST_METHOD to POST
    USTAW wynik na 0
    STWÓRZ tablicę z poprawnymi odpowiedziami
    JEŚLI istnieje $_POST['q1'] I $_POST['q2']
    JEŚLI $_POST['q1'] jest równe poprawnej odpowiedzi na Q1
    ZWIĘKSZ wynik o 1
    W PRZECIWNYM RAZIE
    WYŚWIETL "Błędna odpowiedź na pytanie 1"
    JEŚLI $_POST['q2'] jest równe poprawnej odpowiedzi na Q2
    ZWIĘKSZ wynik o 1
    W PRZECIWNYM RAZIE
    WYŚWIETL "Błędna odpowiedź na pytanie 2"
    W PRZECIWNYM RAZIE
    WYŚWIETL "Proszę odpowiedzieć na wszystkie pytania"
    WYŚWIETL "Twój wynik wynosi wynik"
    OBLICZ i WYŚWIETL "Procent poprawnych odpowiedzi: (wynik / liczba wszystkich pytań) * 100"
    W PRZECIWNYM RAZIE
    WYŚWIETL "Proszę odpowiedzieć na wszystkie pytania"
    </p>
    </pre></b></h3>
    <h1>Welcome to Quiz</h1>
    <hr>

    <form action="quiz.php" method="post">
        <label for="q1">What is the capital of France</label><br>
            <input type="radio" name="q1" id="q1" value="Paris"> Paris<br>        
            <input type="radio" name="q1" id="q1" value="Berlin"> Berlin<br>        
            <input type="radio" name="q1" id="q1" value="Warszawa"> Warszawa<br>        
            <input type="radio" name="q1" id="q1" value="Praga"> Praga<br>
        <label for="q2">Who painted the Mona Lisa ?</label><br>
            <input type="radio" name="q2" id="q2" value="Salvador"> Salvador D<br>        
            <input type="radio" name="q2" id="q2" value="Pablo"> Pablo<br>        
            <input type="radio" name="q2" id="q2" value="Vincet"> Vincent<br>        
            <input type="radio" name="q2" id="q2" value="Leonardo"> Leonardo <br>
        <input type="submit" value="submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $score = 0;
            $answer = array("q1" => "Paris", "q2" => "Leonardo");

            if ( isset($_POST['q1']) && isset($_POST['q2']) ) {
                if( $_POST['q1'] == $answer['q1']){
                    $score++;
                } else {
                    echo"<p>Bad answer Question 1</p> ";
                }
                if( $_POST['q2'] == $answer['q2'] ){
                    $score++;
                } else {
                    echo"<p>Bad answer Question 2</p> ";
                }
               } else {
                echo "<p> Please answer all the question</p>";
            }
        } 
        
        echo "<p>Your score is " .$score. " </p>";
        echo ( $score / count($answer) )*100 . " %";
    ?>


</body>
</html>
