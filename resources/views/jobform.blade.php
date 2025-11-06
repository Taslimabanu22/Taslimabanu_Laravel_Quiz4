<!-- resources/views/jobrequest_list.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Job Requests List</title>
</head>
<body>
<h2>All Job Requests</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Postal Code</th>
        <th>Phone</th>
        <th>Job</th>
    </tr>
    @foreach($jobrequests as $request)
    <tr>
        <td>{{ $request->id }}</td>
        <td>{{ $request->fullname }}</td>
        <td>{{ $request->email }}</td>
        <td>{{ $request->address }}</td>
        <td>{{ $request->postalcode }}</td>
        <td>{{ $request->phone }}</td>
        <td>{{ $request->job }}</td>
    </tr>
    @endforeach
</table>
</body>
</html>
