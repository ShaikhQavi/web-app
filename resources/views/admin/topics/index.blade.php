<table class="table">
    <thead>
        <tr>
            <th>id</th>
            <th>Title</th>
            <th>Content</th>
            <th>Category</th>
            <th>User</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($topics as $topic)
        <tr>
            <td>{{$topic->id}}</td>
            <td>{{$topic->title}}</td>
            <td>{{$topic->content}}</td>
            <td>{{$topic->category->name}}</td>
            <td>{{$topic->user_id}}</td>
            <td>
                <a class="fa fa-eye" href="{{route('topics.show', $topic->id)}}"></a>
                <a class="fa fa-pencil" href="{{route('topics.edit', $topic->id)}}"></a>
                <form action="{{route('topics.destroy', $topic->id)}}" method="POST">
                   @method('DELETE')
                   @Csrf
                   <button type="submit" class="fa fa-trash" style="background:none; color: red;"></button>
               </form>
           </td>
        </tr>
        @endforeach
        
    </tbody>
</table>