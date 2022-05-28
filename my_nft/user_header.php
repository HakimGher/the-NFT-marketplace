<html style="font-size: 62.5%;font-family: 'Nunito', sans-serif;">
<meta name="viewport" content="width=device-width">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel='stylesheet prefetch' href='http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css'>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Sora:wght@700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@700;800&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@700&display=swap" rel="stylesheet">
<!-- style linking -->
<link href="./dist/output.css" rel="stylesheet">
<link href="./dist/style.css" rel="stylesheet">
<!-- script linking -->
<script src="https://kit.fontawesome.com/1db09dea83.js" crossorigin="anonymous"></script>

<title>webHeader</title>
</head>
<body class="bg-black">

<header>

  <nav class="border-b-2 border-borderWhite border-solid  bg-black text-white header-border">
   <div class="flex flex-wrap justify-between items-center mob:px-0 mob:py-4 px-32 py-6 sm:px-16 sm:justify-between md:px-16">
    <div class="pt-2 mob:pl-7"><a  href="#" class="text-4.5xl mob:text-4xl mob:justify-around basis-1/2 self-center   whitespace-nowrap dark:text-white hover:text-bleu text delay-150 xl:basis-auto  leading-8">JinxArt</a><h6 class="text-3xl ml-8 mob:leading-6" style=";font-family: 'Dancing Script'">marketpkace</h6></div>

    <!--  begin the search bar -->
     <div class="flex md:hidden lg:hidden">
      <div class="relative mr-3 xl:mr-0 xl:block md:hidden hidden" >
        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
          <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
        </div>
        <input type="text" id="email-adress-icon" class="text-2xl leading-none block p-4 px-10 w-full text-gray-900 bg-gray-50 rounded-xl border border-gray-300 md:text-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
      </div> 
     </div>
    <!-- the end of the searching bar -->

    <!--  the icons div-->
     <div class="mob:basis-auto order-0  xl:inline-block  mob:pr-7">
      <span class="ml:hidden"><a onclick="disp()" class="fas fa-bars text-4xl bg-white mob:p-4 mob:text-3xl p-4 text-black mx-1 hover:text-white hover:bg-bleu delay-150" href="#"></a></span>      
     </div>
    <!--  end icons div-->

     <div style="transition: all 10s;" id="navShow" class="hidden  w-full ml:space-x-14 items-center ml:inline-block ml:w-auto ml:my-auto mob:pt-4  text-center mob:border-t-2 mob:border-borderWhite mob:border-solid mob:header-border mob:mt-4 mob:space-y-3">
       <a href="./index.php" class=" nav_btn mob:text-3xl text-6/3xl hover:text-bleu delay-150  " href="#">Home</a>
       <a href="./compenents/products.php" class=" nav_btn mob:text-3xl text-6/3xl hover:text-bleu delay-150  " href="#">Produits</a>
       <a href="./contact.php" class=" nav_btn mob:text-3xl text-6/3xl hover:text-bleu delay-150 " href="#">Contact</a>
       <a href="./about.php" class=" nav_btn mob:text-3xl text-6/3xl hover:text-bleu delay-150 " href="#">About</a>
      <div class="guest flex space-x-4  mod:w-fit mod:mx-auto  my-4 ml:hidden">    
       <a  href="./BACK/register.php" class="btn2 text-2xl py-4 px-6 mob:py-2 mob:px-4 relative border border-white font-semibold tracking-wider overflow-hidden hover:text-bleu rounded" type="button">
       <span class="absolute inset-0 bg-white"></span>
       <span class="absolute inset-0 flex justify-center items-center font-semibold"> 
       username
       </span>
       username
      </a>
      <span><a class="fas fa-sign-out text-4xl bg-white p-4 text-black mx-1 hover:text-white hover:bg-bleu delay-150" href="#"></a></span>      
      </div>
     </div>
          <div class="guest flex space-x-4 mt:hidden aftab:hidden ">
   
 <a  href="./BACK/register.php" class="btn2 text-2xl py-4 px-6 mob:py-2 mob:px-4 relative border border-white font-semibold tracking-wider overflow-hidden hover:text-bleu rounded" type="button">
       <span class="absolute inset-0 bg-white"></span>
       <span class="absolute inset-0 flex justify-center items-center font-semibold"> 
       username
       </span>
       username
      </a>
      <span><a class="fas fa-sign-out text-4xl bg-white p-4 text-black mx-1  hover:text-white hover:bg-bleu delay-150" href="#"></a></span>
      </div>
   </div>
  </nav>

<script type="text/javascript" src="./js/nav.js"></script>

</header>
