<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz</title>
</head>

<x-app-layout>
<body>
    @foreach($quizzes as $quiz)
    <p>
        {{$quiz->name}}
    </p>
    @endforeach
    @foreach($questions as $question)
    <p>
        {{$question->text}}
    </p>
    @endforeach
    @foreach($choices as $choice)
    <p>
        {{$choice->text}}
    </p>
    @endforeach
    @foreach($pproduces as $pproduce)
    <p>
        {{$pproduce->name}}
    </p>
    @endforeach
    @foreach($ppquestions as $ppquestion)
    <p>
        {{$ppquestion->from}}
    </p>
    <p>
        {{$ppquestion->university}}
    </p>
    <p>
        {{$ppquestion->animal}}
    </p>
    @endforeach
    @foreach($ppchoices as $ppchoice)
    <p>
        {{$ppchoice->text}}
    </p>
    @endforeach
</body>
</x-app-layout>
</html>
