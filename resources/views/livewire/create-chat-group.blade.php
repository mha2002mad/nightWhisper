<div id="placing">
    @script
    <script>
        $wire.on('copyToClipboard', (e) => {
            console.log(e)
            navigator.clipboard.writeText(e[0].uuid)
        })
    </script>
    @endscript
    <link rel="stylesheet" href="{{ asset("css/createGroupChat.css") }}">
    <div id="container">
        <div id="groupChatIdentifierAndCopyIcon">
            @if ( $theUUID == "")
                <div id="theUUIDPlaceholder">the groupchat identifier</div>
            @else
                <div id="theUUID">{{ $theUUID }}</div>
            @endif
            <img wire:click="copyUUIDToClipboard" id="theIcon" src="{{asset("assets/copy.png")}}" alt="give this to people to join the chat">
        </div>
        @if ($theUUID == "")
                <button wire:click="makeOne" id="theButton">create groupchat</button>
            @else
                <button wire:click="redirectToGroupChat" id="theButton">view groupChat</button>
            @endif
    </div>
</div>
