
@extends("layouts.default")

@section("header")
<h2>This is header</h2>
@endsection

@section("maincontent")
<main>
    <h1>Fill the Form</h1>
    <form action="{{ route('FormSubmit') }}" method="post">
    @csrf
        <label for="fullname">Full Name: </label>
        <input type="text" name="fullname" id="fullname" placeholder="Enter Full Name">

        <button type="submit">Submit</button>
    </form>
</main>
@endsection

@section("footer")
    <h2>This is Footer</h2>
@endsection