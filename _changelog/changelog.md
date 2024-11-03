# changelog

**_15/10_** : Made a database table, filled it up with some
dummy data, added a model and a resource controller and made sure
the data from the database is shown in the view.

**_16/10_** : Added the create & show pages, information entered
into the create page is also stored into the database.
made css for what I have so far.

**_21/10_** : Last part of crud has been added, the edit page, it also
updates the info into the database.

**_22/10_** : Changed the css of the dashboard page and made an attempt
at fixing the profile edit page css but that proved to be quite difficult
as laravel added a lot of things I did not dare to touch.

Got the logout button to work on the homepage.

made a table for the tags, and added an admin role.

**_28/10_** : Managed to get the tags working!! Admin can also create new tags.

**_29/10_** : I have created the toggle function for the admin, and I have
added a search bar on the home page.

**_1/11_** : I have built the filter function for the ideas. Made sure the edit can't 
be reached if you did not write the character

**_2/11_** : Form validation for creating ideas, editing ideas and creating new tags has
been added

**_3/11_** : Deeper validation -> made it so you cannot edit your posts unless you've written at
least 5 of them. Also added middleware to avoid deep-linking as my previous method was a bit cursed.
