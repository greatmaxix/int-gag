# System Design Document

   #### Authors

   * Wade David Friedrichs
   * Mxolisi Silabela

   #### Team Members

   * Maksat
   * Amer 
   * Xolani
   * Kaddour
   * Ma mingke


## Introduction

We will design Int-Gag using Php, Laravel with a mysqldatabase. We will use html/css to design a nice lookinginterface posts in
the middle of the page with ample space on either side forlater added features. The tables in the database shouldhold; 

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


Users will be able to scroll through a feed of posts inthebeginning we shall just have all the posts and if timeallowswe will add 
functionalities such as a hot page(holding posts overacertain amount likes), Category pages etc. Users willbeable to look at the posts, through various categoriespagesetc without an account but in order to comment oradd posts,they should have to log in.

## Purpose and Goals

The purpose of the system is to create an application that can be used by International students as well as anyone else for the sake of leisure and relaxation after a long day of lectures. It will also be very helpful in terms of interaction and building a strong community among students where they can post each others memes and come together to share a good laugh over beer or anything that they like. "A community that laughs together stays together" is our moto going into this idea. As far as to our knowledge there is no real platform that is able to connect international students other than facebook which is used for various reasons, with this application our main focus is giving people a good time.


## Proposed Scope\Architecture

### Overview
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
 * https://www.its.dot.gov/research_archives/msaa/pdf/MSAA_SystemDesignFINAL.pdf System design template
 * https://www.cs.fsu.edu/~lacher/courses/COP3331/sdd.html
 as an example of how a system design document is written

* https://www.freecodecamp.org/news/how-to-write-a-good-software-design-document-66fcf019569c/

* Principles of writing a good system design document. Good writing and how to make an intriguing document.


## Summary

For the success of this system we will rely mostly on peer programming to minimise the errors that programmers may have. Our main focus will be on creating a user-friendly system that does not discriminate against gender, race, age, ethnic group and so on so our design will be highly maintained by allowing users to send emails should they wish to make comments or complaints about the design. Some of the open questions we have thus far include the limitation of users who will try to post negative posts or make nasty comments. The system will be maintaned and updated frequently to keep up with the fast-pased changes on a daily basis and the community will well taken care of.
