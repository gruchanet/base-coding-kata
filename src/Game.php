<?php

namespace RJozwiak\BowlingKata;

class Game
{
    const TOTAL_FRAMES = 10;

    /** @var array */
    private $throws = [];

    /**
     * @return int
     */
    public function score() : int
    {
        $score = 0;
        $frameIndex = 0;

        for ($i = 0; $i < self::TOTAL_FRAMES; $i++) {
            $frameThrows = [$this->throws[$frameIndex], $this->throws[$frameIndex + 1]];

            if ($this->isSpare($frameThrows)) {
                $nextFrameFirstThrow = $this->throws[$frameIndex + 2];
                $score += 10 + $nextFrameFirstThrow;
                $frameIndex += 2;
            } elseif ($this->isStrike($frameThrows[0])) {
                $nextFrameThrows = [$this->throws[$frameIndex + 1], $this->throws[$frameIndex + 2]];
                $score += 10 + array_sum($nextFrameThrows);
                $frameIndex++;
            } else {
                $score += $this->throws[$frameIndex] + $this->throws[$frameIndex + 1];
                $frameIndex += 2;
            }
        }

        return $score;
    }

    /**
     * @param int[] $throws
     * @return bool
     */
    private function isSpare(array $throws) : bool
    {
        return array_sum($throws) === 10;
    }

    /**
     * @param int $throw
     * @return bool
     */
    private function isStrike(int $throw) : bool
    {
        return $throw === 10;
    }

    /**
     * @param int $pins
     */
    public function throwBall(int $pins)
    {
        $this->throws[] = $pins;
    }
}
