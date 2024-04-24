@extends('layout.sidebarlayout')

@section('other')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Chat Interface</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS for chat layout (optional) -->
    <style>
        .chat-container {
            display: flex;
            max-width: 800px;
            margin: 0 auto;
        }
        .person-list {
            width: 30%;
            border-right: 1px solid #ccc;
            padding-right: 10px;
        }
        .chat-box {
            flex-grow: 1;
            padding-left: 20px;
        }
        .person-item {
            cursor: pointer;
            padding: 10px;
            margin-bottom: 5px;
            border-radius: 5px;
        }
        .person-item:hover {
            background-color: #f0f0f0;
        }
        .chat-bubble {
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .user-bubble {
            background-color: #007bff;
            color: white;
            align-self: flex-end;
        }
        .other-bubble {
            background-color: #f0f0f0;
            color: black;
            align-self: flex-start;
        }
        .message-input {
            display: flex;
            margin-top: 20px;
        }
        .message-input input[type="text"] {
            flex-grow: 1;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .message-input button {
            margin-left: 10px;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container mt-5">
        <div class="chat-container">
            <!-- Person list -->
            <div class="person-list">
                <div class="person-item">John Doe</div>
                <div class="person-item">Jane Smith</div>
                <div class="person-item">Alice Johnson</div>
            </div>

            <!-- Chat box -->
            <div class="chat-box">
                <div class="chat-bubble other-bubble">Hi John! How can I help you today?</div>
                <div class="chat-bubble user-bubble">Hello! I have a question about our project deadline.</div>
                <div class="chat-bubble other-bubble">Sure, feel free to ask.</div>
                <div class="chat-bubble user-bubble">When is the project deadline?</div>
                <div class="chat-bubble other-bubble">The deadline is next Friday.</div>

                <!-- Message input -->
                <div class="message-input">
                    <input type="text" placeholder="Type your message...">
                    <button type="button">Send</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Link Bootstrap JS (optional, for certain features like tooltips, popovers, etc.) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
@endsection