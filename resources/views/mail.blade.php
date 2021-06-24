<!DOCTYPE html>
<html>
<head>
	<title>การเก็บข้อมูลผู้ใช้</title>
</head>
<body>

	<p>มีผู้ใช้ส่งข้อมูลหาคุณ  </p>
	<ul>
		<li>
			ชื่อ : {{ $name }}. 
		</li>
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