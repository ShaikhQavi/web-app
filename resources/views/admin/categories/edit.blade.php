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
                        <form action="{{route('categories.update', $category->id)}}" method="POST">
                            @method('PUT')
                            @Csrf
                            
                            <div class="form-group col-md-6 mt-4">
                                <label for="">Name</label>
                                <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId" value="{{$category->name}}">
                                <small id="helpId" class="text-muted">Enter Category Name.</small>
                            </div>
                            <div class="form-group col-md-6 mt-4">
                              <label for="">Description</label>
                              <textarea class="form-control" name="description" id="" cols="30" rows="10">{{$category->description}}</textarea>
                              <small id="helpId" class="text-muted">Enter Description For Category.</small>
                            </div>
                            <div class="form-group col-md-6 mt-4">
                                <button class="btn btn-success">Submit</button>
                            </div>    
                        </form>
                        <a class="btn btn-primary" href="{{route('admin.index')}}">Back</a>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>