<x-theme title="">
    <h1>Create New staff Record</h1>
    <form method="POST" action="{{ url('/staff') }}" enctype="multipart/form-data" style="width:50%">
        @method('POST')
        @csrf

        @include ('staff.form')

        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Create">
        </div>

    </form>
</x-theme>