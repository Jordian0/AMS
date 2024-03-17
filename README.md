
# ATD
Our attendance marking system is a comprehensive solution designed to streamline the process of recording attendance in various educational or organizational settings. Built using JavaScript, HTML, CSS, and PHP, this system offers an intuitive interface for both administrators and users. With its user-friendly design, it simplifies attendance tracking, allowing users to mark their presence efficiently.

This system serves a variety of use cases, including classrooms, meetings, workshops, and conferences. Administrators can effortlessly manage attendance records, track attendance trends, and generate reports for analysis. Users benefit from the convenience of marking their attendance electronically, eliminating the need for traditional paper-based methods.

By leveraging modern web technologies, our attendance marking system enhances efficiency, accuracy, and accessibility, ultimately improving the overall attendance management process for organizations and educational institutions alike.


<!-- TOC -->
* [ATD](#atd)
  * [Directory Structure](#directory-structure)
  * [File system](#file-system)
  * [References](#references)
<!-- TOC -->


## Directory Structure
we've outlined the folder structure to provide a clear overview of how the project is organized. This structure helps developers navigate through different components efficiently and understand where specific functionalities are located. Below, you'll find a brief description of each folder to guide you through the project's architecture.
```
.
├── api_files
│   ├── api
│   │   ├── students
│   │   │   └── getstudents.php
│   │   └── timetable
│   │       ├── readsubject.php
│   │       └── readtime.php
│   ├── config
│   │   └── Database.php
│   └── models
│       ├── Students.php
│       └── TimeSlot.php
├── Images
│   ├── database-design.png
│   ├── Desktop - 1.png
│   ├── Desktop - 2.png
│   ├── Desktop - 3.png
│   └── Desktop - 4.png
├── index.php
├── js
│   ├── apstatus.js
│   ├── attend.js
│   ├── login.js
│   ├── student.js
│   ├── subject.js
│   └── timetable.js
├── media
│   └── images
│       ├── icon.png
│       └── sage.png
├── POST
│   ├── form.css
│   ├── index.php
│   ├── insert.php
│   ├── sql_message.php
│   └── validate.js
├── public
│   ├── apstatus.php
│   ├── attend.php
│   └── timet.php
├── README.md
├── sql
│   ├── attend_schema_data.sql
│   └── insert_data.sql
├── src
│   ├── logout.php
│   ├── markAttend.php
│   ├── timeSlot.php
│   └── validateLogin.php
└── style
    ├── atstatus_pa.css
    ├── attend_style.css
    ├── default.css
    ├── login_style.css
    └── time_slot.cs
```

<details>
  <summary><b>Details about directory structure</b></summary>

| Dir & sub-dir        | Description                                                                                            |
|----------------------|--------------------------------------------------------------------------------------------------------|
| api_files            | Contains the files for the API                                                                         |
| api_files/config     | Contains configuration files necessary for setting up the API, such as database credentials            |
| api_files/models     | Holds PHP files defining data structures and interactions with the database.                           |
| api_files/controller | Houses PHP files responsible for handling incoming requests, processing data, and generating responses. |
| .htaccess            | Configuration file for Apache web server, used for URL rewriting and other server-level settings.      |
| Images               | Images of the project.                                                                                 |
| js                   | Javascript files for the project                                                                       |
| media                | Images used in the project.                                                                            |
| POST                 | Contains the fiels for posting the data into the student database.                                     |
| public               | PHP files that are publicly accessible through webpage.                                                |
| sql                  | Schema for the SQL database with sample data entries.                                                  |
| src                  | Contains PHP helper files that assist in various tasks.                                                |
| style                | CSS files for the project.                                                                             |

</details>

<details>
  <summary><b>Details about file structure</b></summary>

| Files                | Description                                                                                            |
|----------------------|--------------------------------------------------------------------------------------------------------|
| api_files            | Contains the files for the API                                                                         |
| api_files/config     | Contains configuration files necessary for setting up the API, such as database credentials            |
| api_files/models     | Holds PHP files defining data structures and interactions with the database.                           |
| api_files/controller | Houses PHP files responsible for handling incoming requests, processing data, and generating responses. |
| .htaccess            | Configuration file for Apache web server, used for URL rewriting and other server-level settings.      |
| Images               | Images of the project.                                                                                 |
| js                   | Javascript files for the project                                                                       |
| media                | Images used in the project.                                                                            |
| POST                 | Contains the fiels for posting the data into the student database.                                     |
| public               | PHP files that are publicly accessible through webpage.                                                |
| sql                  | Schema for the SQL database with sample data entries.                                                  |
| src                  | Contains PHP helper files that assist in various tasks.                                                |
| style                | CSS files for the project.                                                                             |

</details>


## References
- [Login](https://www.w3schools.in/php/examples/php-login-without-using-database)
- [Logout](https://www.codewithharry.com/videos/php-tutorials-in-hindi-44/)
