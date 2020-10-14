<div>
    Name: <br>
    <input type="text" wire:model.debounce.1000ms="name"> <br>

    Message: <br>
    <textarea wire:model="message"></textarea> <br>

    Material Status: <br>
    Single <input type="radio" value="Single" wire:model="material_status">
    Married <input type="radio" value="Married" wire:model="material_status"> <br>

    Favourite Color: <br>
    Red <input type="checkbox" value="Red" wire:model="colors"> <br>
    Green <input type="checkbox" value="Green" wire:model="colors"> <br>
    Blue <input type="checkbox" value="Blue" wire:model="colors"> <br>

    Favourite Fruite: <br>
    <select wire:model="fruite">
        <option value="">Select Fruite</option>
        <option value="Apple">Apple</option>
        <option value="Mango">Mango</option>
        <option value="Banana">Banana</option>
    </select>


    <hr>
    Name: {{$name}} <br>
    Message: {{$message}} <br>
    Material Status: {{$material_status}}<br>
    Favourite Color:
    <ul>
        @foreach ($colors as $color)
        <li>{{$color}}</li>
        @endforeach
    </ul>
    <br>
    Favourite Fruite: {{$fruite}}<br>

</div>