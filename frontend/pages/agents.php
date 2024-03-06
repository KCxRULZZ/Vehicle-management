<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script>
    function myFunction() {
      document.getElementById("demo").innerHTML = "Employees in the auto insurance industry are required to have a number of characteristics that help them be successful in their jobs.First and foremost, having a thorough grasp of automobiles is crucial, especially knowing the dangers connected to various kinds and models.Employees can effectively determine customers' insurance needs, evaluate claims, and give knowledgeable advise thanks to this expertise. Additionally, having strong communication skills is essential for dealing with customers, answering their questions, outlining policy information, and assisting them with claims. Another essential trait is attention to detail, which guarantees precision in policy documentation, claim processing, and vehicle damage assessment. In the ever-changing insurance industry, flexibility and problem-solving abilities are essential for personnel to handle challenging circumstances, form wise judgements, and come up with workable solutions,We have passed on all that knowledge to our agents.";
    }
  </script>
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
    }

    html {
      box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
      box-sizing: inherit;
    }

    .column {
      float: left;
      width: 33.3%;
      margin-bottom: 16px;
      padding: 0 8px;
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      margin: 8px;
    }

    .about-section {
      padding: 50px;
      text-align: center;
      background-color: #474e5d;
      color: white;
      font-size: larger;
    }

    .container {
      padding: 0 16px;
    }

    .container::after,
    .row::after {
      content: "";
      clear: both;
      display: table;
    }

    .title {
      color: grey;
    }


    button:hover {
      background-color: #555;
    }

    .agent-des {
      padding: 60px;
      text-align: center;
      background-color: black;
      color: white;
      font-size: larger;
    }


    @media screen and (max-width: 650px) {
      .column {
        width: 100%;
        display: block;
      }
    }
  </style>
</head>

<body>
  <?php
  include '../components/header.php'
  ?>

  <div class="about-section">
    <h1>Stay with our services</h1>
    <p>The agents at the vehicle insurance company are highly qualified professionals dedicated to providing our clients with excellent service and knowledge. They have a solid understanding of insurance policies, regulations, and market trends, making them well-suited to assist clients in navigating the complexity of automotive insurance.

      Our agents are committed to ensuring that customers have the correct coverage for their cars by offering customized advice tailored to each client's unique needs. Customers are given the opportunity to express their needs, and complete solutions are provided with the proper level of security.</p>

    <h3>WHT SHOULD YOU STAY WITH OUR EMPLOYEES AND SERVICES?</h3>

    <p id="demo">By contacting our agents you can get many benefits for your vehicle as well.</p>

    <button type="button" onclick="myFunction()">To see those benefits,CLICK HERE</button>

  </div>

  <h2 style="text-align:center">Our Agents Team</h2>
  <div class="row">
    <div class="column">
      <div class="card">
        <img src="004.jpg.webp" alt="Jane" style="width:100%">
        <div class="container">
          <h2>Jane Smith</h2>
          <p class="title"><b>Colombo Head Office</b></p>
          <p>Exceptional ability to effectively interact with potential customers, understanding their needs.</p>
          <p><b>jane.s@gmail.com</b></p>

        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="006.avif" alt="Mike" style="width:100%">
        <div class="container">
          <h2>Mike Ross</h2>
          <p class="title"><b>Matara branch</b></p>
          <p>Ability to provide excellent customer service and always attentive to customer needs.</p>
          <p><b>mikeMK@gmail.com</b></p>

        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="002.jpg" alt="John" style="width:100%">
        <div class="container">
          <h2>John Smith</h2>
          <p class="title"><b>Galle branch</b></p>
          <p>Analytical skills to assess customer needs, evaluate risk factors and determine appropriate coverage options.</p>
          <p><b>john502@gmail.com</b></p>

        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="column">
      <div class="card">
        <img src="005.jpg" alt="Alexandra" style="width:100%">
        <div class="container">
          <h2>Hendri Alexandra</h2>
          <p class="title"><b>Kandy branch</b></p>
          <p>Identify potential gaps or inconsistencies in coverage to provide accurate advice to customers with close attention</p>
          <p><b>hendria300@gmail.com</b></p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="010.avif" alt="Peter" style="width:100%">
        <div class="container">
          <h2>Peter Marlon</h2>
          <p class="title"><b>Nuwara-Eliya branch</b></p>
          <p>Building and maintaining relationships with customers and providing them with good service</p>
          <p><b>petermar@gmail.com</b></p>

        </div>
      </div>
    </div>


  </div>

  <div class="agent-des">
    <p>
      <b>These salespeople have excellent communication and sales skills, which enable them to clearly explain insurance products, address client inquiries, and persuade potential consumers to purchase coverage. They are adept at identifying client preferences and developing insurance plans that are personalized for each client.
        Agents are also necessary for the claims process. When clients are involved in accidents or have damage to their vehicles, agents assist them in filing insurance claims, compiling the necessary documentation, and working with adjusters to review claims. They serve as the primary point of contact for customers, ensuring clear communication and quick claim handling.In general, our agents in auto insurance firms have a range of abilities, including those in sales, communication, critical thinking, and customer service. They are useful resources for clients looking for auto insurance coverage, assisting them in making decisions and offering assistance throughout the insurance process.
      </b>
    </p>
  </div>
  <?php
        include '../components/footer.php'
    ?>

</body>

</html>