<?php
    namespace Classes;

    use DateTime;

    class Project {
        private ?int $id = null;
        private string $title;
        private string $description;
        private DateTime $start_date;
        private DateTime $end_date;
        private string $statue;
        private int $chef_id;

        public function __construct(string $title , string $description , DateTime $start_date , DateTime $end_date , string $statue , int $chef_id) {
            $this->setTitle($title);
            $this->setDescription($description);
            $this->setStartDate($start_date);
            $this->setEndDate($end_date);
            $this->setStatue($statue);
            $this->setChefId($chef_id);
        }

        public function getId() {
            return $this->id;
        }
        public function setId(int $id) {
            $this->id = $id;
        }
        public function getTitle() {
            return $this->title;
        }
        public function setTitle(string $title) {
            $this->title = $title;
        }
        public function getDescription() {
            return $this->description;
        }
        public function setDescription(string $description) {
            $this->description = $description;
        }
        public function getStartDate() {
            return $this->start_date;
        }
        public function setStartDate(DateTime $start_date) {
            $this->start_date = $start_date;
        }
        public function getEndDate() {
            return $this->end_date;
        }
        public function setEndDate(DateTime $end_date) {
            $this->end_date = $end_date;
        }
        public function getStatue() {
            return $this->statue;
        }
        public function setStatue(string $statue) {
            $this->statue = $statue;
        }
        public function getChefId() {
            return $this->chef_id;
        }
        public function setChefId(int $chef_id) {
            $this->chef_id = $chef_id;
        }
    }