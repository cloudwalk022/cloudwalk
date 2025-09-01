<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap List Example</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


</head>


 
 
<style>


.logo {
  font-size: 200px;
}
@media screen and (max-width: 768px) {
  .col-sm-12 {
    text-align: center;
    line: height 1.8em;
    margin: 25px 0;
  }
}

</style>
    <body> 
    
    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">
 
 
<div class="container-fluid">
  <div class="row">
<div class="col-sm-12">    <h3>Computer Hardware Repaire & Maintenance Services:</h3>  <p>Cloud Walk Software often offer a range of computer hardware and repair services to cater to the needs of our clients. These services can vary depending on the size and specialization of the Cloud Walk, but generally include the following:</p> </div>


    
 
      <h5>Hardware Sales and Procurement:</h5>

      <div class="col-sm-8">
  <ul class="list-group">
    <li class="list-group-item"><strong> New Equipment: </strong>We source and sell various computer hardware components, including CPUs, motherboards, RAM, storage devices, and peripherals</li>
    <li class="list-group-item"><strong> Used Equipment: </strong> We offer refurbished or used hardware as a more affordable option.</li>
    <li class="list-group-item"><strong>Custom Configurations: </strong> We build customized computer systems tailored to specific client requirements.</li>
  </ul>

      <button class="btn btn-default btn-lg"> </button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
      <h4>  </h4>
      <img class="img-fluid" src="{{ asset('frontend/img/hardware_sale.jpg')}}" alt=""><br>
    </div>
  </div>
 

</div>

<div class="container-fluid">
  <div class="row">
  <h5>Hardware Repair and Maintenance:</h5>
    <div class="col-sm-8">
 

<ul class="list-group">
    <li class="list-group-item"><strong>Troubleshooting: </strong> Cloud Walk Software diagnose and resolve hardware-related issues, such as component failures, driver problems, or software conflicts.</li>
    <li class="list-group-item"><strong> Component Replacement: </strong> We replace faulty hardware components with new or refurbished ones.</li>
    <li class="list-group-item"><strong>Preventive Maintenance: </strong> We conduct regular maintenance tasks to ensure optimal performance and longevity of hardware.</li>
    <li class="list-group-item"><strong>Data Recovery:  </strong> We recover lost or corrupted data from damaged hardware.</li>
  
</ul>


      <button class="btn btn-default btn-lg"> </button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
      <h4>  </h4>
      <img class="img-fluid" src="{{ asset('frontend/img/repair.jpeg')}}" alt=""><br>
    </div>
  </div>
 

</div>


 

<div class="container-fluid">
  <div class="row">
  <h5>Network Hardware:</h5>
    <div class="col-sm-8">
 

<ul class="list-group">
    <li class="list-group-item"><strong>Network Infrastructure: </strong> We design, install, and maintain network infrastructure, including routers, switches, and firewalls.</li>
    <li class="list-group-item"><strong> Server Management: </strong> We manage and maintain servers, including hardware and software configuration.</li>
    <li class="list-group-item"><strong>Network Security: </strong> We implement security measures to protect networks from unauthorized access and cyber threats..</li>
   
  
</ul>


      <button class="btn btn-default btn-lg"> </button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
      <h4>  </h4>
      <img class="img-fluid" src="{{ asset('frontend/img/network.jpg')}}" alt=""><br>
    </div>
  </div>
 

</div>

<div class="container-fluid">
  <div class="row">
  <h5>On-Site and Remote Support:</h5>
    <div class="col-sm-8">
 

<ul class="list-group">
    <li class="list-group-item"><strong>On-Site Support: </strong> We Provide technical support services at client locations..</li>
    <li class="list-group-item"><strong> Remote Support: </strong> We offer remote assistance via phone, email, or remote access tools.</li>

   
  
</ul>


 
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
      <h4>  </h4>
      <img class="img-fluid" src="{{ asset('frontend/img/onsite_support.jpg')}}" alt=""><br>
    </div>
  </div>
 

</div>


              
</div>

<div class="container">   
  <a href="{{ route('appointments.create') }}" class="btn btn-info active">Schedule Appointment to get an quote</a>
</div>

   
</div>
</div>
</div>
 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>