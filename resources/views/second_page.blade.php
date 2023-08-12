{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Guest Data</h1>
        <table class="table">
            <tbody>
                <tr>
                    <td>First Name:</td>
                    <td>{{ $data['field1'] }}</td>
                </tr>
                <tr>
                    <td>Last Name:</td>
                    <td>{{ $filed2 }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection --}}



<!DOCTYPE html>
<html>
<head>
	<title>Display Data Example</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<div class="container mt-5">
		<div class="form-group">
			<label for="first-name">First Name:</label>
			<input type="text" class="form-control" id="first-name" placeholder="Enter your first name">
		</div>
		<div class="form-group">
			<label for="last-name">Last Name:</label>
			<input type="text" class="form-control" id="last-name" placeholder="Enter your last name">
		</div>
		<button type="button" class="btn btn-primary" onclick="showData()">Display Data</button>
	</div>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">First Name:</div>
					<div class="card-body" id="display-first-name"></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">Last Name:</div>
					<div class="card-body" id="display-last-name"></div>
				</div>
			</div>
		</div>
	</div>
	<script>
		function showData() {
			let firstName = document.getElementById("first-name").value;
			let lastName = document.getElementById("last-name").value;
			document.getElementById("display-first-name").innerHTML = firstName;
			document.getElementById("display-last-name").innerHTML = lastName;
		}
	</script>
</body>
</html>
