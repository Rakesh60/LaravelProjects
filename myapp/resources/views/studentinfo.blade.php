<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
  font-family: Arial, sans-serif;
}

table th {
  background-color: #34495e;
  color: #fff;
  font-weight: bold;
  padding: 12px;
  text-align: left;
  border-bottom: 2px solid #2c3e50;
}

table td {
  padding: 12px;
  text-align: left;
  border-bottom: 1px solid #2c3e50;
}

table tr:hover {
  background-color: #f2f2f2;
}

table .highlight {
  background-color: #ff7675;
  color: #fff;
}

table .success {
  background-color: #55efc4;
  color: #2c3e50;
}

table .warning {
  background-color: #fdcb6e;
  color: #2c3e50;
}

table .danger {
  background-color: #d63031;
  color: #fff;
}
</style>
</head>
<body>
<table >
    <tr>
        <th>id</th>
        <th>student</th>
        <th>age</th>
        <th>city</th>
    </tr>
    @foreach($ourdata as $data)
    <tr>
        <td>{{$data['id']}}</td>
        <td>{{$data['student_name']}}</td>
        <td>{{$data['age']}}</td>
        <td>{{$data['city']}}</td>
    </tr>
    @endforeach
</table>
</body>
</html>