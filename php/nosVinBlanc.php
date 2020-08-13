<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Domaine Vincent</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js" integrity="sha256-qGOnfp7iY6DsnB55K7M+0PZjWCtzafRyJh33tgQJkMQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js" integrity="sha256-+9YNuItWuR4sbqeaNiJOxG0BvptYz4fbUXbIZoH5Jwo=" crossorigin="anonymous"></script>
</head>
<?php include 'NavBar.php'; ?> 
<body>
     
    <div class="NVBdiv">
        <div class="NVBdiv1" ><h2>Lorem ipsum dolor</h2></div>
        <div class="NVBdiv2" id='animate4'><img src="../images/autres/blanc1.jpg" id='imageNVB'><p id="pNVB">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis necessitatibus doloribus corrupti earum dolore in culpa quia debitis aperiam, hic dicta sequi sunt nesciunt possimus.</p></div>
        <div class="NVBdiv2" id='animate5'><img src="../images/autres/blanc2.jpg" id='imageNVB1'><p id="pNVB1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis necessitatibus doloribus corrupti earum dolore in culpa quia debitis aperiam, hic dicta sequi sunt nesciunt possimus.</p></div>
        <div class="NVBdiv2" id='animate6'><img src="../images/autres/blanc3.jpg" id='imageNVB2'><p id="pNVB2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis necessitatibus doloribus corrupti earum dolore in culpa quia debitis aperiam, hic dicta sequi sunt nesciunt possimus.</p></div>

    </div>
    <script src='../js/appAnim.js'></script>
    <script type="text/javascript" src="../js/jquery/mjquery.js"></script>
    <script>
        //rafraichir la page 
        const ecran = window.innerHeight
        var ecranBis = ecran
        function resp(){
            if (ecranBis == window.innerHeight){
                setTimeout(resp, 10);
            }else{
                location.reload(false);
            }
        }
        resp()              
    </script>
</body>
</html>