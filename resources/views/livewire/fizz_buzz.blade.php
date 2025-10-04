<?php

use function Livewire\Volt\{state, mount};

state(['count' => 1, 'msg' => '']);

function get_fizz_buzz($num)
{
    if ($num % 15 == 0) {
        return 'FizzBuzz';
    } elseif ($num % 5 == 0) {
        return 'Buzz';
    } elseif ($num % 3 == 0) {
        return 'Fizz';
    } else {
        return "{$num}";
    }
}

$increment = function () {
    $this->count++;

    $this->msg = get_fizz_buzz($this->count);
};

$decrement = function () {
    $this->count--;

    $this->msg = get_fizz_buzz($this->count);
};

$reset_count = function () {
    $this->count = 1;

    $this->msg = get_fizz_buzz($this->count);
};

?>

<div class="m-2 p-2 border-1 w-1/3 mx-auto justify-items-center">
    <h1 class="text-3xl font-bold my-7">カウンター</h1>
    <div>Count： <span class="red">{{ $msg }}</span></div>
    <div>
        <button class="text-xs font-semibold border-1 rounded-sm bg-gray-200 px-2 py-1" wire:click="increment">+</button>
        <button class="text-xs font-semibold border-1 rounded-sm bg-gray-200 px-2 py-1" wire:click="decrement">-</button>
        <button class="text-xs font-semibold border-1 rounded-sm bg-gray-200 px-2 py-1"
            wire:click="reset_count">reset</button>
    </div>

</div>
