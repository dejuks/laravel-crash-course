<x-layout>
    <div class="row">
        @foreach($notes as $note)
        <div class="col-12 col-md-4" >
            <div class="card" >
                <div class="card-header" >
                    <h3>Note:{{$note->created_at}}</h3>
                </div>
                <div class="card-body" style="background-color: goldenrod" >
                    <p>{{Str::words($note->note,30)}}</p>
                    <div class="footer">
                        <a href="{{url('edit',$note)}}" class="btn btn-sm btn-success">Edit</a>
                        <a href="{{url('show',$note)}}" class="btn btn-sm btn-info">show</a>
                    </div>
                </div>

            </div>

        </div>
        @endforeach
    </div>
</x-layout>
