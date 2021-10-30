<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Post Your Ideas
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Topics</h4>
                        </div>
                        <ul class="list-group list-group-flush">
                            @foreach($topics as $topic)
                            <li class="list-group-item">
                                <a href="{{url('topic-posts', $topic->id)}}">
                                      {{$topic->title}}
                                </a> 
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
