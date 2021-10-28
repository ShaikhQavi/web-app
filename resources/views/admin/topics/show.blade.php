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
                            <a class="nav-link active" id="categories-tab" data-toggle="tab" href="#categories" role="tab" aria-controls="categories" aria-selected="true">Categories</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>id</td>
                                    <td>{{$topic->id}}</td>
                                </tr>
                                <tr>
                                    <td>Title</td>
                                    <td>{{$topic->title}}</td>
                                </tr>
                                <tr>
                                    <td>Category</td>
                                    <td>{{$topic->category->name}}</td>
                                </tr>
                                <tr>
                                    <td>User id</td>
                                    <td>{{$topic->user_id}}</td>
                                </tr>
                                <tr>
                                    <td>Content</td>
                                    <td>{{$topic->content}}</td>
                                </tr>
                            </thead>
                        </table>
                        <a class="btn btn-primary" href="{{route('admin.index')}}">Back</a>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>