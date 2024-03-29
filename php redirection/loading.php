<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Animated Text Below GIF</title>
<style>
    body{
        background: linear-gradient(white,rgb(239, 223, 131),#c70039);
        overflow-x: hidden;
        overflow-y: hidden;

    }
  @keyframes flowAnimation {
    0% { transform: translateX(0); }
    50% { transform: translateX(50px); }
    100% { transform: translateX(0); }
  }

  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 100vh; /* Adjust as needed */
    font-family: Arial, sans-serif;
  }

  .gif {
    max-width: 100%; 
  }

  .text {
    font-size: 24px;
    margin-top: 20px; /* Adjust spacing between the GIF and text */
    animation: flowAnimation 2s ease infinite;
  }
/* Responsive styles for mobile view */
@media screen and (max-width: 768px) {
    
}


</style>
</head>
<body>

<div class="container">
  <figure class="gif">
    <img src="../assets/videos,gif/Home GIF.gif" width="586" height="550" loading="lazy" alt="gif" class="loading-gif">
  </figure>
  <div class="text">Check out <span><?php echo "Your Friend's"; ?></span> website!</div>
</div>

</body>
</html>
