<?php
    namespace Classes;

    use DateTime;

    class Sprint {
        private ?int $id = null;
        private string $name;
        private string $description;
        private DateTime $start_date;
        private DateTime $end_date;
        private string $statue;
        private int $project_id;
        public function __construct(string $name , string $description , DateTime $start_date , DateTime $end_date , string $statue , int $project_id) {
            $this->setName($name);
            $this->setDescription($description);
            $this->setStartDate($start_date);
            $this->setEndDate($end_date);
            $this->setStatue($statue);
            $this->setProjectId($project_id);
        }
        public function getId() {
            return $this->id;
        }
        public function setId(int $id) {
            $this->id = $id;
        }
        public function getName() {
            return $this->name;
        }
        public function setName(string $name) {
            $this->name = $name;
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
        public function getProjectId() {
            return $this->project_id;
        }
        public function setProjectId(int $project_id) {
            $this->project_id = $project_id;
        }
    }