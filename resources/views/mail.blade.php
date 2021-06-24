<!DOCTYPE html>
<html>
<head>
	<title>การเก็บข้อมูลผู้ใช้</title>
</head>
<body>

	<p>มีการกรอกข้อมูลจากผู้ใช้ ชื่อ : {{ $name }}.</p>
	<ul>
		<li>
			เลือกรถแบบ : {{ $type }}. 
		</li>
		<li>
			เวลา  : {{ $time }}.
		</li>
		<li>
			เบอรืโทร : {{ $phone }}.
		</li>
	</ul>
</body>
</html>