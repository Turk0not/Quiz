<x-app-layout>
    <x-slot name="header">{{ $quiz->title }}</x-slot>
    <div class="card">
        <div class="card-body">
            <p class="card-text">
                <div class="row">
                    <div class="col-md-4">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Soru Sayısı
                                <span class="badge badge-success badge-pill">{{$quiz->questions_count}}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Katılımcı Sayısı
                                <span class="badge badge-success badge-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Ortalama Puan
                                <span class="badge badge-success badge-pill">60</span>
                            </li>
                            @if($quiz->finished_at)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Son Katılım Tarihi
                                <span title="{{$quiz->finished_at}}" class="badge badge-secondary badge-pill">{{$quiz->finished_at->diffForHumans()}}</span>
                            </li>
                            @endif
                        </ul>
                    </div>
                    <div class="col-md-8">
                        {{ $quiz->description }}
                        <a href="{{ route('quiz.join',$quiz->slug) }}" class="btn btn-primary btn-block">Quize Katıl</a>
                    </div>
                </div>
            </p>
        </div>
    </div>
</x-app-layout>
