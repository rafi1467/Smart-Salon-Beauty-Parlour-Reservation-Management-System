<style>
.navbar {
    background-color: #ffffff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 50;
    height: 64px;
}
 
.navbar-container {
    margin: 0 auto;
    padding: 0 1rem;
}
 
.navbar-flex {
    display: flex;
    justify-content: space-between;
    align-items: center; /* VERTICALLY CENTER */
    height: 64px;
}
 
.navbar-div {
    display: flex;
    align-items: center;
}
 
a {
    font-size: 1.25rem;
    font-weight: 700;
    color: #1f2937;
    text-decoration: none;
}
 
a:hover {
    color: #4b5563;
}
 
.navbar-nav {
    display: block;
}
 
.navbar-nav ul {
    display: flex;
    align-items: center;
    gap: 2rem;
    margin: 0;
    padding: 0;
    list-style: none;
}
 
.navbar-nav a {
    color: #374151;
    text-decoration: none;
    padding: 0.5rem 0.75rem;
    border-radius: 0.375rem;
    font-size: 0.875rem;
    font-weight: 500;
    transition: color 0.3s;
}
 
.navbar-nav a:hover {
    color: #2563eb;
}
 
</style>


body {
    
    padding-top: 64px; 
    margin: 0; 
    font-family: Arial, sans-serif; 
    background-color: #f9fafb; 
}

.profile-section {
    display: flex;
    justify-content: center;
    padding: 3rem 1rem; 
}

.profile-pic {
    width: 150px;
    height: 150px;
    border-radius: 50%; 
    border: 4px solid #ffffff; 
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
    object-fit: cover; 
}
</style>
</head>
<body>

<nav class="navbar">
    <div class="navbar-container">
        <div class="navbar-flex">
            <div class="navbar-div">
                <a href="/">Nick-name</a>
            </div>
 
            <div class="navbar-nav">
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/">About</a></li>
                    <li><a href="/skills">Skills</a></li>
                    <li><a href="/">Projects</a></li>
                    <li><a href="/">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<div class="profile-section">
    <img src="
</div>

</body>
</html>