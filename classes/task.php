<?php
    namespace Classes;

    class Task {
        private ?int $id = null;
        private string $title;
        private string $description;
        private string $statue;
        private string $priority;
        private string $type;
        private int $created_by;
        private int $sprint_id;
        
        public function __construct(string $title , string $description , string $statue , string $priority , string $type , int $created_by , int $sprint_id) {
            $this->setTitle($title);
            $this->setDescription($description);
            $this->setStatue($statue);
            $this->setPriority($priority);
            $this->setType($type);
            $this->setCreatedBy($created_by);
            $this->setSprintId($sprint_id);
        }
        public function getId() {
            return $this->id;
        }
        public function setId(?int $id) {
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
        public function getStatue() {
            return $this->statue;
        }
        public function setStatue(string $statue) {
            $this->statue = $statue;
        }
        public function getPriority() {
            return $this->priority;
        }
        public function setPriority(string $priority) {
            $this->priority = $priority;
        }
        public function getType() {
            return $this->type;
        }
        public function setType(string $type) {
            $this->type = $type;
        }
        public function getCreatedBy() {
            return $this->created_by;
        }
        public function setCreatedBy(int $created_by) {
            $this->created_by = $created_by;
        }
        public function getSprintId() {
            return $this->sprint_id;
        }
        public function setSprintId(int $sprint_id) {
            $this->sprint_id = $sprint_id;
        }
    }