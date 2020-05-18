<head>
  
  <style>
  @import url(https://fonts.googleapis.com/css?family=Montserrat);
html,
body {
  width: 100%;
  height: 100%;
  color: #404040;
  font-family: "Montserrat";
  overflow: hidden;
}

a {
  text-decoration: none;
  color: gray;
}

#hero {
  height: 100%;
  width: 100%;
  overflow: hidden;
}

/* Chrome, Safari, Opera */
@-webkit-keyframes zoom {
  from {
    -webkit-transform: scale(1, 1);
  }
  to {
    -webkit-transform: scale(1.5, 1.5);
  }
}
/* Standard syntax */
@keyframes zoom {
  from {
    transform: scale(1, 1);
  }
  to {
    transform: scale(1.5, 1.5);
  }
}
.bg {
  overflow: hidden;
  width: 100%;
  height: 100%;
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://images.unsplash.com/photo-1450101215322-bf5cd27642fc?crop=entropy&fit=crop&fm=jpg&h=725&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1300");
  background-size: cover;
  background-repeat: none;
  -webkit-animation: zoom 20s;
  /* Chrome, Safari, Opera */
  animation: zoom 20s;
}

.header-text {
  cursor: pointer;
  text-align: center;
  font-weight: 900;
  color: white;
  font-size: 12px;
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.header-text span {
  font-size: 64px;
  text-transform: uppercase;
}
.header-text a {
  color: white;
}

#hero {
  color: white;
}
#hero small {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  padding: 10px;
}

#text {
  padding: 20px 25%;
  box-sizing: border-box;
}

  </style>  
  <script>
  //need JS to keep header text from overlaying section.text because of header's absolute positioning
(function () {
  const headerText = document.getElementById("header");
  const linkToTop = [].slice.call(
  document.getElementsByClassName("link-to-top"));


  headerText.addEventListener("click", function () {
    headerText.style.opacity = 0;
  });

  linkToTop.forEach(function (link) {
    link.addEventListener("click", function () {
      headerText.style.opacity = 1;
    });
  });
})();
  
  </script>

</head>

  

<section id="hero">
  <small><a class="link-to-top" href="#hero">Full Page effect</a></small>
  <div class="bg">
    <h1 id="header" class="header-text">
      <a href="#text">
        <span>Ken Burns</span>
        <br>
        click to scroll down
      </a>
    </h1>
  </div>
</section>
<section id="text">
  <a class="link-to-top" href="#hero">Back to top</a>
  <h1>Ken Burns</h1>
  <p>The Ken Burns effect is a type of panning and zooming effect used in video production from still imagery.
  <p>The name derives from extensive use of the technique by American documentarian Ken Burns. The technique predates his use of it, but his name has become associated with the effect in much the same way as Alfred Hitchcock is associated with the dolly zoom.</p>
  <p>The feature enables a widely used technique of embedding still photographs in motion pictures, displayed with slow zooming and panning effects, and fading transitions between frames.</p>
</section>
