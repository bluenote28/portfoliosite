<?php

    class Project {
        public $title;
        public $description;
        public $technologies;
        public $link;
        public $githubLink;
        public $image;

        function __construct($title, $description, $technologies, $link, $githubLink, $image) {
            $this->title = $title;
            $this->description = $description;
            $this->technologies = $technologies;
            $this->link = $link;
            $this->githubLink = $githubLink;
            $this->image = $image;
        }

        public function display() {

        if ($this->link != null) {
            echo "<div class='project-container'> 
                    <h1>{$this->title}</h1>
                    <p>{$this->description}</p>
                    <p>Skills Used: {$this->technologies}</p>
                    <div><a class='btn btn-primary' href='{$this->link}' role='button'>Link</a>
                         <a class='btn btn-secondary' href='{$this->githubLink}' role='button'>GitHub Repo</a></div>
                     <img src='{$this->image}' alt='{$this->title} Project Image' class='project-image'>
                  </div>";
        }

        else {
            echo "<div class='project-container'> 
                    <h1>{$this->title}</h1>
                    <p>{$this->description}</p>
                    <p>Skills Used: {$this->technologies}</p>
                  </div>";
        }
    }
}

?>