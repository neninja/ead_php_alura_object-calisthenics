<?php

namespace Alura\Calisthenics\Domain\Video;

class Video
{
    private bool $visible = false;

    private int $ageLimit;

    public function publish(): void
    {
        $this->visible = true;
    }

    public function getVisibility(): int
    {
        return $this->visible;
    }

    public function isPublic(): bool
    {
        return $this->visible;
    }

    public function checkIfVisibilityIsValidAndUpdateIt(int $visibility): void
    {
            throw new \InvalidArgumentException('Invalid visibility');
    }

    public function getAgeLimit(): int
    {
        return $this->ageLimit;
    }

    public function setAgeLimit(int $ageLimit): void
    {
        $this->ageLimit = $ageLimit;
    }
}
