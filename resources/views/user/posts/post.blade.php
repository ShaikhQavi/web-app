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
                            <h4 class="card-title">Create Post</h4>
                        </div>
                        <form action="{{route('post.store')}}" method="POSt">
                            @csrf
                            <div class="form-group m-3">
                                <label for="">Content</label>
                                <textarea class="form-control" name="content" id="" cols="30" rows="10"></textarea>
                                <input type="number" name="topic_id" value="{{$topic_id}}" hidden>
                                <small id="helpId" class="text-muted">Enter Content for the Topic.</small><br>
                                <button type="submit" class="btn btn-success">Post</button>
                              </div>
                              
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>