<div id="thePositioning">
    <link rel="stylesheet" href="{{ asset("css/twoButtonCSS.css") }}">
    <p id="nightWhisperHeader">Night<span style="color: pink">W</span>hisper</p>
    <p id="nightWhisperCaption">Where you can chat anonymounsly, safely and limitlessly </p>
    <div id="theButtonRow">
        <button wire:click="dispatchTriggerShowCreateChat" class="buttons">Create</button>
        <button wire:click="dispatchTriggerShowJoinChat" class="buttons">Join</button>
    </div>
</div>