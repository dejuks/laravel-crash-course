<x-layout>
    <form action="{{url('save')}}" method="post">
@csrf
        <div class="mb-3">
        <textarea name="note" class="form-control" placeholder="Enter Notes" cols="10" rows="20" ></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-layout>
