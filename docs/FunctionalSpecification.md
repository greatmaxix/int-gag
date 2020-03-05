# Functional specification

## Describing the current situation

We are as a team setting up the envirment to startup our group project with the following developeing memebrs:

1. Amer Mamoun
2. Maksat Baigazy
3. Mxolisi Silabela
4. Wade Friedrichs
5. Xolani nhlapo
6. Kaddour Srarfi
7. Mamingke

We have agrred to do a Laraval project as the first plan been seted, the first idea of the project is to create funny posts and show them on the screen also a registration and Login system with layaers of validations.

Currently we are working on the documentation which are an important part of any project at the begininng to set the ideas and the main functions what and how to implement them.

## UI plan:

The User interface won't be too compleceted, we will have a simple registration and login pages.

The dashboard will have the feed of the posts and mems that we have in the database

The project my get expended to add an admin page were an admin can manage the post's delete them approve them and update them. also an admin is allowed to manage the user table, add, delete users.

## Use Cases

The user will login in the system, and then the user will see some feed on the dashboard. the user can double click on a photo to like the photo so the user will see how many ppl liked this photo before.

- Adding a post:
the user can write a post/meme into the his own page and it will show on other users feed page.

- Admin page:
will have two taps the first one would be for the users were admin can manage the users of the system.
the seconed tap could be the posts tab were an admin can remove and add/update posts

## **What it should be, and what it should not be**

#### MUST NOT;
- be overly complicated and take more than 4 minutes to setup
- use copyrighted names for the 9gag that already exist.
- Discriminate in terms of gender, race, age, religion or any other way.
- Be used to convey hate speech.

#### MUST:
- be colorful and vibrant to appeal to our users
- Each user should feel enjoyment while browsing,posting and commenting on the application.
- run cleanly and smoothly


---


## Constraints on the system (eg.: laws, standards)
As per said in the requirement specification, the software must oblige the new requlations in the EU, namely GDPR. This means whatever data we collect from the user, must be treated with the upmost care. Also the user MUST explicitly accept the collection and use of his/her data.

As stated in the requirement specification, copyright content can be used for educational purposes. Although it varies country-by-country, if the original author/source must be stated or not. This would mean a great constraint on the system in case of commercialising the software. In case of free educational software, the differences between the countries does no concern us, we will only have to oblige to the laws in the country, where our organization is stated, and where the original source of the server side of the software is. Even if CDN is used, the original source is the one we have to oblige.

As per said in the requirement specification, whenever communications happen between the client and server side, the data should be sent in a json format. It is one of the most popular standards nowadays. If the communication happens on http/https protocol, it is also a good idea to use normalized url-s with it, similarly to a RESTful API.