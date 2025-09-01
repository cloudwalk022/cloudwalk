    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                                    <h1 class="mb-4">Contact Us</h1>
 
                
                </div>
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel border-start border-primary">
                        <div class="testimonial-item ps-5">



                        <!-- resources/views/chatbot.blade.php -->



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



                         
                            <p class="fs-4">For More Details:</p>
                            <strong>Head Office </strong>
                            <div class="d-flex align-items-center">
                              <p> <img class="img-fluid" src="{{ asset('frontend/img/logo.png')}}" alt=""> </a><br>Cloud Walk Software Inc. <br>
                              2270 Cliffe Ave, <br>
                              Courtenay, BC, V9M 0C4 <br>
                              Canada <br>
                              Url : https://cloudwalksoftware.com <br>
                              email : sales@cloudwalksoftware.com <br>
                              Tel :+1 250 - 207 - 9141  / +1 250 - 331 -9406

                            </div>


                            <strong><p>United States Branch Office:</p></strong>
                            <div class="d-flex align-items-center">
                              <p> <img class="img-fluid" src="{{ asset('frontend/img/logo.png')}}" alt=""> </a><br>Cloud Walk Solution Inc.<br>
                              522 W Riverside Ave STE N, <br>
                              Spokane, WA <br>
                              United States <br>
                              Url : https://cloudwalksolution.com <br>
                              email : sales@cloudwalksolution.com <br>
                              Tel :+1 250 - 207 - 9141  / +1 250 - 331 -9406

                            </div>


                          <strong>  <p>Nepal Branch Office:</p></strong>
                            <div class="d-flex align-items-center">
                              <p> <img class="img-fluid" src="{{ asset('frontend/img/logo.png')}}" alt=""> </a><br>Cloud Walk Technology <br>
                              Nayabazar 16, Lekhnath Marga <br>
                              Kathmandu, Bagmati <br>
                             Nepal <br>
                              Url : https://cloudwalktech.com.np <br>
                              email : sales@cloudwalktech.com.np <br>
                              Tel :+977 1 4980820  / +977 1 4963482

                            </div>


                        </div>
 
 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->




    