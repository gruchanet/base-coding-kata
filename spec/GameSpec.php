<?php

namespace spec\RJozwiak\BowlingKata;

use RJozwiak\BowlingKata\Game;
use PhpSpec\ObjectBehavior;

/**
 * Class GameSpec
 * @package spec\Madkom\Bowling
 * @mixin Game
 */
class GameSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Game::class);
    }

    function it_calculates_score_for_no_pins_knocked()
    {
        $this->throwBallMultipleTimes(0, 20);

        $this->score()->shouldBe(0);
    }

    function it_calculates_score_for_some_pins_knocked()
    {
        $this->throwBallMultipleTimes(1, 20);

        $this->score()->shouldBe(20);
    }

    function it_calculates_score_with_spare_in_first_frame()
    {
        $this->throwSpare(6);
        $this->throwBall(2);
        $this->throwBallMultipleTimes(1, 17);

        $this->score()->shouldBe(10 + 2 + 2 + 17);
    }

    function it_calculates_score_with_strike_in_first_frame()
    {
        $this->throwStrike();
        $this->throwBall(6);
        $this->throwBall(2);
        $this->throwBallMultipleTimes(1, 16);

        $this->score()->shouldBe(10 + 8 + 8 + 16);
    }

    function it_calculates_9s_and_misses_in_all_frames()
    {
        $this->throwBallMultipleTimesPerFrame(9, 0, 10);

        $this->score()->shouldBe(90);
    }

    function it_calculates_perfect_game_score()
    {
        $this->throwBallMultipleTimes(10, 12);

        $this->score()->shouldBe(300);
    }

    function it_calculates_spares_in_all_frames()
    {
        $this->throwBallMultipleTimesPerFrame(5, 5, 10);
        $this->throwBall(5);

        $this->score()->shouldBe(150);
    }

    private function throwBallMultipleTimes(int $pins, int $multiplier)
    {
        for ($i = 0; $i < $multiplier; $i++) {
            $this->throwBall($pins);
        }
    }

    private function throwSpare(int $pins)
    {
        $this->throwBall($pins);
        $this->throwBall(10 - $pins);
    }

    private function throwStrike()
    {
        $this->throwBall(10);
    }

    private function throwBallMultipleTimesPerFrame(int $pins1, int $pins2, int $multiplier)
    {
        for ($i = 0; $i < $multiplier; $i++) {
            $this->throwBall($pins1);
            $this->throwBall($pins2);
        }
    }
}
