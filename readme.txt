# Support Desk Application

The live version of this app is hosted at https://24cetm74bi66pp.uoswebspace.co.uk/supportdesk/).

##set up instructions for developers
1. Change the values for database credentials in the me() function of Classes.php.
2. Use the query in reports.sql to create the reports table.

##instructions for using the live app
1. Visit https://24cetm74bi66pp.uoswebspace.co.uk/supportdesk/.
2. For demonstration purposes, the admin username is "admin" while the password is "Admin.2024"


## Features

1. User Reporting: Users can report IT issues using a form.
2. Report Management: Technicians can view a list of reported issues.
3. Status Updates: Technicians can switch issues from resolved to unresolved, and vice versa.
4. Access Control: PHP sessions ensure that only logged-in admins have access to reported issues.

## Technologies Used

- Object Oriented PHP: on the back end
- MySQL: For database management
- JavaScript: For client-side scripting
- CSS: For styling the application
- HTML: For the structure of the web pages

## Application Files

- `admin.php`: Admin panel for choosing which issues to view.
- `classes.php`: Contains class definitions for database operations.
- `display.php`: Displays issues based on their status.
- `index.html`: Main page for reporting issues.
- `issues.php`: Processes reported issues and stores them in the database.
- `login.php`: Admin login page.
- `readme.txt`: This README file.
- `reports.sql`: SQL file for setting up the database.
- `scripts.js`: Contains JavaScript functions for form validation.
- `styles.css`: CSS file for styling the web pages.
- `tests.xlss`: Manual tests carried out before deploying.
- `update.php`: Updates the status of issues.
- `welcome.php`: Processes login requests.

## Future Improvements

1. User Management: Implement a separate table for users, allowing each admin to have their own username and password.
2. Password Security: Use password hashing methods for secure password storage.
3. Email Notifications: Include a feature that automatically emails users when there is a change in the status of their reported issues.
4. Error handling: Create various methods of handling both system and user errors, such as entering duplicate reports.
5. Error reporting: Create a log where errors are automatically reported.