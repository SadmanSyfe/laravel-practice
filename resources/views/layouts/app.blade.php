<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.tailwindcss.com"></script>
	<title></title>
</head>
<body class="bg-gray-200">
	<nav class="p-6 bg-white flex justify-between mb-6">
		<ul class="flex items-center">
			<li>
				<a href="{{ route('home') }}" class="p-3 ">Home</a>
			</li>
			<li>
				<a href="{{ route('dashboard') }}" class="p-3 ">Dashboard</a>
			</li>
			<li>
				<a href="{{ route('posts')}}" class="p-3 ">Post</a>
			</li>			
		</ul>
		<ul class="flex items-center">
			{{-- @if(auth()->user()) --}}
			@auth
				<li>
					<a href="#" class="p-3 ">Syfe</a>
				</li>
				<li>
					<form action="{{ route('logout')}}" method="post" class="inline p-3">
						@csrf
						<button type="submit">Logout</button>
					</form>
				</li>
			@endauth			
			{{-- @else --}}
			@guest
				<li>
					<a href="{{ route('register') }}" class="p-3 ">Register</a>
				</li>
				<li>
					<a href="{{ route('login')}}" class="p-3 ">Login</a>
				</li>
			@endguest
			{{-- @endif --}}
		</ul>		
	</nav>
	@yield('content')
</body>
</html>