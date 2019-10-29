<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
{{$content['name']}}
{{$content['code']}}
<a href="{{route('rest.pass',$content['email'])}}">hrel</a>
</body>
</html>