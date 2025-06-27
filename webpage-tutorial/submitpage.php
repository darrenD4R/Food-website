
    <style>
      /* Container for animated content */
      .animation-container-s {
        position: relative;
        max-width: 600px;
        margin: 100px auto;
        padding: 20px;
        text-align: center;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        opacity: 0; /* Initially hidden */
        transform: translateY(-50px); /* Start position above */
        animation: fade-slide-in 2s ease-in-out forwards; /* Trigger animation */
      }

      .h1 {
        color: #0078D4;
        margin-bottom: 10px;
      }

      .p {
        color: #333;
        font-size: 16px;
      }

      /* Keyframes for fade and slide animation */
      @keyframes fade-slide-in {
        0% {
          opacity: 0;
          transform: translateY(-50px);
        }
        100% {
          opacity: 1;
          transform: translateY(0); /* Final position */
        }
      }

    </style>
  </head>
  <body>
      <?php
        $custName = ucfirst($_POST['n']); 
        $custEmail = strtolower($_POST['e']); 
        $custComments = ucwords($_POST['c']);
      ?>


    <div class="animation-container-s">
        <h1 class="h1">Hi, <?php echo $custName; ?> </h1>
        <h4>Your Details are: <br /></h4><br />

        <div class="">
            <span class="text-justify">
                <b>Full Name:</b> <?php echo $custEmail;?> <br />
                <b>Email Address:</b> <?php echo $custComments;?> and <br />
                <b>Comments:</b> <?php echo $custComments;?>.<br /><br />
                These have been Submitted!
            </span>
            <p class="p">Thank you for reaching out.</p>
        </div>
    </div>
    
        

  </body>
</html>



































Hi I'm a computer science student currently doing my SIWES
program in a medical service company and I want to fill my
log book please can you help me write a short report from 
Monday to Wednesday
first, the department i work in had introduced me to the 
company and told me how they run things in the company and 
later took me to the offices of people the department worked 
previously to introduce me to them as their new SIWES student
.secondly, we spoke about programming languages and advised
me to perfect my skills in web development since am not well
sound in that aspect

