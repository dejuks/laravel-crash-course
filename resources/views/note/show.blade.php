<x-layout>
    <div class="row">
            <div class="col-12 col-md-12" >
                <div class="card" >
                    <div class="card-header" >
                        <h3>Note:{{$note->created_at}}</h3>
                    </div>
                    <div class="card-body" style="background-color: goldenrod" >
                        <p>{{Str::words($note->note,30)}}</p>
                        <div class="footer">
                            <a href="{{url('edit',$note)}}" class="btn btn-sm btn-success">Edit</a>
{{--                            <a href="{{url('delete',$note)}}" class="btn btn-sm btn-danger">Delete</a>--}}
                       <form action="{{url('delete',$note)}}" class="d-inline" method="post">
                           @csrf
                           @method('delete')
                           <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                       </form>
                        </div>
                    </div>

                </div>

            </div>
    </div>
</x-layout>
