<div id="placing">
    <link rel="stylesheet" href="{{ asset("css/joinGroupChat.css") }}">
    <div id="theContainer">
        @csrf
        <div>
            <input @if($disabled) disabled @endif id="uuidField" wire:model="UUID" type="text" placeholder="enter the group chat ID">
            @error('UUID')
                <p style="margin-top: 1vh;text-align: left;color: red;font-side: 1.1em;font-family:'Special Gothic'">{{ $message }}</p>
            @enderror
            @if($UUID_msg != '')
                <p style="margin-top: 1vh;text-align: left;color: red;font-side: 1.1em;font-family:'Special Gothic'">{{ $UUID_msg }}</p>
            @endif
        </div>
        <button wire:click="joinChat" id="button">join</button>
    </div>
</div>
