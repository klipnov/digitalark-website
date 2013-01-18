<!DOCTYPE html>
<html lang="en">
	<head>
		<title>DigitalArk</title>
		{{Asset::styles()}}
		{{Asset::scripts()}}
	</head>

	<body>
		<div class="container">
                <div style="margin:auto auto; width:495px">
                	
                	@yield('logo')

                	@yield('carousel')

                	@yield('content')

                </div>
		</div>
	</body>
</html>