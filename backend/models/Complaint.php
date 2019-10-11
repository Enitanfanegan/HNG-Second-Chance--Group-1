<?php
declare(strict_types=1);

class Complaint
{
    private $complaintId;
    private $internId;
    private $stageId;
    private $message;
    private $content;
    private $filesUrl;

    public function __construct(int $complaintId, int $internId, int $stageId, string $message)
    {
        $this->complaintId = $complaintId;
        $this->stageId = $stageId;
        $this->internId = $internId;
        $this->message = $message;
    }

    public function getId(): int
    {
        return $this->complaintId;
    }

    public function getInternId(): int
    {
        return $this->internId;
    }

    public function getStageId(): int
    {
        return $this->stageId;
    }

    public function getMessage(): string
    {
        return $this->message;
    }
}
?>