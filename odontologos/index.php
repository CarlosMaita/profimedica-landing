<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- agregar favicon -->
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png" />
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- or link to the CDN -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="../style.css">
    <!-- Carousel   -->
    <link rel="stylesheet" href="../assets/lib/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/lib/owlcarousel/assets/owl.theme.default.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- owl carousel js -->
    <script src="../assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- animaciones -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Profimédica para Odontólogos</title>
</head>
<body>
<main class="container-fluid overflow-hidden">
    <!-- mostrar el video  -->
    <section class="flex  h-screen z-10 w-full" id="main">      <!-- The video -->
      <video autoplay muted loop  preload="none" id="myVideo"
        class="h-auto object-cover w-full min-w-full min-h-full -z-10 xl:opacity-40">
        <source src="../assets/videos/video-home.mp4" type="video/mp4">
      </video>
      <div class="z-40 absolute w-full items-center  h-screen top-1/3" >
        <img class="text-center w-1/2 xl:w-1/3 mx-auto my-auto"  src="../assets/img/Logo-Profimedica-white.png" alt="logo">
      </div>
    </section>
    <!-- fin del video -->

    <!-- Productos fotona -->
    <section class="py-10 md:py-20">
        <div class="block px-5 space-y-5 xl:w-1/2 xl:mx-auto">
            <img class="w-1/2 mx-auto xl:w-1/3" src="../assets/img/logo-fotona.png" alt="logo fotona">
            <p class="text-base md:text-2xl font-medium text-center ">
            Somos representantes exclusivos de FOTONA,<br>
            la marca fabricante de tecnología médica  <br>
            láser más reconocida en el mundo. 
            </p>
            <img class="mx-auto" src="../assets/img/barra-roja.svg" alt="barra">
        </div>
        <div class="xl:flex xl:align-middle items-center">
          <div class="block text-center xl:w-1/2">
              <img class="w-full" src="../assets/img/lightwalker.png" alt="lightwalker" >
          </div>
          <div class="block px-8 space-y-5 md:pb-10 xl:w-1/2">
              <h2 class="text-center text-3xl md:text-4xl  font-bold">LightWalker</h2>
              <img class="mx-auto" src="../assets/img/barra-purpura.svg" alt="barra">
              <p class="text-base md:text-2xl font-medium text-center ">
                El más completo. Su diseño e ingeniería lo <br class="hidden md:block">
                califican como el láser de Erbium de corte <br class="hidden md:block">
                más rápido del mundo. Incluso supera a las <br class="hidden md:block">
                fresas rotativas en términos de velocidad y <br class="hidden md:block">
                precisión. 
              </p>
          </div>
        </div>

        <div class="xl:flex xl:align-middle items-center xl:flex-row-reverse">
          <div class="block text-center xl:w-1/2">
              <img class="w-full" src="../assets/img/skypulse.png" alt="skypulse">
          </div>
          <div class="block px-8 space-y-5 md:pb-10 xl:w-1/2">
              <h2 class="text-center text-3xl md:text-4xl font-bold">SkyPulse®</h2>
              <img class="mx-auto" src="../assets/img/barra-purpura.svg" alt="barra">
              <p class="text-base md:text-2xl font-medium text-center ">
                  Es una nueva generación de láseres dentales<br class="hidden md:block">
                  de Fotona compactos y portátiles. Es un láser <br class="hidden md:block">
                  Er:YAG de 2940 nm para proporcionar una amplia <br class="hidden md:block">
                  gama de tratamientos efectivos y seguros.
              </p>
          </div>
        </div>
    </section>
    <!-- fin de productos fotona -->
    
    <!-- cta  -->
    <section class="md:flex xl:flex-row-reverse">
          <div class="block md:w-1/2 md:flex xl:w-1/5">
              <img class="object-cover object-left  w-full" src="../assets/img/sonrisa.png" alt="sonrisa">
          </div>
          <div class="block  md:w-1/2 xl:w-4/5 bg-[#33557B] py-20 px-10 text-white text-center">
              <p class="text-base md:text-2xl pb-10 font-medium">
                Descubre por qué la odontología láser escala rápidamente<br class="hidden md:block">
                en la preferencia de tus colegas en todo el mundo.</p>
              <button class="font-bold border-2  border-white px-10 py-3 rounded-full md:text-2xl hover:bg-white hover:text-[#33557B]"  onclick="desplazarAFormulario()" >Cotiza tu Equipo</button>
          </div>
    </section>
    <!-- fin de cta -->

      <!-- Productos trilase & Unilase -->
      <section class="py-10 md:py-20">
        <div class="block px-8 space-y-5 xl:w-1/2 xl:mx-auto">
            <img class="w-4/5 mx-auto xl:w-1/2" src="../assets/img/logo-trilase.png" alt="logo trilase & unilase" >
            <p class="text-base md:text-2xl font-medium text-center ">
            TRILASE y UNILASE son nuestros exclusivos láseres <br class="hidden md:block">
            de diodo para tratar tejidos blandos. Estos equipos <br class="hidden md:block">
            permiten realizar hasta 58 tratamientos en 8 categorías. <br class="hidden md:block">
            TRILASE Y UNILASE adoptan la evolución tecnológica <br class="hidden md:block">
            que cada paciente agradecerá.
            </p>
            <img class="mx-auto" src="../assets/img/barra-azul-gris.svg" alt="barra">
        </div>
        <div class="xl:flex xl:align-middle items-center">
          <div class="block text-center xl:w-1/2">
              <img class="w-full" src="../assets/img/trilase.png" alt="trilase" >
          </div>
          <div class="block px-8 space-y-5 text-center xl:w-1/2">
              <h2 class="text-3xl md:text-4xl font-bold">Trilase</h2>
              <img class="mx-auto" src="../assets/img/barra-purpura.svg" alt="barra">
              <p class="text-base md:text-2xl font-medium ">
                Una unidad, y tres láseres a disposición del <br class="hidden md:block">
                odontólogo. Cuenta con dos longitudes de onda <br class="hidden md:block">
                visible (azul y rojo) y una infrarroja y su <br class="hidden md:block">
                peso total es de 2 kg.
              </p>
              <p class="font-bold  md:text-2xl">450nm | 650 nm | 980nm</p>
          </div>
        </div>

        <div class="xl:flex xl:align-middle items-center xl:flex-row-reverse" >
          <div class="block text-center xl:w-1/2">
              <img class="w-full" src="../assets/img/unilase.png" alt="unilase">
          </div>
          <div class="block px-8 space-y-5 text-center md:pb-10 xl:w-1/2">
              <h2 class=" text-3xl md:text-4xl font-bold">Unilase</h2>
              <img class="mx-auto" src="../assets/img/barra-purpura.svg" alt="barra">
              <p class="text-base  md:text-2xl font-medium">
                Es una poderosa unidad que ofrece hasta 10 W  <br class="hidden md:block">
                de potencia que también ofrece distintos modos <br class="hidden md:block">
                de operatividad para comodidad del odontólogo. <br class="hidden md:block">
                Su longitud de onda infrarroja es la más <br class="hidden md:block">
                eficiente para cortes profundos y coagulación.
              </p>
              <p class="font-bold  md:text-2xl">980nm</p>
          </div>
        </div>
    </section>
    <!-- fin de productos fotona -->
    <!-- tipos de laser -->
    <section class="py-10 xl:pb-20">
        <h2 class="text-center font-bold text-3xl md:text-4xl pt-10">Tipos de láser</h2>
        <div class=" xl:flex xl:justify-around xl:items-center">
          <!-- laser azul -->
          <div class="text-center space-y-5 px-10 pt-10">
            <svg class="w-full" width="81" height="81" viewBox="0 0 81 81" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="hover:fill-blue-600" d="M0.601562 40.2275C0.601562 18.1362 18.5102 0.227539 40.6016 0.227539C62.693 0.227539 80.6016 18.1362 80.6016 40.2275C80.6016 62.3189 62.693 80.2275 40.6016 80.2275C18.5102 80.2275 0.601562 62.3189 0.601562 40.2275Z" fill="#718EAF"/>
            <path d="M34.3519 42.3112L26.0186 48.5612C23.9353 50.3945 23.6436 52.9779 23.9353 54.8112C24.2061 56.8945 25.8311 59.4362 28.1019 60.3945C31.3728 61.7904 34.5394 60.8529 36.5186 58.8112L55.1853 42.3112C59.0603 39.4362 57.2686 33.9779 53.1019 33.9779H40.6019L56.1436 24.832C57.0603 24.1654 57.4353 23.1862 57.3936 22.2487C57.2686 20.7904 56.1436 19.3945 54.3519 19.3945H54.2269C53.4978 19.3945 52.8103 19.6237 52.1853 19.9987L26.0186 33.9779C24.3311 34.9362 23.8103 36.5612 23.9353 38.1445C24.0394 40.2904 25.4769 42.3112 28.1019 42.3112M26.0186 53.7695C26.0186 52.3882 26.5673 51.0634 27.5441 50.0867C28.5208 49.1099 29.8456 48.5612 31.2269 48.5612C32.6083 48.5612 33.933 49.1099 34.9098 50.0867C35.8865 51.0634 36.4353 52.3882 36.4353 53.7695C36.4353 55.1509 35.8865 56.4756 34.9098 57.4524C33.933 58.4291 32.6083 58.9779 31.2269 58.9779C29.8456 58.9779 28.5208 58.4291 27.5441 57.4524C26.5673 56.4756 26.0186 55.1509 26.0186 53.7695Z" fill="white"/>
            </svg>
            <h3 class="font-bold  md:text-2xl">Láser Azul | 450nm</h3>
            <p class="md:text-2xl"> 
              Cortes y coagulación de forma <br>
              más rápida, limpia y cómoda. </p>
            <img  class="mx-auto" src="../assets/img/barra-laser-azul.svg" alt="barra laser azul">
          </div>
  
          <!-- laser rojo  -->
          <div class="text-center space-y-5 px-10 pt-10">
            <svg class="w-full " width="81" height="81" viewBox="0 0 81 81" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="hover:fill-red-600" d="M0.601562 40.2275C0.601562 18.1362 18.5102 0.227539 40.6016 0.227539C62.693 0.227539 80.6016 18.1362 80.6016 40.2275C80.6016 62.3189 62.693 80.2275 40.6016 80.2275C18.5102 80.2275 0.601562 62.3189 0.601562 40.2275Z" fill="#718EAF"/>
            <path d="M34.3519 42.3112L26.0186 48.5612C23.9353 50.3945 23.6436 52.9779 23.9353 54.8112C24.2061 56.8945 25.8311 59.4362 28.1019 60.3945C31.3728 61.7904 34.5394 60.8529 36.5186 58.8112L55.1853 42.3112C59.0603 39.4362 57.2686 33.9779 53.1019 33.9779H40.6019L56.1436 24.832C57.0603 24.1654 57.4353 23.1862 57.3936 22.2487C57.2686 20.7904 56.1436 19.3945 54.3519 19.3945H54.2269C53.4978 19.3945 52.8103 19.6237 52.1853 19.9987L26.0186 33.9779C24.3311 34.9362 23.8103 36.5612 23.9353 38.1445C24.0394 40.2904 25.4769 42.3112 28.1019 42.3112M26.0186 53.7695C26.0186 52.3882 26.5673 51.0634 27.5441 50.0867C28.5208 49.1099 29.8456 48.5612 31.2269 48.5612C32.6083 48.5612 33.933 49.1099 34.9098 50.0867C35.8865 51.0634 36.4353 52.3882 36.4353 53.7695C36.4353 55.1509 35.8865 56.4756 34.9098 57.4524C33.933 58.4291 32.6083 58.9779 31.2269 58.9779C29.8456 58.9779 28.5208 58.4291 27.5441 57.4524C26.5673 56.4756 26.0186 55.1509 26.0186 53.7695Z" fill="white
            "/>
            </svg>
            <h3 class="font-bold  md:text-2xl">Láser Rojo | 650nm</h3>
            <p class="md:text-2xl">
              Fotobiomodulación para una <br>
              cicatrización más rápida y <br>
              manejo del dolor post operatorio.</p>
            <img class="mx-auto" src="../assets/img/barra-laser-rojo.svg" alt="barra laser rojo">
          </div>
  
          <!-- laser infrarojo  -->
          <div class="text-center space-y-5 px-10 pt-10">
            <svg class="w-full " width="81" height="81" viewBox="0 0 81 81" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path class="hover:fill-gray-700" d="M0.601562 40.2275C0.601562 18.1362 18.5102 0.227539 40.6016 0.227539C62.693 0.227539 80.6016 18.1362 80.6016 40.2275C80.6016 62.3189 62.693 80.2275 40.6016 80.2275C18.5102 80.2275 0.601562 62.3189 0.601562 40.2275Z" fill="#718EAF"/>
            <path d="M34.3519 42.3112L26.0186 48.5612C23.9353 50.3945 23.6436 52.9779 23.9353 54.8112C24.2061 56.8945 25.8311 59.4362 28.1019 60.3945C31.3728 61.7904 34.5394 60.8529 36.5186 58.8112L55.1853 42.3112C59.0603 39.4362 57.2686 33.9779 53.1019 33.9779H40.6019L56.1436 24.832C57.0603 24.1654 57.4353 23.1862 57.3936 22.2487C57.2686 20.7904 56.1436 19.3945 54.3519 19.3945H54.2269C53.4978 19.3945 52.8103 19.6237 52.1853 19.9987L26.0186 33.9779C24.3311 34.9362 23.8103 36.5612 23.9353 38.1445C24.0394 40.2904 25.4769 42.3112 28.1019 42.3112M26.0186 53.7695C26.0186 52.3882 26.5673 51.0634 27.5441 50.0867C28.5208 49.1099 29.8456 48.5612 31.2269 48.5612C32.6083 48.5612 33.933 49.1099 34.9098 50.0867C35.8865 51.0634 36.4353 52.3882 36.4353 53.7695C36.4353 55.1509 35.8865 56.4756 34.9098 57.4524C33.933 58.4291 32.6083 58.9779 31.2269 58.9779C29.8456 58.9779 28.5208 58.4291 27.5441 57.4524C26.5673 56.4756 26.0186 55.1509 26.0186 53.7695Z" fill="white
            "/>
            </svg>
            <h3 class="font-bold  md:text-2xl">Láser infrarrojo | 980nm</h3>
            <p class="md:text-2xl">
              Penetración profunda.  <br>
              Máxima eficiencia en el corte,<br> 
              coagulación, y desinfección. </p>
            <img class="mx-auto" src="../assets/img/barra-laser-gris.svg" alt="barra laser rojo">
          </div>
        </div>
    </section>
    <!-- fin de tipos de laser -->


    <!-- cta  -->
    <section class="md:flex">
        <div class="block  md:flex md:w-1/2 xl:w-1/5">
            <img class="object-cover object-left w-full" src="../assets/img/procedimiento.png" alt="procedimiento">
        </div>
        <div class="block  md:w-1/2 xl:w-4/5  bg-[#BA3D89] py-20 px-10 text-white text-center">
            <p class="text-base  md:text-2xl  pb-10 font-medium">
              Descubre por qué la odontología láser escala rápidamente <br  class="hidden md:block">
               en la preferencia de tus colegas en todo el mundo.</p>
            <button class="font-bold border-2 border-white px-10 py-3 rounded-full md:text-2xl hover:bg-white hover:text-[#BA3D89]" onclick="desplazarAFormulario()">Cotiza tu Equipo</button>
        </div>
    </section>
    <!-- fin de cta -->
    
    <!-- aplicaciones  -->  
    <section class="md:py-20">
        <div class="block py-10">
          <div class="pb-10">
            <h2 class="text-center text-teal-700 font-bold text-3xl md:text-4xl pb-2">Aplicaciones</h2>
            <img class="mx-auto" src="../assets/img/barra-purpura.svg" alt="">
          </div>
            <!-- Set up your HTML -->
          <div class="owl-carousel xl:w-full xl:mx-auto">
            <!-- aplicacion 1 -->
            <div class="px-5">
              <img src="../assets/img/aplicaciones/aplicacion-1.png" alt="aplicacion">
              <p class="text-center text-base bg-[#AC4780] py-2 md:py-5 md:text-3xl text-white font-bold">Estética</p>
            </div>
            <!-- aplicacion 2 -->
            <div class="px-5">
              <img src="../assets/img/aplicaciones/aplicacion-2.png" alt="aplicacion">
              <p class="text-center text-base bg-[#AC4780] py-2 md:py-5 md:text-3xl text-white font-bold">Cirugía Oral</p>
            </div>
            <!-- aplicaiones 3 -->
            <div class="px-5">
              <img src="../assets/img/aplicaciones/aplicacion-3.png" alt="aplicacion">
              <p class="text-center text-base bg-[#AC4780] py-2 md:py-5 md:text-3xl text-white font-bold">Desensibilizacion</p>
            </div>
            <!-- aplicaciones 4 -->
            <div class="px-5">
              <img src="../assets/img/aplicaciones/aplicacion-4.png" alt="aplicacion">
              <p class="text-center text-base bg-[#AC4780] py-2 md:py-5 md:text-3xl text-white font-bold">Periodoncia</p>
            </div>
            <!-- aplicaciones 5 -->
            <div class="px-5">
              <img src="../assets/img/aplicaciones/aplicacion-5.png" alt="aplicacion">
              <p class="text-center text-base bg-[#AC4780] py-2 md:py-5 md:text-3xl text-white font-bold">Implantologia</p>
            </div>
            <!-- aplicaciones 6 -->
            <div class="px-5">
              <img src="../assets/img/aplicaciones/aplicacion-6.png" alt="aplicacion">
              <p class="text-center text-base bg-[#AC4780] py-2 md:py-5 md:text-3xl text-white font-bold">Pediatría</p>
            </div>
            <!-- aplicaciones 7 -->
            <div class="px-5">
              <img src="../assets/img/aplicaciones/aplicacion-7.png" alt="aplicacion">
              <p class="text-center text-base bg-[#AC4780] py-2 md:py-5 md:text-3xl text-white font-bold">Fotobiomodulación</p>
            </div>
            <!-- aplicaciones 8 -->
            <div class="px-5">
              <img src="../assets/img/aplicaciones/aplicacion-8.png" alt="aplicacion">
              <p class="text-center text-base bg-[#AC4780] py-2 md:py-5 md:text-3xl text-white font-bold">Endodoncia</p>
            </div>
            <!-- aplicaciones 9 -->
            <div class="px-5">
              <img src="../assets/img/aplicaciones/aplicacion-9.png" alt="aplicacion">
              <p class="text-center text-base bg-[#AC4780] py-2 md:py-5 md:text-3xl text-white font-bold">Blanquiamiento Dentral</p>
            </div>
          </div>
        </div>
    </section>

    <!-- Video de odontologia laser -->
    <section class="py-10">
          <div class=" pb-10">
            <h2 class="text-center text-teal-700 font-bold text-3xl md:text-4xl pb-2">Ventajas de usar láseres dentales</h2>
            <img class="mx-auto" src="../assets/img/barra-purpura.svg" alt="">
          </div>

          <!-- mostrar video -->
          <video class="px-5 xl:w-1/2 xl:mx-auto" controls autoplay id="myVideo2"
              class="h-auto object-cover w-full min-w-full min-h-full -z-10 xl:opacity-40">
            <source src="../assets/videos/why-doctors.mp4" type="video/mp4">
          </video>

          <div class="hidden">
            <p>
              Descubre por qué la odontología láser escala rápidamente <br>
              en la preferencia de tus colegas en todo el mundo.
            </p>
            <a class="font-bold border-2 border-white px-10 py-3 rounded-full
             md:text-2xl" href="#form">Cotiza tu Equipo</a>
          </div>

        </section>
        
    <section class="py-20 bg-[#33557B] md:h-screen xl:h-auto  md:align-middle md:table-cell xl:block">
        <div class=" px-10 pb-10 w-full">
          <p class="text-white text-center  md:text-2xl xl:text-xl "> 
            <b  class="font-bold ">
              ¿Deseas conocer más sobre <br>
              cualquiera de nuestros equipos?
            </b> <br>
            Te brindamos asesoría técnica, profesional y financiera <br  class="hidden md:block">
             para que realices la inversión más informada y correcta. 
          </p>
        </div>
        <div class="px-10">
          <p class="font-bold text-white text-center  md:text-2xl ">
          Déjanos tus datos y nuestros <br>
          asesores te contactarán. 
          </p>
        </div>
        <div class="text-center px-10 py-7 xl:w-1/2 xl:mx-auto" >
          <form action=""
          class="space-y-3 md:space-y-5" id="form" >
            <input type="text" name="nombre" placeholder="Nombre completo"
            class="bg-white placeholder-neutral-500 py-3 px-5 w-full rounded-full focus:outline-none md:text-xl" >
            <input type="text" name="telefono" placeholder="Teléfono"
            class="bg-white placeholder-neutral-500 py-3 px-5 w-full rounded-full focus:outline-none md:text-xl" >
            <input type="text" name="correo" placeholder="Correo Electrónico"
            class="bg-white placeholder-neutral-500 py-3 px-5 w-full rounded-full focus:outline-none md:text-xl" >
            <input type="text" name="especialidad" placeholder="Especialidad"
            class="bg-white placeholder-neutral-500 py-3 px-5 w-full rounded-full focus:outline-none md:text-xl" >
            <div class="flex justify-between w-full space-x-3">
              <select required name="estado" id="Estado"
                class="bg-white placeholder-neutral-500 py-3 px-5 w-1/2 rounded-full focus:outline-none md:text-xl">
                <option value="Aragua">Amazonas</option>
                <option value="Anzoátegui">Anzoátegui</option>
                <option value="Apure">Apure</option>
                <option value="Aragua">Aragua</option>
                <option value="Barinas">Barinas</option>
                <option value="Bolívar">Bolívar</option>
                <option value="Carabobo">Carabobo</option>
                <option value="Cojedes">Cojedes</option>
                <option value="Delta Amacuro">Delta Amacuro</option>
                <option value="Distrito Capital">Distrito Capital</option>
                <option value="Falcón">Falcón</option>
                <option value="Guárico">Guárico</option>
                <option value="Lara">Lara</option>
                <option value="Mérida">Mérida</option>
                <option value="Miranda">Miranda</option>
                <option value="Monagas">Monagas</option>
                <option value="Nueva Esparta">Nueva Esparta</option>
                <option value="Portuguesa">Portuguesa</option>
                <option value="Sucre">Sucre</option>
                <option value="Táchira">Táchira</option>
                <option value="Trujillo">Trujillo</option>
                <option value="Vargas">Vargas</option>
                <option value="Yaracuy">Yaracuy</option>
                <option value="Zulia">Zulia</option>
                <option value="Dependencias Federales">Dependencias Federales</option>
              </select>
              <input type="text" name="ciudad" placeholder="Ciudad"
                  class="bg-white placeholder-neutral-500 py-3 px-5 w-1/2 rounded-full focus:outline-none md:text-xl" >
                <!-- input lading escondidad -->
                <input type="hidden" name="landing" value="odontologos">
              </div>
              <button class="bg-[#1E1F1D] hover:opacity-70 text-white  rounded-full px-10  text-center w-full py-3 font-bold  md:text-xl"
               type="submit">
                  Enviar solicitud 
              </button>
          </form>
        </div>

    </section>
  
</main>    

<footer class="bg-[#1E1F1D] py-5">
  <p class="text-white text-center text-xs md:text-base">
    Copyright 2022 Profimédica. Todos los derechos reservados.
  </p>
</footer>

<script>
   function desplazarAFormulario() {
      document.getElementById("form").scrollIntoView({
        behavior: 'smooth'
      });
    }
</script>

    <script>
      $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
          loop:true,
          autoplay:true,
          autoplayTimeout: 2000,
          autoplayHoverPause: true,
          responsive:{
              0:{
                  items:1,
              },
              1000:{
                  items:3,
              }
          }
        
        });
      });
    </script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
    
</body>
</html>