</head>
<body>
     <header>
            
     <nav>
         <u1>
             <li><a href="{{ route('home') }}">Home</a></li>
             <li><a href="{{ route('about') }}">About</a></li>
             <li><a href="{{ route('contact') }}">contact</a></li>
     </u1>
  </nav>
</header>

<main>

  @yield('content') 
</main>

<footer>

</footer>
