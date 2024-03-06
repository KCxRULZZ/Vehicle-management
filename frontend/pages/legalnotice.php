<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-image: url("legal.jpg") ;
  background-size: contain;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
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
  padding: 10px;
  text-align: center;
  background-color:rgb(160, 194, 249);
  color: whitesmoke;
  font-size: larger;
}

.container {
  padding: 0 16px;
}


.container::after, .row::after {
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

.legal-des {
  padding: 30px;
  text-align: center;
  background-color: rgb(186, 210, 248);
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
  <h1>Legal Notices</h1>
  <h3>Below are some legal notices provided by our insurance company </h3>
  
</div>


<div class="row">
  <div class="column">
    <div class="card">

      <div>
        <h2><b>Policy Terms and Conditions</b></h2>
        
        <p style="color:black;"><b>A legal notice describing the terms and conditions of the insurance policy is provided to the policyholder at the time of purchase. The coverage limits, deductibles, exclusions, and other significant provisions are described in detail in this notice. The institute can provide more details if you visit.</b></p>
        
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      
      <div class="container">
        <h2><b>Disclosure Notices</b></h2>
        <p><b>The insurance policy's premium payment information is included in this letter, including the total premium, the various installment payment schedules, the payment deadlines, and any other fees or charges that might be necessary.This notice also describes the processes involved in the claims evaluation and settlement process in addition to the documentation requirements, the due date for reporting accidents or events, and the procedure for submitting a claim with the insurance company.</b></p>
        
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      
      <div class="container">
        <h2>Notices of policy changes</h2>

        <p><b>The insurance firm notifies policyholders in writing of any modifications to the terms of the insurance contract, including changes to premiums, coverage limitations, and other terms. These bulletins outline the changes and their effects.</b></p>
        
      </div>
    </div>
  </div>
</div>

<div class="row">
    <div class="column">
      <div class="card">
        
        <div class="container">
          <h2>State and Federal notices</h2>
          
          <p><b>A distinct insurance department or regulatory organization is in charge of regulating insurance-related activities in each state. Insurance firms are required to provide certain notices that are outlined by the state insurance agency. These warnings might also contain information on the policyholder's rights, complaint procedures, fraud prevention, and other state-specific regulations.</b></p>
        </div>
      </div>
    </div>
  
    <div class="column">
      <div class="card">

        <div class="container">
          <h2>Electronic and Communication Consent</h2>
          
          <p><b>Email, secure web portals, mobile applications, and text messages are just a few of the different electronic communication types that are listed in the notice along with the delivery techniques.The notice informs policyholders that they have the right to revoke their agreement at any time for communications to be sent to them electronically. It outlines the process for opting out and offers alternative ways to receive information, such print mail.</b></p>
          
        </div>
      </div>
    </div>


</div>

<p><b>The terms, regulations, and agreements that control the usage of a specific service, good, or platform are described in the policy terms and conditions. Disclosure In order to ensure openness and notify people or businesses of their rights and obligations, notices are official statements that <span id="dots">.......</span><span id="more">disclose pertinent information, such as financial, legal, or regulatory facts. Notices of policy changes are notices that users receive when there have been updates or revisions to current policies. This ensures user awareness and gives them a chance to examine and accept the changes.In accordance with certain state or federal laws, regulations, or authorities, notices are required to be sent in order to ensure compliance and inform people of their legal responsibilities. The phrase "Electronic and Communication Consent" describes users' approval to receive electronic communications and their agreement to complete transactions using electronic rather than paper-based techniques, such as electronically approving terms or receiving notices. Together, these elements give knowledge, transparency, and legal compliance to individuals and groups in a variety of situations.  recipients in a formal manner of a variety of legal matters, such as ongoing legal proceedings, binding contracts, legal requirements, or official announcements. Legal notices are frequently drafted by attorneys, who take great care to guarantee their accuracy, correctness, and compliance with all applicable laws and regulations. They are necessary for upholding accountability, defending rights, and facilitating legal procedures. They frequently represent the start of legal actions or the formation of legal partnerships. Legal notices assist to the effectiveness and integrity of the legal system by giving recipients important information and outlining legal requirements.Legal notifications are formal letters that alert recipients to critical information or obligations.</span></b></p>
<img src="june1.avif" width="300" height="300" alt="legal">
<img src="june2.jpeg" width="300" height="300" alt="legal">
<img src="june3.jpg" width="300" height="300" alt="legal">
<img src="june4.jpg" width="300" height="300" alt="legal">
<img src="june5.jpg" width="300" height="300" alt="legal">
<img src="june6.jpg" width="300" height="300" alt="legal">
<img src="june8.avif" width="300" height="300" alt="legal">
<img src="june7.jpg" width="300" height="300" alt="legal">
<button onclick="myFunction()" id="myBtn">Read more</button>

<script>
    function myFunction() {
      var dots = document.getElementById("dots");
      var moreText = document.getElementById("more");
      var btnText = document.getElementById("myBtn");
    
      if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.innerHTML = "Read more"; 
        moreText.style.display = "none";
      } else {
        dots.style.display = "none";
        btnText.innerHTML = "Read less"; 
        moreText.style.display = "inline";
      }
    }
    </script>




<div class="legal-des">
  <p>
    <b>These notices include a wide range of subjects, including the policy's terms and conditions, details on policy renewals, cancellations, and modifications, notices of claim denials or settlements, and legal disclaimers. People can get assistance from our organization in understanding their rights, obligations, and any updates or modifications to their insurance coverage. Our company's policyholders should carefully read these letters to make sure they understand the implications and, if required, seek additional clarification or legal guidance.
    </b>
  </p>
</div>
<?php
        include '../components/footer.php'
    ?>

</body>
</html>