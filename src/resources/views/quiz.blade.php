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
        {{$question->name}}
    </p>
    @endforeach
    @foreach($choices as $choice)
    <p>
        {{$choice->name}}
    </p>
    @endforeach
</body>
</x-app-layout>
</html>
