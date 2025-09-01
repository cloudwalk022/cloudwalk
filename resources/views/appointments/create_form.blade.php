
    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
                                    <h1 class="mb-4">Book an Appointment</h1>
                    <p class="mb-4">Schedule your appointment </p>

                  
 
                    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<!-- Form content for appointment creation -->


    <form action="{{ route('appointments.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}">
        </div>

        <div>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}">
        </div>

        <div>
            <label for="phone">Phone</label>
            <input type="int" id="phone" name="phone" value="{{ old('phone') }}">
        </div>

 


        <div>
            <label for="appointment_date">Appointment Date</label>
            <input type="date" id="appointment_date" name="appointment_date" value="{{ old('appointment_date') }}">
        </div>

        
        <div>
            <label for="schedule_time">Schedule Time</label>
            <input type="time" id="schedule_time" name="schedule_time" value="{{ old('schedule_time') }}">
        </div>



        <div>
            <label for="message">Message</label>
            <textarea id="message" name="message">{{ old('message') }}</textarea>
        </div>

        <button type="submit">Book Appointment</button>
    </form>


                    <!-- <a class="btn btn-primary rounded-pill px-4" href="">Read More</a> -->
                </div>
                <!-- <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel border-start border-primary">
                        <div class="testimonial-item ps-5">
                            <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                            <p class="fs-4">
                                 

                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg"
                                    style="width: 60px; height: 60px;">
                                <div class="ps-3">
                                    <h5 class="mb-1">Client Name</h5>
                                    <span>Profession</span>
                                </div>
                            </div>
                        </div>
 
 
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Testimonial End -->



