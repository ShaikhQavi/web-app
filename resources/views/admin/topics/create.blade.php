<div class="tab-pane fade" id="topics" role="tabpanel" aria-labelledby="topics-tab">
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
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
            </form>    
        </div>
        <div class="col-12">
            @include('admin.topics.index')
        </div>
    </div>
</div>
