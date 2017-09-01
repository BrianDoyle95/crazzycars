
     ,-----.,--.                  ,--. ,---.   ,--.,------.  ,------.
    '  .--./|  | ,---. ,--.,--. ,-|  || o   \  |  ||  .-.  \ |  .---'
    |  |    |  || .-. ||  ||  |' .-. |`..'  |  |  ||  |  \  :|  `--, 
    '  '--'\|  |' '-' ''  ''  '\ `-' | .'  /   |  ||  '--'  /|  `---.
     `-----'`--' `---'  `----'  `---'  `--'    `--'`-------' `------'
    ----------------------------------------------------------------- 


Hi there! Welcome to Cloud9 IDE!

To get you started, we have created a small hello world application.

1) Open the hello-world.php file

2) Follow the run instructions in the file's comments

3) If you want to look at the Apache logs, check out ~/lib/apache2/log

And that's all there is to it! Just have fun. Go ahead and edit the code, 
or add new files. It's all up to you! 

Happy coding!
The Cloud9 IDE team


## Support & Documentation

Visit http://docs.c9.io for support, or to learn more about using Cloud9 IDE. 
To watch some training videos, visit http://www.youtube.com/user/c9ide


 https://car-rental-anjit11.c9users.io/phpmyadmin
 
 username: anjit11
 
 
 
 
 select 

   -- add other columns as needed
   (a.lastname,a.gender) 
=  (b.lastname,a.gender) as similar,


  a.lastname as a_lastname,
  a.firstname as a_firstname,
  a.age as a_age,

  'x' as x,

  b.lastname as b_lastname,
  b.firstname as b_firstname,
  b.age as b_age



from person a
cross join person b
where a.id = 1 and b.id = 2