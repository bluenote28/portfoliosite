<?php include 'classes/project.php';

const FULL_NAME = "Anthony Cowden";
const PHONE = "618-207-5399";
const EMAIL = "acowden@yahoo.com";
const LOCATION = "Joliet, IL";
const LINKED_IN = "https://www.linkedin.com/in/anthony-cowden-b3854221/";

const PROJECTS = array(

    new Project(
        "Charity Shop",
        "This is a wrapper over Ebay to help you locate items that benefit charity. This was built to solve my own personal frustrations at using Ebay's site to locate charity items.",
        "HTML, CSS, React, Python, Django, Postgresql",
        "https://charityshopusa.com",
        "https://github.com/bluenote28/CharityShopFrontEnd", "images/charityshop.png"),

        new Project(
        "Accomplishment Tracker",
        "This is a site where Amazon employees can track their work accomplishments and easily share them with their manager.
        This was made in response to an issue I experienced at Amazon where I had three different managers within a short time periord. Each manager had no idea of my past work. 
        This site solved that problem. Since this was made for internal use at Amazon, I cannot share a link to the site or the code.
        I do have permission to privately share pictures of the site in an interview.",
        "React, Python, AWS",
        null,
        null,
        null),

    new Project(
        "Bible Catholic",
        "This was created to create a site where biblical data for the catholic church can be easily found.",
        "HTML, CSS, Python, Flask",
        "https://www.biblecatholic.net/",
        "https://github.com/bluenote28/biblecatholic", "images/biblecatholic.png"),

    new Project(
        "Toolshed",
        "At Amazon, the tools that we use in the IT deparment are distributed across many different sites, which makes it difficult to find the tools you need to do your job.
        Toolshed is a site that I created to solve this problem by aggregating all the tools in one place.
        Since this was made for internal use at Amazon, I cannot share a link to the site or the code. I do have permission to privately share pictures of the site in an interview.",
        "React, AWS",
        null,
        null,
        null),


);

?>