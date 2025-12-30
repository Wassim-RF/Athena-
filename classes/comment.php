<?php

namespace Classes;

class Comment {
    private ?int $id = null;
    private string $content;
    private int $userId;
    private int $taskId;

    public function __construct(string $content , int $userId , int $taskId) {
        $this->setContent($content);
        $this->setUserId($userId);
        $this->setTaskId($taskId);
    }
    public function getId() {
        return $this->id;
    }

    public function setId(?int $id) {
        $this->id = $id;
    }
    public function getContent() {
        return $this->content;
    }
    public function setContent(string $content) {
        $this->content = $content;
    }
    public function getUserId() {
        return $this->userId;
    }
    public function setUserId(int $userId) {
        $this->userId = $userId;
    }
    public function getTaskId() {
        return $this->taskId;
    }
    public function setTaskId(int $taskId) {
        $this->taskId = $taskId;
    }
}