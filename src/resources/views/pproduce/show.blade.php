<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PProduce</title>
</head>

{{-- 本来はこういう表記にしたい。Bladeにif分や条件が増えるとネストが増えて見づらい形になるため --}}
{{-- 見た目にif文はなるべく持ち込みたくない、条件分岐はController等でほぼ制御できるはずであり色を変えたいための三項演算子とかなら許容 --}}
<x-app-layout>
    <body>
        <h2 style="font-weight: bold;">Produces</h2>
        @foreach ($pproduces as $pproduce)
            <p>
                {{ $pproduce->name }}
            </p>
        @endforeach

        <h2 style="font-weight: bold;">Produce Questions</h2>
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
    </body>
</x-app-layout>

</html>
