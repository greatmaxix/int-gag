#System Design Document

   #### Authors

   * Wade David Friedrichs
   * Mxolisi Silabela

   #### Team Members

   * Maksat
   * Amer 
   * Xolani
   * Kaddour
   * Ma mingke


### Introduction

    We will design Int-Gag using Php, Laravel with a mysql database. We will use html/css to design a nice looking interface posts in
    the middle of the page with ample space on either side for later added features. The tables in the database should hold; 

    #### 1. Users 
    * id,
    * usernames, 
    * passwords,
    * emails,
    * Date of birth

    #### 2. Posts 

    holding
    * id,
    * Title
    * images(The actual post), 
    * Who posted(Username),
    * Category of the post,
    * Amount of likes,
    * Amount of dislikes
    
    #### 3. Comments
    * User id 
    * Post id
    * Comment
    * Likes
    * dislikes


    Users will be able to scroll through a feed of posts in the beginning we shall just have all the posts and if time allows we will add 
    functionalities such as a hot page(holding posts over a certain amount likes), Category pages etc. Users will be able to look at the posts, through various categories pages etc without an account but in order to comment or add posts, they should have to log in.

#### Purpose and Goals

The purpose of the system is to create an application that can be used by International students as well as anyone else for the sake of leisure and relaxation after a long day of lectures. It will also be very helpful in terms of interaction and building a strong community among students where they can post each others memes and come together to share a good laugh over beer or anything that they like. "A community that laughs together stays together" is our moto going into this idea. As far as to our knowledge there is no real platform that is able to connect international students other than facebook which is used for various reasons, with this application our main focus is giving people a good time.


#### Proposed Scope\Architecture

#### Overview
  ##### Architecture

    The main system will be composed of a laravel framework, Design aspects of the project should include a header, footer, as designed by the team.

  ##### Design 

     Ample space on either side of the screen and have the images loaded on a card in which users may see the amount of likes\dislikes and a small logo\button which will open up the card and the user may view the comments made on the post in order of comment likes.
  
  ##### Functionalities

      As of the beginning of the project listing all the images with thier titles and being able to scroll down the website will be sufficent but as the progress of the project progresses. We would like to add further functionality such as sorting by likes, having only posts over a certain amount of likes being shown in 3 categories, Hot - Above 1000 likes, Wow - Above 500 likes and Fresh which will contain all posts made by anyone. We would also like to add the ability to sort via categories. having a drop down menu which would have the categories in the header and a user can select any one of thier choosing.
 
  #### User Abilities


     As for user permissions anyone may see the posts made on the website but in order for a user to write comments or add posts to the website they would have to log in.



 #### Reference Material 

 Throughout the process of system design we used amny reasources and references to make a very encompassing and successful system design document. we used :
                https://www.its.dot.gov/research_archives/msaa/pdf/MSAA_SystemDesignFINAL.pdf System design template
                https://www.cs.fsu.edu/~lacher/courses/COP3331/sdd.html

                as an example of how a system design document is written

                https://www.freecodecamp.org/news/how-to-write-a-good-software-design-document-66fcf019569c/

                Principles of writing a good system design document. Good writing and how to make an intriguing document.



3. Proposed software architecture	This section describes the top level software architecture for the system under development.
 
    3.1 Overview	The overview presents an architectural overview of the system, the "10,000 foot" perspective. AKA: the executive summary.
 
    3.2 Subsystem decomposition
Name the top-level subsystems comprising the system, along with a description of the responsibilities of each subsystem.
 
    3.3 Software/hardware mapping
Describe how subsystems are assigned to hardware and off-the-shelf components. Also list and explain issues introduced by multiple nodes and software re-use.
 
    3.4 Persistent data managemnt
Describe the persistent data stored by the system and the data management infrastructure required for it. This section should include the description of data schemes, the selection of a database, and a description of the encapsulation of the database.
 
    3.5 Access control and security
Describe the user model of the system in terms od an access matrix. This section also describes security issues, such as the selection of an authentication mechanism, the use of encryption, and management of keys.
 
    3.6 Global software control
Describe how the global software control is implemented. In particular, this section should describe how requests are initiated and how subsystems synchronize. This section should list and address synchronization and concurrency issues.
 
    3.7 Boundary conditions
List and describe the boundary conditions: startup, shutdown, and error behavior of the system.
 
4. Subsystem architectures	For each subsystem identified in section 3.2, give the (1) subsystem architecture: its design, either as a known pattern or a new design; (2) the subsystem interface or API; and (3) a brief description of the implementation plan for the subsystem.
 
5. Glossary	A glossary of all entities defined and used in the software, to ensure consistency in the design and implementation. These definitions should be precise and expressed in the language of software developers. Where terms originate from the RAD Glossary, make appropriate correlating references. Aka the Data Dictionary