<x-layout>
    <form action="{{url('update',$note->id)}}" method="post">
        @csrf
        @method('put')
        <div class="mb-3">
            <textarea name="note" class="form-control" placeholder="Enter Notes" cols="10" rows="20">
                {{$note->note}}
            </textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</x-layout>
