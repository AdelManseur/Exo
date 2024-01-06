<!DOCTYPE html>
<html>
<head>
  <title>Points with Elements</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anek+Telugu:wght@700&display=swap" rel="stylesheet">
  <style>

    /*Styling for the background*/
    body {
            background-color: #f5f5f5;
    }


    /* Styling for the point */
    .point {
            width: 4px;
            height: 4px;
            background-color: #E0E0E0; /* Change color as needed */
            border-radius: 50%; /* To make it a circle */
            position: absolute; /* To position the points */
            opacity: 0.3;
        }
      

    /*Letting the container 'div' handle all its buttons in one line*/
    .headerContainer{
            display: flex;
        }


    /*styling the Letter 'E' of the Headrer LOGO*/
    .letterEHearderLogoImage{
            width: 20px;
            height: 20px;
            padding-left: 100px;
            padding-top: 15px;
            position: relative;
        }


    /*styling the Letter 'X' of the Headrer LOGO*/
    .letterXHearderLogoImage{
            width: 20px;
            height: 20px;
            padding-top: 15px;
            position: relative;
        }


    /*styling the Letter 'O' of the Headrer LOGO*/
    .letterOHearderLogoImage{
            width: 20px;
            height: 20px;
            padding-top: 15px;
            position: relative;
        }


    /*Styling the 'Get Started' button*/
    .getStartedBtn{
            background: transparent;
            border: none;
            border-radius: 50px;
            margin-left: 500px;
            margin-top: 10px;
            opacity: 0.9;
            cursor: pointer;
        }


    .getStartedBtn img {
            height: 40px;
            weight: 127.41px;
        }


    /*Styling the 'About Us' button*/
    .aboutUsBtn{
            background: #f5f5f5;
            color: #262223;
            border: none;
            border-radius: 50px;
            padding: 5px;
            margin-left: 40px;
            margin-top: 8px;
            cursor: pointer;
            font-size: 20px;
            font-family: 'Anek Telugu', sans-serif;
            position: relative;
        }


    /*Styling the 'Contact' button*/
    .contactBtn{
            background: #f5f5f5;
            color: #262223;
            border: none;
            border-radius: 50px;
            padding: 5px;
            margin-left: 40px;
            margin-top: 8px;
            cursor: pointer;
            font-size: 20px;
            font-family: 'Anek Telugu', sans-serif;
            position: relative;
        }


    /*Styling the 'Network' button*/
    .networkBtn{
            width: 26.15px;
            height: 20px;
            border: none;
            cursor: pointer;
            margin-left: 20px;
            margin-top: 15px;
            position: relative;
        }


    /*Styling the 'Network' button image*/
    .networkBtn img {
            width: 32.69px;
            height: 25px;          
        }


    /*Styling the 'Settings' button*/
    .settingsBtn{
            width: 30px;
            height: 30px;
            border: none;
            cursor: pointer;
            margin-left: 10px;
            margin-left: 30px;
            margin-top: 15px;
            position: relative;
        }

    
    /*Styling the 'Settings' button image*/
    .settingsBtn img {
            width: 25px;
            height: 25px;               
        }


    .contentContainer {
        position: relative;
        } 


    /*Styling the 'Settings' button image*/
    .message {
            font-size: 70px;
            font-family: 'Anek Telugu', sans-serif;
            color: #262223;
            padding-left: 40px;
            position: relative;
            line-height: 0.9;
        }


    /*Styling the Main Logo*/
    .mainLogoImage {
            width: 1256.47px;
            height: 200px;
            transform: translateX(-50%);
            margin-left: 600px;
        }


    .teacherBtn {
            background: transparent;
            border: none;
            border-radius: 50px;
            margin-left: 200px;
            cursor: pointer;
            margin-left: 400px;
            margin-top: 150px;
        }


    .teacherBtn img {
            height: 100px;
            width: 404.76px;
        }


    .studentBtn {
            background: transparent;
            border: none;
            border-radius: 50px;
            margin-left: 200px;
            cursor: pointer;
            margin-left: 400px;
            margin-top: 50px;
        }


    .studentBtn img {
            height: 100px;
            width: 404.76px;
        }

  </style>
