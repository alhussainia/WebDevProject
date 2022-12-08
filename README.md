# WebDevProject

Introduction to the project: This a website for the Elizabethtown College students. It will have pet profiles for all of the emotional support and assistance animals. There will also be a page for lost and found pets on campus grounds. This will be used by Elizabethtown College students to post their animals to in the case of them being lost/found somewhere on campus, so other students can be on the lookout and help reunite these pets with their owners. 

Introduction to the website: It is created using Visual Studio code, writing in php, js, and css for stylization. The database was created on mysql and stores the pet profiles that were created. An API was created to display a pet spotlight on the home page and change every time the page is clicked on or refreshed. 

How MySQL Database was used: Data was created on the petapplications page and imported into the MySQL database using the ER Model that was originally created earlier in the semester

Instruction on setup of the project/website/application on local machine: 
1. Project was created on xampp and htdocs folder 
2. Project was connected to github and shared with team members
3. Set up files to create the site
4. Created ER Model 
5. Created home page (index)
6. Styled site how we liked
7. Created meeting minutes for all team meetings
8. Created navbar, petprofiles, lost, found, edited home page 
9. Added all necessary information to each page
10. Created API
11. Created Database using MySQL
12. Edited/added pages
13. Finalized website 
14. Created powerpoint 
15. Presented our website 

Website URL: https://webdev-370920.wl.r.appspot.com/

Documentation on APIs: 
src/getpet.php
Request type: GET
Request parameters: name - the name of the pet that you want data for or 'all' to get an array of all pet data
Response type: json data about the pet including name, owner, image, and fact
Example: The pet spotlight on the homepage of our website uses the api
Example 2: input - getpet.php?name=Kyra
           output - {"name":"Kyra","owner":"Kelsey Knappenberger","image":"imgs\/Kyra.jpg","fact":"Kyra has been featured on Etown's newspaper The Etownian twice. \r\n Both times the authors have mentioned her love for hiding."}