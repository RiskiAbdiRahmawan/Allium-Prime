<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Allium Prime</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <nav class="bg-white fixed w-full z-20 top-0 start-0 border-b border-white font-nunito">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">
        <span class="self-center text-2xl font-poppins font-semibold whitespace-nowrap dark:text-white">Allium Prime</span>
    </a>
    <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
        <button type="button" class="text-white bg-navyblue hover:bg-deepblue focus:ring-4 focus:outline-none focus:ring-blue font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
    </div>
    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
        <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
            <a href="#home" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Home</a>
        </li>
        <li>
            <a href="#about" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">About</a>
        </li>
        <li>
            <a href="#services" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Services</a>
        </li>
        <li>
            <a href="#testimonials" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Testimonials</a>
        </li>
        <li>
            <a href="#contactus" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Contact</a>
        </li>
        </ul>
    </div>
    </div>
    </nav>

    <section id="home" class=" bg-cover bg-center py-32 dark:bg-gray font-nunito" style="background-image: url({{ asset('images/orion.jpg') }})">
        <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
            <div class="mr-auto place-self-center lg:col-span-7">
                <h1 class="max-w-2xl mb-4 text-2xl font-extrabold text-white tracking-tight leading-none md:text-4xl xl:text-4xl dark:text-white">Digital Solutions for Agent Management Efficiency and Ease.</h1>
                <p class="max-w-2xl mb-6 font-light text-white lg:mb-8 md:text-lg lg:text-0.5xl dark:text-gray-400">Allium Prime is a digital platform that simplifies stock management, transactions, reports, and demand forecasting to improve operational efficiency.</p>
                <a href="{{ route('login') }}" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-grayishblue hover:bg-deepblue focus:ring-4 focus:ring-grayishblue dark:focus:ring-grayishblue">
                    Get started
                    <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a> 
            </div>                
        </div>
    </section>

    <section id="about" class="relative bg-gray-100 py-16 font-nunito">
    <!-- Pembungkus Buram -->
    <div class="absolute inset-0 bg-white/60 backdrop-blur-md"></div>

    <!-- Konten Utama -->
    <div class="relative z-10 max-w-screen-xl mx-auto text-center px-6 py-10 rounded-xl shadow-lg bg-white">
        <h2 class="text-4xl font-extrabold text-gray-900 mb-4">About Us</h2>
        <p class="text-lg font-light text-gray-600 mb-8">
            Allium Prime is a digital platform designed to streamline agent management, 
            making business operations more efficient and accessible. Our mission is to provide 
            innovative tools for inventory control, financial reporting, and demand forecasting.
        </p>
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-2 items-center">
            <!-- Gambar -->
            <img class="w-64 mx-auto rounded-xl" src="{{ asset('images/orion2.jpg') }}" alt="dashboard image">
            
            <!-- Teks -->
            <div class="text-left">
                <h3 class="text-2xl font-semibold text-gray-900 mb-4">
                    Simplify Your Business Operations
                </h3>
                <p class="text-gray-600 font-light mb-6">
                    Our platform helps agents to monitor real-time performance, access reports, and manage data efficiently. 
                    With our intuitive interface, you can improve decision-making and optimize your business operations.
                </p>
                <a href="#" class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 
                                  focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Learn More
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

    <section id="services" class="bg-white dark:bg-gray-900 font-nunito">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <div class="max-w-screen-md mb-8 lg:mb-16">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Tailored for agricultural businesses like yours</h2>
            <p class="text-gray-500 sm:text-xl dark:text-gray-400">At Allium Prime, we focus on providing innovative software solutions that streamline agricultural operations, optimize supply chain management, and enhance communication between red onion agents and suppliers, driving efficiency and profitability in the industry.</p>
        </div>
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-2 md:gap-12 md:space-y-0">
            <div>
                <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <i class="fas fa-users w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300"></i>
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Agent Coordination</h3>
                <p class="text-gray-500 dark:text-gray-400">Work with onion suppliers and distributors to manage inventory, sales, and customer relations efficiently.</p>
            </div>
            <div>
                <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <i class="fas fa-wallet w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300"></i>
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Finance Management</h3>
                <p class="text-gray-500 dark:text-gray-400">Track and manage financial transactions between agents, suppliers, and customers to ensure profitability and sustainability.</p>
            </div>
            <div>
                <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <i class="fas fa-chart-line w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300"></i>
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Market Analytics</h3>
                <p class="text-gray-500 dark:text-gray-400">Leverage data and analytics to predict market trends, optimize pricing, and plan for supply-demand balance.</p>
            </div>
            <div>
                <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                    <i class="fas fa-truck w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300"></i>
                </div>
                <h3 class="mb-2 text-xl font-bold dark:text-white">Supply Chain Management</h3>
                <p class="text-gray-500 dark:text-gray-400">Monitor and optimize the flow of onions from farmers to agents, ensuring timely deliveries and quality control.</p>
            </div>
        </div>
    </div>