</head>
<body>
<script>

    // JavaScript to create points in a loop
    const numberOfPoints = 60; // Powered number of points in one row
    const numberOfRows = 29; // number of rows

    for (let index = 0; index < numberOfRows; index++) {
        for (let i = 0; i < numberOfPoints; i+=2) {
            const pointElement = document.createElement('div');
            pointElement.className = 'point';
            pointElement.style.left = `${(20 * i + 30) / window.innerWidth * 100}vw`;
            pointElement.style.top = `${(20 * index + 15) / window.innerHeight * 100}vh`; // Adjust positioning here
            // Adjust positioning here
            document.body.appendChild(pointElement);
        }
      }

      //Create the container 'div' that contains the three header buttons 
      const headerContainer = document.createElement('div');
      headerContainer.classList.add('headerContainer');


      //upload the Letter 'E' of LOGO as an image
      const letterEHeaderLogoImage = document.createElement('img');
      letterEHeaderLogoImage.classList.add('letterEHearderLogoImage');
      letterEHeaderLogoImage.src = 'images/letterEHeaderLogo.png';
      headerContainer.appendChild(letterEHeaderLogoImage);


      //upload the Letter 'X' of LOGO as an image
      const letterXHeaderLogoImage = document.createElement('img');
      letterXHeaderLogoImage.classList.add('letterXHearderLogoImage');
      letterXHeaderLogoImage.src = 'images/letterXHeaderLogo.png';
      headerContainer.appendChild(letterXHeaderLogoImage);


      //upload the Letter 'O' of LOGO as an image
      const letterOHeaderLogoImage = document.createElement('img');
      letterOHeaderLogoImage.classList.add('letterOHearderLogoImage');
      letterOHeaderLogoImage.src = 'images/letterOHeaderLogo.png';
      headerContainer.appendChild(letterOHeaderLogoImage);


      //Create the 'About Us' button
      const aboutUsBtn = document.createElement('button');
      aboutUsBtn.classList.add('aboutUsBtn');
      aboutUsBtn.innerHTML = "About&nbsp;Us";
      headerContainer.appendChild(aboutUsBtn);


      //Create the 'Contact' button
      const contactBtn = document.createElement('button');
      contactBtn.classList.add('contactBtn');
      contactBtn.innerHTML = "Contact";
      headerContainer.appendChild(contactBtn);


      //Create the 'Get Started' button
      const getStartedBtn = document.createElement('button');
      getStartedBtn.classList.add('getStartedBtn');
      //getStartedBtn.innerHTML = "Get&nbsp;Started";
      getStartedBtn.innerHTML = "<img src='images/GetStarted.png'>";
      headerContainer.appendChild(getStartedBtn);



      //Create the 'Network' button
      const networkBtn = document.createElement('button');
      networkBtn.classList.add('networkBtn');
      networkBtn.innerHTML = "<img src='images/NetworkIcon.png'>";
      headerContainer.appendChild(networkBtn);


      //Create the 'Settings' button
      const settingsBtn = document.createElement('button');
      settingsBtn.classList.add('settingsBtn');
      settingsBtn.innerHTML = "<img src='images/SettingsIcon.png'>";
      headerContainer.appendChild(settingsBtn);


      document.body.appendChild(headerContainer);


      //create the Content Container
      const contentContainer = document.createElement('div');
      contentContainer.classList.add('contentContainer');
      document.body.appendChild(contentContainer);


      //Create the Message
      let message = document.createElement('p');
      message.classList.add('message');
      message.innerHTML = 'Access Your Teacher <br> Exercises, Requests, Calendar...';
      contentContainer.appendChild(message);


      //upload the Main LOGO as an image
      let mainLogoImage = document.createElement('img');
      mainLogoImage.classList.add('mainLogoImage');
      mainLogoImage.src = 'images/MainLogo.png';
      contentContainer.appendChild(mainLogoImage);


      document.body.appendChild(contentContainer);



      let getStartedBtnIsClicked = false;
      let teacherBtn, studentBtn;
      getStartedBtn.addEventListener('click', function(){
        
        if (!getStartedBtnIsClicked) {
            //Remove the Logo Image
            mainLogoImage.remove();
            //Remove the Message
            message.remove();


            //Create 'Teacher' button
             teacherBtn = document.createElement('button');
            teacherBtn.classList.add('teacherBtn');
            teacherBtn.innerHTML = '<img src="images/ImATeacher.png">';
            contentContainer.appendChild(teacherBtn);


            //Create 'Student' button
             studentBtn = document.createElement('button');
            studentBtn.classList.add('studentBtn');
            studentBtn.innerHTML = '<img src="images/ImAStudent.png">';
            contentContainer.appendChild(studentBtn);



            getStartedBtn.innerHTML = "<img src='images/Back.png'>";



            getStartedBtnIsClicked = true;
        }



        else{

            teacherBtn.remove();
            studentBtn.remove();


            getStartedBtn.innerHTML = "<img src='images/GetStarted.png'>";


            //Create the Message
             message = document.createElement('p');
            message.classList.add('message');
            message.innerHTML = 'Access Your Teacher <br> Exercises, Requests, Calendar...';
            contentContainer.appendChild(message);


            //upload the Main LOGO as an image
             mainLogoImage = document.createElement('img');
            mainLogoImage.classList.add('mainLogoImage');
            mainLogoImage.src = 'images/MainLogo.png';
            contentContainer.appendChild(mainLogoImage);



            getStartedBtnIsClicked = false;
        }
      }
      );
  </script>
</body>
</html>