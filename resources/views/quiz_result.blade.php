<x-app-layout>
    <x-slot name="header">{{ $quiz->title }} Sonucu</x-slot>
    <div class="card">
        <div class="card-body">

            <div class="bg bg-light" style="margin-bottom:20px">
                <i class="fa fa-circle"></i> İşaretlediğin Şık<br>
                <i class="fa fa-check text-success"></i> Doğru Cevap<br>
                <i class="fa fa-times text-danger"></i> Yanlış Cevap<br>
            </div>

                @foreach($quiz->questions as $question)
                @if($question->correct_answer == $question->my_answer->answer)
                    <i class="fa fa-check text-success"></i>
                @else
                    <i class="fa fa-times text-danger"></i>
                @endif
                    <strong>{{ $loop->iteration }}.Soru - {{ $question->question }}</strong>

                @if($question->image)
                        <img src="{{asset($question->image)}}" class="img-responsive" style="width:50%">
                @endif



                    <div class="form-check mt-2" >  <!-- 1. Şık -->
                        @if('answer1' == $question->correct_answer)
                            <i class="fa fa-check text-success"></i>
                        @elseif('answer1' == $question->my_answer->answer )
                                <i class="fa fa-circle"></i>
                        @endif
                        <label class="form-check-label" for="quiz{{ $question->id }}1">
                            {{ $question->answer1 }}
                        </label>
                    </div>

                    <div class="form-check"> <!-- 2. Şık -->
                        @if('answer2' == $question->correct_answer)
                            <i class="fa fa-check text-success"></i>
                        @elseif('answer2' == $question->my_answer->answer )
                                <i class="fa fa-circle"></i>
                        @endif
                        <label class="form-check-label" for="quiz{{ $question->id }}2">
                            {{ $question->answer2 }}
                        </label>
                    </div>
                    <div class="form-check"> <!-- 3. Şık -->
                        @if('answer3' == $question->correct_answer)
                            <i class="fa fa-check text-success"></i>
                        @elseif('answer3' == $question->my_answer->answer )
                                <i class="fa fa-circle"></i>
                        @endif
                        <label class="form-check-label" for="quiz{{ $question->id }}3">
                            {{ $question->answer3 }}
                        </label>
                    </div>
                    <div class="form-check"> <!-- 4. Şık -->
                        @if('answer4' == $question->correct_answer)
                            <i class="fa fa-check text-success"></i>
                        @elseif('answer4' == $question->my_answer->answer )
                                <i class="fa fa-circle"></i>
                        @endif
                        <label class="form-check-label" for="quiz{{ $question->id }}4">
                            {{ $question->answer4 }}
                        </label>
                    </div>
                    @if(!$loop->last)
                        <hr>
                        @endif
                @endforeach
        </div>
    </div>
</x-app-layout>
