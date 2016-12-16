@extends('layouts.layoutgaleria')
@section('content')
    {!! Html::style('css/galeria.css') !!}

    <div class="panel panel-heading container text-center">
        <h3>Disfruta de nuestra galería de fotos y vídeos del acontecer de nuestra institución.</h3>

    <div class="panel-body">
        <div class="row">
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria1.jpg"  id="myImg" >
                </a>
            </div>
            <div class="col-xs-6 col-md-2">
                <a href="#" class="thumbnail">
                    <img  src="img/galeria/galeria2.jpg"  id="myImg2">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria3.jpg"  id="myImg3" width="300" height="200">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria4.jpg"  id="myImg4" width="300" height="200">
                </a>
            </div>
        </div>
    </div>

        <hr class="divider">

        <div class="panel-body">
            <div class="row">
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria5.jpg"  id="myImg5" width="300" height="200">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria6.jpg"  id="myImg6" width="300" height="200">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria7.jpg"  id="myImg7" width="300" height="200">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria8.jpg"  id="myImg8" width="300" height="200">
                </a>
            </div>
            </div>
        </div>

        <hr class="divider">

        <div class="panel-body">
            <div class="row">
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria9.jpg"  id="myImg9" width="300" height="200">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria10.jpg"  id="myImg10" width="300" height="200">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria11.jpg"  id="myImg11" width="300" height="200">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria12.jpg"  id="myImg12" width="300" height="200">
                </a>
            </div>
            </div>
        </div>

        <hr class="divider">

        <div class="panel-body">
            <div class="row">
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria13.jpg"  id="myImg13" width="300" height="200">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria14.jpg"  id="myImg14" width="300" height="200">
                </a>
            </div>
            <div class="col-xs-6 col-md-2">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria15.jpg"  id="myImg15" width="300" height="200">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria16.jpg"  id="myImg16" width="300" height="200">
                </a>
            </div>
            </div>
        </div>

        <hr class="divider">

            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria17.jpg"  id="myImg17" width="300" height="200">
                </a>
            </div>
            <div class="col-xs-6 col-md-3">
                <a href="#" class="thumbnail">
                    <img src="img/galeria/galeria18.jpg"  id="myImg18" width="300" height="200">
                </a>
            </div>
        </div>
    </div>
    </div>
    <!-- The Modal -->
    <div id="myModal" class="modal">

        <!-- The Close Button -->
        <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="galeria1">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>
    <!-- The Modal -->
    <div id="myModal2" class="modal">

        <!-- The Close Button -->
        <span class="close" onclick="document.getElementById('myModal2').style.display='none'">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="galeria2">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>
    <!-- The Modal -->
    <div id="myModal3" class="modal">

        <!-- The Close Button -->
        <span class="close" onclick="document.getElementById('myModal3').style.display='none'">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="galeria3">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>
    <!-- The Modal -->
    <div id="myModal4" class="modal">

        <!-- The Close Button -->
        <span class="close" onclick="document.getElementById('myModal4').style.display='none'">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="galeria4">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>
    <!-- The Modal -->
    <div id="myModal5" class="modal">

        <!-- The Close Button -->
        <span class="close" onclick="document.getElementById('myModal5').style.display='none'">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="galeria5">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>
    <!-- The Modal -->
    <div id="myModal6" class="modal">

        <!-- The Close Button -->
        <span class="close" onclick="document.getElementById('myModal6').style.display='none'">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="galeria6">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>
    <!-- The Modal -->
    <div id="myModal7" class="modal">

        <!-- The Close Button -->
        <span class="close" onclick="document.getElementById('myModal7').style.display='none'">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="galeria7">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>
    <!-- The Modal -->
    <div id="myModal8" class="modal">

        <!-- The Close Button -->
        <span class="close" onclick="document.getElementById('myModal8').style.display='none'">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="galeria8">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>
    <!-- The Modal -->
    <div id="myModal9" class="modal">

        <!-- The Close Button -->
        <span class="close" onclick="document.getElementById('myModal9').style.display='none'">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="galeria9">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>
    <!-- The Modal -->
    <div id="myModal10" class="modal">

        <!-- The Close Button -->
        <span class="close" onclick="document.getElementById('myModal10').style.display='none'">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="galeria10">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>
    <!-- The Modal -->
    <div id="myModal11" class="modal">

        <!-- The Close Button -->
        <span class="close" onclick="document.getElementById('myModal11').style.display='none'">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="galeria11">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>
    <!-- The Modal -->
    <div id="myModal12" class="modal">

        <!-- The Close Button -->
        <span class="close" onclick="document.getElementById('myModal12').style.display='none'">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="galeria12">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>
    <!-- The Modal -->
    <div id="myModal13" class="modal">

        <!-- The Close Button -->
        <span class="close" onclick="document.getElementById('myModal13').style.display='none'">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="galeria13">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>
    <!-- The Modal -->
    <div id="myModal14" class="modal">

        <!-- The Close Button -->
        <span class="close" onclick="document.getElementById('myModal14').style.display='none'">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="galeria14">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>
    <!-- The Modal -->
    <div id="myModal15" class="modal">

        <!-- The Close Button -->
        <span class="close" onclick="document.getElementById('myModal15').style.display='none'">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="galeria15">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>
    <!-- The Modal -->
    <div id="myModal16" class="modal">

        <!-- The Close Button -->
        <span class="close" onclick="document.getElementById('myModal16').style.display='none'">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="galeria16">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>
    <!-- The Modal -->
    <div id="myModal17" class="modal">

        <!-- The Close Button -->
        <span class="close" onclick="document.getElementById('myModal17').style.display='none'">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="galeria17">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>
    <!-- The Modal -->
    <div id="myModal18" class="modal">

        <!-- The Close Button -->
        <span class="close" onclick="document.getElementById('myModal18').style.display='none'">&times;</span>

        <!-- Modal Content (The Image) -->
        <img class="modal-content" id="galeria18">

        <!-- Modal Caption (Image Text) -->
        <div id="caption"></div>
    </div>
    <script>
        // Get the modal
        var modal = document.getElementById('myModal');
        var modal2 = document.getElementById('myModal2');
        var modal3 = document.getElementById('myModal3');
        var modal4 = document.getElementById('myModal4');
        var modal5 = document.getElementById('myModal5');
        var modal6 = document.getElementById('myModal6');
        var modal7 = document.getElementById('myModal7');
        var modal8 = document.getElementById('myModal8');
        var modal9 = document.getElementById('myModal9');
        var modal10 = document.getElementById('myModal10');
        var modal11 = document.getElementById('myModal11');
        var modal12 = document.getElementById('myModal12');
        var modal13 = document.getElementById('myModal13');
        var modal14 = document.getElementById('myModal14');
        var modal15 = document.getElementById('myModal15');
        var modal16 = document.getElementById('myModal16');
        var modal17 = document.getElementById('myModal17');
        var modal18 = document.getElementById('myModal18');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('myImg');
        var modalImg = document.getElementById("galeria1");
        var img2 = document.getElementById('myImg2');
        var modalImg2 = document.getElementById("galeria2");
        var img3 = document.getElementById('myImg3');
        var modalImg3 = document.getElementById("galeria3");
        var img4 = document.getElementById('myImg4');
        var modalImg4 = document.getElementById("galeria4");
        var img5 = document.getElementById('myImg5');
        var modalImg5 = document.getElementById("galeria5");
        var img6 = document.getElementById('myImg6');
        var modalImg6 = document.getElementById("galeria6");
        var img7 = document.getElementById('myImg7');
        var modalImg7 = document.getElementById("galeria7");
        var img8 = document.getElementById('myImg8');
        var modalImg8 = document.getElementById("galeria8");
        var img9 = document.getElementById('myImg9');
        var modalImg9 = document.getElementById("galeria9");
        var img10 = document.getElementById('myImg10');
        var modalImg10 = document.getElementById("galeria10");
        var img11 = document.getElementById('myImg11');
        var modalImg11 = document.getElementById("galeria11");
        var img12 = document.getElementById('myImg12');
        var modalImg12 = document.getElementById("galeria12");
        var img13 = document.getElementById('myImg13');
        var modalImg13 = document.getElementById("galeria13");
        var img14 = document.getElementById('myImg14');
        var modalImg14 = document.getElementById("galeria14");
        var img15 = document.getElementById('myImg15');
        var modalImg15 = document.getElementById("galeria15");
        var img16 = document.getElementById('myImg16');
        var modalImg16 = document.getElementById("galeria16");
        var img17 = document.getElementById('myImg17');
        var modalImg17 = document.getElementById("galeria17");
        var img18 = document.getElementById('myImg18');
        var modalImg18 = document.getElementById("galeria18");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }
        img2.onclick = function(){
            modal2.style.display = "block";
            modalImg2.src = this.src;
            captionText.innerHTML = this.alt;
        }
        img3.onclick = function(){
            modal3.style.display = "block";
            modalImg3.src = this.src;
            captionText.innerHTML = this.alt;
        }
        img4.onclick = function(){
            modal4.style.display = "block";
            modalImg4.src = this.src;
            captionText.innerHTML = this.alt;
        }
        img5.onclick = function(){
            modal5.style.display = "block";
            modalImg5.src = this.src;
            captionText.innerHTML = this.alt;
        }
        img6.onclick = function(){
            modal6.style.display = "block";
            modalImg6.src = this.src;
            captionText.innerHTML = this.alt;
        }
        img7.onclick = function(){
            modal7.style.display = "block";
            modalImg7.src = this.src;
            captionText.innerHTML = this.alt;
        }
        img8.onclick = function(){
            modal8.style.display = "block";
            modalImg8.src = this.src;
            captionText.innerHTML = this.alt;
        }
        img9.onclick = function(){
            modal9.style.display = "block";
            modalImg9.src = this.src;
            captionText.innerHTML = this.alt;
        }
        img10.onclick = function(){
            modal10.style.display = "block";
            modalImg10.src = this.src;
            captionText.innerHTML = this.alt;
        }
        img11.onclick = function(){
            modal11.style.display = "block";
            modalImg11.src = this.src;
            captionText.innerHTML = this.alt;
        }
        img12.onclick = function(){
            modal12.style.display = "block";
            modalImg12.src = this.src;
            captionText.innerHTML = this.alt;
        }
        img13.onclick = function(){
            modal13.style.display = "block";
            modalImg13.src = this.src;
            captionText.innerHTML = this.alt;
        }
        img14.onclick = function(){
            modal14.style.display = "block";
            modalImg14.src = this.src;
            captionText.innerHTML = this.alt;
        }
        img15.onclick = function(){
            modal15.style.display = "block";
            modalImg15.src = this.src;
            captionText.innerHTML = this.alt;
        }
        img16.onclick = function(){
            modal16.style.display = "block";
            modalImg16.src = this.src;
            captionText.innerHTML = this.alt;
        }
        img17.onclick = function(){
            modal17.style.display = "block";
            modalImg17.src = this.src;
            captionText.innerHTML = this.alt;
        }
        img18.onclick = function(){
            modal18.style.display = "block";
            modalImg18.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }
    </script>
@stop