<?PHP $path = isset($path) ? $path : ""; ?>

<div id = "nav"> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="<?PHP echo $path; ?>index.php">| Home |<span class="sr-only"></span></a>
            <a class="nav-item nav-link" href="<?PHP echo $path; ?>petprofiles.php"> Pet Profiles |</a>
            <a class="nav-item nav-link" href="<?PHP echo $path; ?>lost.php"> Lost |</a>
            <a class="nav-item nav-link" href="<?PHP echo $path; ?>found.php"> Found |</a>
            <a class="nav-item nav-link" href="<?PHP echo $path; ?>petapplications.php"> Pet Applications |</a>
            <form action = 'search.php' method = "post" style="display: inline;">
                <input type= "text" placeholder= "Pet Name" name = "term">
                <input type= "submit" value="Search">
            </form>
        </div>
    </nav>
</div>