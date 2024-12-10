<script>
    let currentImageIndex = 0;
    const images = [
      "/assets/takoyaki1.jpg",
      "/assets/takoyaki.jpg"
    ];
  
    const nextImage = () => {
      currentImageIndex = (currentImageIndex + 1) % images.length;
    };
  
    const prevImage = () => {
      currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
    };
</script>

<!-- whole card -->
<div class="h-full rounded-xl flex flex-col w-full">
    <!-- upper section -->
    <div class="relative">
      <!-- sold out or in stock label -->
      <div class="absolute top-2 right-2 bg-darkPurple/70 backdrop-blur-md text-xs p-2 px-2 text-white rounded-full w-20 text-center">
        Stock 3
      </div>
  
      <!-- image display -->
      <!-- svelte-ignore a11y_img_redundant_alt -->
      <img src={images[currentImageIndex]} alt="Product Image" class="rounded-tl-3xl rounded-tr-3xl w-full h-[310px] object-cover" />
  
      <!-- carousel buttons -->
      {#if images.length > 1}
        <div class="absolute top-1/2 transform -translate-y-1/2 w-full flex justify-between px-4">
          <button class="text-darkPurple text-2xl" on:click={prevImage}>&lt;</button>
          <button class="text-darkPurple text-2xl" on:click={nextImage}>&gt;</button>
        </div>
      {/if}
    </div>
  
    <!-- below section -->
    <div class="bg-purple/70 backdrop-blur-lg rounded-bl-3xl rounded-br-3xl h-[180px] p-4 flex flex-col justify-between">
      <!-- product name and sold count -->
      <div class="flex flex-col">
        <div class="flex justify-between">
          <p class="text-lg text-white font-semibold">Takoyaki</p>
          <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-flame">
              <path d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z"/>
            </svg>
            <p class="text-xs text-light font-medium pl-1">26</p>
          </div>
        </div>
        <p class="text-xs text-light/70 font-dmSans">PHP 330</p>
  
        <!-- categories -->
        <div class="mt-5 flex gap-1 text-xs text-light/50 font-medium">
          <div class="bg-lightPurple/20 p-1 px-3 rounded-full">Animals</div>
          <div class="bg-lightPurple/20 p-1 px-3 rounded-full">Foods</div>
        </div>
      </div>
  
      <!-- actions button -->
      <div class="flex gap-1">
        <button class="bg-light p-2 w-full rounded-xl text-xs text-purple font-medium">
          Contact Seller
        </button>
  
        <!-- like/heart button -->
        <!-- <div class="relative group">
          <button class="bg-lightPurple p-3 rounded-xl text-xs flex items-center justify-center text-white w-auto" aria-label="love">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#352F44" viewBox="0 0 256 256">
              <path d="M240,102c0,70-103.79,126.66-108.21,129a8,8,0,0,1-7.58,0C119.79,228.66,16,172,16,102A62.07,62.07,0,0,1,78,40c20.65,0,38.73,8.88,50,23.89C139.27,48.88,157.35,40,178,40A62.07,62.07,0,0,1,240,102Z"/>
            </svg>
          </button>
          <div class="absolute top-1/2 transform -translate-x-1/2 -translate-y-full opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-white/70 text-purple text-xs rounded p-2">
            Coming Soon!
          </div>
        </div> -->
  
        <!-- share button -->
        <button class="bg-light p-3 rounded-xl text-xs flex items-center justify-center text-white w-auto" aria-label="share">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#352F44" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-share">
            <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"/>
            <polyline points="16 6 12 2 8 6"/>
            <line x1="12" x2="12" y1="2" y2="15"/>
          </svg>
        </button>
      </div>
    </div>
  </div>
  