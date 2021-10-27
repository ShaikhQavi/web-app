<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
         <td>{{$category->id}}</td>
         <td>{{$category->name}}</td>
         <td>{{$category->description}}</td>
         <td>
             <a class="fa fa-eye" href="{{route('categories.show', $category->id)}}"></a>
             <a class="fa fa-pencil" href="{{route('categories.edit', $category->id)}}"></a>
             <form action="{{route('categories.destroy', $category->id)}}" method="POST">
                @method('DELETE')
                @Csrf
                <button type="submit" class="fa fa-trash" style="background:none; color: red;"></button>
            </form>
        </td>
        </tr>
            
        @endforeach
        
    </tbody>
</table>