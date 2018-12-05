<!DOCTYPE html>
<html lang="en" dir="ltr">
	@include ("auth/principal/html/head")
	<body>
		@include ("auth/principal/html/header")
		@yield ('main')
		@include ("auth/principal/html/footer")
	</body>
</html>
