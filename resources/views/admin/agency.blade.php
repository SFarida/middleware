@extends('layouts.app')

@section('content')

<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
				<th><span>ID</span></th>
        		<th><span>Name</span></th>
        		<th colspan="2"><span>Action</span></th>
            </tr>
        </thead>
        <tbody>
            @foreach($agencies as $agency)
            <tr>
                <td class="lalign">{{$agency->id}}</td>
                <td>{{$agency->name}}</td>
                <td><a href="{{ action('AdminController@edit',$agency->id) }}" class="btn btn-primary">Edit</a></td>
                <td>
					<form action="{{ action('AdminController@destroy', $agency->id) }}" method="post">
                    	{{csrf_field()}}
                    	<input name="_method" type="hidden" value="DELETE">
                    	<button class="btn btn-danger" type="submit">Delete</button>
                	</form>
				</td>
            </tr>
            @endforeach
        </tbody>
    </table>
<div>
@endsection

