<div class="table-responsive">
    <table class="table" id="posts-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Title</th>
        <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                       <td>{{ $post->user_id }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->description }}</td>
                       <td class=" text-center">
                           {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'delete']) !!}
                           <div class='btn-group'>
                               <a href="{!! route('posts.show', [$post->id]) !!}" class='btn btn-light action-btn '><i class="fa fa-eye"></i></a>
                               <a href="{!! route('posts.edit', [$post->id]) !!}" class='btn btn-warning action-btn edit-btn'><i class="fa fa-edit"></i></a>
                               {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger action-btn delete-btn', 'onclick' => 'return confirm("Are you sure want to delete this record ?")']) !!}
                           </div>
                           {!! Form::close() !!}
                       </td>
                   </tr>
        @endforeach
        </tbody>
    </table>
</div>
