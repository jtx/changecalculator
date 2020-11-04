# Code Challenge
So, here's the files to look at that I adjusted, this is a base laravel 8 install.

- app/Http/Controllers/ChangeController.php
    - Here's your input form and results, methods index() and show(). Doesn't follow ajax standards, but this is just a demo.
- app/Services/ChangeGenerator.php
    - Service to do the change calculations    
- routes/web.php
    - The routes for the controller
- resources/views/*
    - Some HTMl pages to plug your info in
    
    
