<table border=1>
	<tr>
		<td><b>Фамилия</b></td>
		<td>{{$data['surname']}}</td>
	</tr>
	<tr>
		<td><b>Имя</b></td>
		<td>{{$data['name']}}</td>
	</tr>
	<tr>
		<td><b>E-Mail</b></td>
		<td>{{$data['email']}}</td>
	</tr>
	<tr>
		<td><b>Образование</b></td>
		<td>{{config('myconfig.education')[$data['education']]}}</td>
	</tr>
</table>