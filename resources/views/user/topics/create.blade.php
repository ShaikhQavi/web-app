<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('topics') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="card " style="width: 100%">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <form action="{{route('topics.store')}}" method="POST" style="width:100%;">
                                        @Csrf
                                        <div class="row" style="margin-left:0px !important; margin-right:0px !important">
                                            
                                                <div class="form-group col-md-6 mt-4">
                                                    <label for="title">Title</label>
                                                    <input type="text"
                                                        class="form-control" name="title" id="" aria-describedby="helpId" placeholder="">
                                                    <small id="helpId" class="form-text text-muted">Enter Topic Name.</small>
                                                </div>
                                                <div class="form-group col-md-6 mt-4">
                                                    <label for="name">Category</label>
                                                    <select name="category_id" class="form-control" id="">
                                                        @foreach($categories as $category)
                                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                        @endforeach
                                                    </select>
                                                    <small id="helpId"  class="form-text text-muted">Select Category</small>
                                                </div>
                                                </div>
                                                <div class="form-group col-md-6 mt-4">
                                                    <label for="content">Content</label>
                                                    <textarea class="form-control" name="content" id="" cols="30" rows="10"></textarea>
                                                    <small id="helpId" class="text-muted">Enter Content For Topic.</small>
                                                </div>        
                                        </div>
                                        <div class="form-group col-md-6 mt-4">
                                            <button class="btn btn-success" type="submit" style="margin-left: 15px;">Submit</button>
                                        </div>
                                    </form>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>