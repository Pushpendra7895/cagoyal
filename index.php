<?php

    $con=new mysqli('localhost','root','','crud');

if(!$con)
{
    die(mysqli_error($con));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body contenteditable="false">
     <section class="header">
        <nav>
            <a href="index.html">
                <img src="image/Logo.png" alt="">
            </a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="Home">Home</a></li>
                    <li><a href="About Us">About Us</a></li>
                    <li><a href="Contact Us">Contact Us</a></li>
                    <li><a href="team.php">Our Team</a></li>
                    <li><a href="Our Services">Our Services</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1>Welcome to <span> Aditya Goel & Co,
              <br>
            </span>Chartered Accountants</h1>
        </div>
     </section>
     <section class="about">
        <h1>About Us</h1>
<div class="row">
<div class="about-col">
<p><strong> Aditya Goel & Co, established in the year 2020, is a Noida-based CA Firm.</strong>
<br>Aditya Goel & Co is a professionally managed firm which offers wide range of professional 
services under one roof which includes New Business Registration, Bookkeeping & Accounting, Auditing & Ass
urance, Income Tax, Goods & Services Tax (GST), Secretarial Compliances, Trademarks, Financial Analysis & MIS Reporting
, Certifications and etc. Our clients include Private Limited Companies, Charitable Trusts, Section 8 Companies (NPO), 
Individuals, Partnership Firms & NRI’s. Our primary focus is on value addition to the clients by deliver
ing them highest quality of services in an accurate, timely and relevant manner. We are committed towards maintaining 
the highest level of integrity, objectivity, confidentiality, professional competence and due care. Our professional approac
h blended with personal care has earned us enormous confidence of all our clients, which is reflected in an enduring pr
ofessional relationship that we enjoy with them as also in the consistent growth in portfolio and reach of our services
</p> 
</div>
<div class="about-col">
<i aria-hidden="true" class="fas fa-star"><h2>Value addition</h2></i><br><br>
<i aria-hidden="true" class="fas fa-calculator"><h2>High Quality Services</h2></i><br><br>
<i aria-hidden="true" class="fas fa-business-time"><h2>Punchuality</h2></i>
</div>
</div>
 </section>
 <section class="our-team">
    <h1>Our Team</h1>
    <div class="row1">
        <div class="team-col">
        <img src="image/Aditya-Goel.webp" alt="target">
      <h4>CA Aditya Goel | Founder FCA,B.Com(H)</h4>
  <p>Aditya Goel is a fellow member of the Institute of Chartered
        Accountants of India (ICAI), qualified as a Chartered Accountant
         in the year 2011 and a commerce graduate from Delhi University with 
         over 12 years of experience. He has worked with professionally managed 
         corporates in capacity as a consultant. He has rich experience of handling 
         corporate affairs in different areas for over a decade.</p>
        </div>
   <div class="team-col">
    <img src="image/manjeet-sharma.webp" alt="target">
<h4>Manjeet Sharma | Consultant MBA in Finance</h4>
<p>Manjeet Sharma is a highly skilled Finance Consultant with over 17 years of 
experience. Exceptional track record in all aspects of Bookkeeping & Accounting,
Goods & Services Tax (GST),TDS, Reconciliations, ESI/PF matters and other compliances.
</p>
</div> 
<div class="team-col">
    <img src="image/Bharat_Gulati.webp" alt="target">
<h4>CS Bharat Gulati | Consultant Company Secretary</h4>
 <p> Bharat Gulati is a Company Secretary in Practice having experience of more than 
12 years in secretarial services, holding membership with the prestigious
Institute of Company Secretaries of India (ICSI).Bharat has
amassed extensive experience in the field of corporate secretarial practices.
and has served clients ranging from small-scale enterprises to large
multinational corporations.</p>
</div>    
</div>
<div class="d-none d-lg-block" id="Services">
    <div class="container-5">
           <div class="section-title">
             <h2>Our Services</h2>
        </div>
        <div class="row2">
            <div class="col-lg-4 col-sm-12 col-12">
            <div class="blue">
            <img src="image/5.webp" alt="Website Designing" />
            <h3>New Business Registration</h3>
            <p>Individual Proprietorship | Partnership Firm |
              Private Limited Company | 
              Charitable Trust | Section 8 Company (NPO)</p>
                </div>
            </div>
            
            <div class="col-lg-4 col-sm-12 col-12">
            <div class="green">
            <img src="image/6.webp" alt="Ecommerce Website Design" />
      <h3>One Stop Startup Services</h3>
       <p>Incorporation | Registrations | Bookkeeping & Accounting | GST Compliances |
         TDS Compliances | Income Tax Compliances |ROC Compliances |
          Payroll Services | Auditing | Financial Analysis| MIS Reports</p>
        </div>
        </div>
    <div class="col-lg-4 col-sm-12 col-12">
            <div class="navi-blue">
            <img src="image/7.webp" alt="SEO Services" />
            <h3>Bookkeeping & Accounting</h3>
         <p>Individual Proprietors | Partnership Firm |
         Private Limited Company | Charitable Trust | Section 8 Company (NPO)</p>
            </div>
        </div>
    </div>
<div class="row2">
            <div class="col-lg-4 col-sm-12 col-12">
            <div class="orange">
             <img src="image/8.webp" alt="Responsive Website Design" />
             <h3>Income Tax</h3>
    <p>Consultancy | Tax Returns Preparation & Filing | 
      Tax Planning | Income Tax Audits</p>       
            </div>
            </div>
            
      <div class="col-lg-4 col-sm-12 col-12">
            <div class="light-blue">
            <img src="image/9.webp" alt="SMO Services" />
            <h3>Goods & Services Tax (GST)</h3>
      <p>Registration | Compliances | LUT for Exporters | Replies to GST Department | GST Audit</p>
      
        </div>
            </div>
            
            <div class="col-lg-4 col-sm-12 col-12">
            <div class="red">
            <img src="image/10.webp" alt="Mobile Apps Development" />
            <h3>Audit & Attestation</h3>
       <p>Statutory Audit | Internal Audit| Income Tax u/s 44AB |
         Income Tax Audit of NGO ((Form 10B)) | GST Audit | Independent Audit.
     </p>
        </div>
            </div>
    </div>
    <div class="row2">
            <div class="col-lg-4 col-sm-12 col-12">
            <div class="emailer-design">
              <img src="image/11.webp" alt="Emailer Design" />
              <h3>Company Law Matters</h3>
       <p>Formation of Company | Secretarial Compliances | 
        ROC Mattes | XBRL Filings | Company Winding Up</p>  
                </div>
            </div>
<div class="col-lg-4 col-sm-12 col-12">
            <div class="logo-design">
            <img src="image/12.webp" alt="Logo Design" />
            <h3>Services to Charitable Trusts</h3>
       <p>Accounting | Documentation | Donation Tracker | 
        Statement of Donation (Form 10BD) | Income Tax Audit (Form 10B)</p>       
      </div>
            </div>
            
            <div class="col-lg-4 col-sm-12 col-12">
            <div class="magazine-design">
            <img src="image/13.webp" alt="Magazine Design" />
            <h3>Certifications</h3>
       <p>Net Worth Certificate | Fixed Asset Certificate | Capital Gain Certificate | 15CB & Etc.</p>
                      </div>
            </div>
            </div>
            <div class="row2">
            <div class="col-lg-4 col-sm-12 col-12">
            <div class="emailer-design">
              <img src="image/14.webp" alt="Emailer Design" />
             <h3>Corporate Finance</h3>
       <p>Financial Analysis| Variance Analysis | MIS Reports | Dashboards</p></div>
            </div>
            
            <div class="col-lg-4 col-sm-12 col-12">
            <div class="logo-design">
            <img src="image/15.webp" alt="Logo Design" />
            <h3>Payroll Services</h3>
       <p>Defining CTC Structure | Monthly Salary Computation |
         TDS Compliances | Filing Taxes | Reimbursements | Pay slips & Etc.</p></div>
            </div>
<div class="col-lg-4 col-sm-12 col-12">
    <div class="magazine-design">
      <img src="image/16.webp" alt="Magazine Design"/>
      <h3>Misc. Services</h3>
          <p>PAN | TAN | Trademark Registration | Digital Signature Tokens (DSC) & Etc.</p>        
  </div>
            </div>
</div>
</div>  
</section>
 <section>
    <div class="contact" id="Contact Us">
        <div class="d1">
           <h1>Contact Us</h1>
        </div>
        <div class="d2">
        <div>
          <iframe src="https://maps.google.com/maps?q=Aditya%20Goel%20%26%20Co&#038;t=m&#038;z=15&#038;output=embed&#038;iwloc=near" title="Aditya Goel &amp; Co" aria-label="Aditya Goel &amp; Co">
          </iframe>
        </div>
        <div>
          <address>
            <ul>
                <li><i class="fas fa-phone-alt">&nbsp;&nbsp;<span>+91-817-888-3995</span></i></li>
                <hr>
                <li>
                <i aria-hidden="true" class="fas fa-envelope">&nbsp;&nbsp;<span>ag@caadityagoel.in</span></i>
                </li>
                <hr>
                <li>
                <i class="fas fa-location-arrow">&nbsp;&nbsp;<span>A 5, A Block, Sector 65, Noida, <br> Uttar Pradesh (201301)</span></i>
                </li>
                <hr>
                <li>
                <i class="fas fa-clock">&nbsp;&nbsp;<span>10 am – 7 pm , Sunday closed</span></i>
                </li> 
              </ul>
          </address>
        </div>
      </div>
      </div>
    <div class="navigator">
        <a href="">
          <i aria-hidden="true" class="fa fa-arrow-up" id="arrow"></i>
        </a>
      </div>
        <div class="whatsapp_float">
          <a href="https://wa.me/7895532495" target="_blank"><img src="image/icon.png" width="50px" class="whatsapp_float_btn/">
          </a>
        </div>
     <footer>
      <h5>Copyright © 2023 caadityagoel.in</h5>
      <h5>Proudly Created by Pixabulous Designs</h5>
     </footer>
 </section>
     <script>
        var navLinks=document.getElementById("navLinks");
        function showMenu(){
            navLinks.style.right="0";
        }
        function hideMenu(){
            navLinks.style.right="-300px";
        }
     </script>
</body>
</html>