<!-- resources/views/chatbot.blade.php -->

@extends('layouts.app')

@section('content')
    <div id="chatbox" style="width:100%; height:300px; border: 1px solid #ccc; padding: 10px; overflow-y: scroll;"></div>
    <input type="text" id="userInput" placeholder="Type your query..." style="width: 80%; padding: 5px;">
    <button id="sendBtn" style="padding: 5px;" onclick="sendMessage()">Send</button>

    <script>
        async function sendMessage() {
            const userMessage = document.getElementById("userInput").value;
            if (!userMessage) return;

            displayMessage(userMessage, "user");

            const response = await fetch("{{ route('chatbot.message') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({ message: userMessage })
            });

            const data = await response.json();
            displayMessage(data.response, "ai");

            document.getElementById("userInput").value = "";
        }

        function displayMessage(message, sender) {
            const chatbox = document.getElementById("chatbox");
            const newMessage = document.createElement("div");
            newMessage.className = sender;
            newMessage.textContent = `${sender.toUpperCase()}: ${message}`;
            chatbox.appendChild(newMessage);
            chatbox.scrollTop = chatbox.scrollHeight;
        }
    </script>
@endsection
