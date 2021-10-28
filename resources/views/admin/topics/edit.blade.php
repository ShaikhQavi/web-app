<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Admin Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="topics-tab" data-toggle="tab" href="#topics" role="tab" aria-controls="topics" aria-selected="true">Topics</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <form action="{{route('topics.update', $topic->id)}}" method="POST">
                            @method('PUT')
                            @Csrf
                            <div class="row" style="margin-left:0px !important; margin-right:0px !important">
                        
                                <div class="form-group col-md-6 mt-4">
                                    <label for="title">Title</label>
                                    <input type="text"
                                        class="form-control" name="title" id="" aria-describedby="helpId" value="{{$topic->title}}" placeholder="">
                                    <small id="helpId"  class="form-text text-muted">Enter Topic Name.</small>
                                </div>
                                <div class="form-group col-md-6 mt-4">
                                    <label for="name">Category</label>
                                    <select name="category_id"  class="form-control" id="">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    <small id="helpId"  class="form-text text-muted">Select Category</small>
                                </div>
                                <div class="form-group col-md-6 mt-4">
                                    <label for="content">Content</label>
                                    <textarea class="form-control" name="content" id="" cols="30" rows="10">{{$topic->content}}</textarea>
                                    <small id="helpId" class="text-muted">Enter Content For Topic.</small>
                                </div>        
                        </div>
                        <div class="form-group col-md-6 mt-4">
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                    </form>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>