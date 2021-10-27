<div class="tab-pane fade show active" id="categories" role="tabpanel" aria-labelledby="categories-tab">
    <div class="row">
        <div class="col-12">
            <form action="{{route('categories.store')}}" method="POST">
                @Csrf
                <div class="form-group col-md-6 mt-4">
                    <label for="">Name</label>
                    <input type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Enter Category Name.</small>
                </div>
                <div class="form-group col-md-6 mt-4">
                  <label for="">Description</label>
                  <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                  <small id="helpId" class="text-muted">Enter Description For Category.</small>
                </div>
                <div class="form-group col-md-6 mt-4">
                    <button class="btn btn-success">Submit</button>
                </div>    
            </form>
        </div>
        <div class="col-12">
            @include('admin.categories.index')
        </div>
    </div>
    
</div>