<div>
    <button type="button" wire:click="addTwoNumbers(32,90)">Sum</button> <br>

    <textarea wire:keydown.enter="DisplayMessage($event.target.value)"></textarea> <br>

    <form wire:submit.prevent="getSum">
       Enter Num 1 : <input type="text" name="num1" wire:model="num1"> <br>
       Enter Num 2 : <input type="text" name="num2" wire:model="num2"> <br>
        <button type="submit">Submit</button>
    </form>

    <br>
    Sum: {{$sum}}
    <br>
    Message: {{$message}}
</div>