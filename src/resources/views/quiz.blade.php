<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>quiz</title>
</head>

<x-app-layout>
    <body>
        @if (isset($quizzes))
        <h2>Quizzes</h2>
            @foreach ($quizzes as $quiz)
                <p>
                    {{ $quiz->name }}
                </p>
            @endforeach
        @endif

        @if (isset($questions))
        <h2>Questions</h2>
            @foreach ($questions as $question)
                <div>
                    <p>{{ $question->text }}</p>
                    <ul>
                        @foreach ($question->choices as $choice)
                            <li>{{ $choice->text }}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        @endif

        @if (isset($pproduces))
        <h2>Produces</h2>
            @foreach ($pproduces as $pproduce)
                <p>
                    {{ $pproduce->name }}
                </p>
            @endforeach
        @endif

        @if (isset($ppquestions))
        <h2>Produce Questions</h2>
            @foreach ($ppquestions as $ppquestion)
                <div>
                    <p>{{ $ppquestion->from }}</p>
                    <ul>
                        @foreach ($ppquestion->ppchoices as $ppchoice)
                            <li>{{ $ppchoice->text }}</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        @endif
    </body>
</x-app-layout>

</html>
