
    <br/>
    <form method="POST" action="{{ url('admin') }}" enctype="multipart/form-data">
        @csrf 
        @include('admin.form-admin')
    </form>