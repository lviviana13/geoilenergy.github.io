       <!-- nav -->


       <label for="drop" class="toggle">Menu</label>
       <input type="checkbox" id="drop" />
       <ul class="menu mr-auto center">



           <li class="active"><a href="{{url('/')}}">Inicio</a></li>
           <li>
               <!-- First Tier Drop Down -->
               <label for="drop-2" class="toggle toogle-2">Servicios
                   <span class="fa fa-angle-down" aria-hidden="true"></span></label>
               <a href="#">Servicios <span class="fa fa-angle-down" aria-hidden="true"></span></a>
               <input type="checkbox" id="drop-2" />
               <ul>


                   <li><a href="{{url('/servicios/geoespaciales')}}" class="drop-text">Soluciones
                           Geoespaciales</a></li>

                   <li><a href="{{url('/servicios/geologia')}}" class="drop-text">Soluciones Geología</a></li>
                   <li><a href="{{url('/servicios/geofisica')}}" class="drop-text">Soluciones Geofísica</a>
                   </li>

               </ul>
           </li>
           <li>
               <!-- First Tier Drop Down -->
               <label for="drop-3" class="toggle ">Software<span class="fa fa-angle-down" aria-hidden="true"></span></label>
               <a href="#">Software <span class="fa fa-angle-down" aria-hidden="true"></span></a>
               <input type="checkbox" id="drop-3" />
               <ul>
                   <li><a href="{{url('/software/geosoluciones')}}" class="drop-text">Software Geoespacial</a>
                   </li>
                   <li><a href="{{url('/software/geofisica')}}" class="drop-text">Software Geología y
                           Geofísica</a></li>
               </ul>
           </li>
           <li><a href="{{url('/nosotros')}}">Nosotros</a></li>

           <li><a href="{{url('/contacto')}}">Contacto</a></li>

       </ul>

       <br>
       <!-- //nav -->