</section>

    <section id="testimonials" class="bg-white dark:bg-gray-900 font-nunito">
  <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
      <div class="mx-auto max-w-screen-sm">
          <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Testimonials</h2>
          <p class="mb-8 font-light text-gray-500 lg:mb-16 sm:text-xl dark:text-gray-400">Explore the whole collection of open-source web components and elements built with the utility classes from Tailwind</p>
      </div> 
      <div class="grid mb-8 lg:mb-12 lg:grid-cols-2">
          <!-- Testimonial 1 -->
          <figure class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-b border-gray-200 md:p-12 lg:border-r dark:bg-gray-800 dark:border-gray-700">
              <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
                  <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Speechless with how easy this was to integrate</h3>
                  <p class="my-4">"I recently got my hands on Flowbite Pro, and holy crap, I'm speechless with how easy this was to integrate within my application. Most templates are a pain, code is scattered, and near impossible to theme.</p>
                  <p class="my-4">Flowbite has code in one place and I'm not joking when I say it took me a matter of minutes to copy the code, customise it and integrate within a Laravel + Vue application.</p>
                  <p class="my-4">If you care for your time, I hands down would go with this."</p>
              </blockquote>
              <figcaption class="flex justify-center items-center space-x-3">
                  <img class="w-9 h-9 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png" alt="profile picture">
                  <div class="space-y-0.5 font-medium dark:text-white text-left">
                      <div>Bonnie Green</div>
                      <div class="text-sm font-light text-gray-500 dark:text-gray-400">Developer at Open AI</div>
                  </div>
              </figcaption>    
          </figure>
          
          <!-- Testimonial 2 -->
          <figure class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-b border-gray-200 md:p-12 dark:bg-gray-800 dark:border-gray-700">
              <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
                  <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Solid foundation for any project</h3>
                  <p class="my-4">"FlowBite provides a robust set of design tokens and components based on the popular Tailwind CSS framework. From the most used UI components like forms and navigation bars to the whole app screens designed both for desktop and mobile, this UI kit provides a solid foundation for any project.</p>
                  <p class="my-4">Designing with Figma components that can be easily translated to the utility classes of Tailwind CSS is a huge timesaver!"</p>
              </blockquote>
              <figcaption class="flex justify-center items-center space-x-3">
                  <img class="w-9 h-9 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png" alt="profile picture">
                  <div class="space-y-0.5 font-medium dark:text-white text-left">
                      <div>Roberta Casas</div>
                      <div class="text-sm font-light text-gray-500 dark:text-gray-400">Lead designer at Dropbox</div>
                  </div>
              </figcaption>    
          </figure>
          
          <!-- Additional Testimonials (hidden by default) -->
          <figure class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-b border-gray-200 lg:border-b-0 md:p-12 lg:border-r dark:bg-gray-800 dark:border-gray-700 hidden testimonial">
              <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
                  <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Mindblowing workflow and variants</h3>
                  <p class="my-4">"As someone who mainly designs in the browser, I've been a casual user of Figma, but as soon as I saw and started playing with FlowBite my mind was 🤯.</p>
                  <p class="my-4">Everything is so well structured and simple to use (I've learnt so much about Figma by just using the toolkit).</p>
                  <p class="my-4">Aesthetically, the well designed components are beautiful and will undoubtedly level up your next application."</p>
              </blockquote>
              <figcaption class="flex justify-center items-center space-x-3">
                  <img class="w-9 h-9 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="profile picture">
                  <div class="space-y-0.5 font-medium dark:text-white text-left">
                      <div>Jese Leos</div>
                      <div class="text-sm font-light text-gray-500 dark:text-gray-400">Software Engineer at Facebook</div>
                  </div>
              </figcaption>    
          </figure>
          
          <!-- More hidden testimonials -->
          <figure class="flex flex-col justify-center items-center p-8 text-center bg-gray-50 border-gray-200 md:p-12 dark:bg-gray-800 dark:border-gray-700 hidden testimonial">
              <blockquote class="mx-auto mb-8 max-w-2xl text-gray-500 dark:text-gray-400">
                  <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Efficient Collaborating</h3>
                  <p class="my-4">"This is a very complex and beautiful set of elements. Under the hood it comes with the best things from 2 different worlds: Figma and Tailwind.</p>
                  <p class="my-4">You have many examples that can be used to create a fast prototype for your team."</p>
              </blockquote>
              <figcaption class="flex justify-center items-center space-x-3">
                  <img class="w-9 h-9 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png" alt="profile picture">
                  <div class="space-y-0.5 font-medium dark:text-white text-left">
                      <div>Joseph McFall</div>
                      <div class="text-sm font-light text-gray-500 dark:text-gray-400">CTO at Google</div>
                  </div>
              </figcaption>    
          </figure>
      </div>
      <div class="text-center">
          <a href="javascript:void(0);" id="showMoreBtn" class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Show more...</a> 
      </div>
  </div>
</section>

<section id="contactus" class="bg-white dark:bg-gray-900 font-nunito">
  <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact Us</h2>
      <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">
          Have a technical issue? Want to provide feedback on our services? Need more information about Allium Prime features? Please contact us via the form below.      </p>
      <form action="#" class="space-y-8">
          <div>
              <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your Email</label>
              <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@example.com" required>
          </div>
          <div>
              <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
              <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Write the subject of your message" required>
          </div>
          <div class="sm:col-span-2">
              <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your Message</label>
              <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Write your message or complaint..."></textarea>
          </div>
          <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-navyblue sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
              Send Message
          </button>
      </form>
  </div>
</section>


<footer class="bg-navyblue rounded-lg shadow m-4 dark:bg-gray-800 font-nunito">
  <div class="w-full mx-auto max-w-screen-xl p-4 flex items-center justify-center">
    <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">
      © 2024 <a href="https://flowbite.com/" class="hover:underline">Allium Prime™</a>. All Rights Reserved.
    </span>
  </div>
</footer>


<script>
  document.getElementById('showMoreBtn').addEventListener('click', function() {
    const hiddenTestimonials = document.querySelectorAll('.testimonial');
    
    hiddenTestimonials.forEach(function(testimonial) {
        if (testimonial.classList.contains("hidden")) {
            testimonial.classList.remove("hidden");
            this.textContent = "Show less...";  // Mengubah teks tombol
        } else {
            testimonial.classList.add("hidden");
            this.textContent = "Show more...";  // Mengubah teks tombol kembali
        }
    }.bind(this)); // Menggunakan bind(this) untuk menjaga konteks "this" sebagai tombol yang diklik
  });
</script>



</body>
</html>