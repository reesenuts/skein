<section class="h-[70vh] flex justify-center items-center overflow-y-auto">
    <div class="bg-purple/50 backdrop-blur-lg rounded-3xl w-[500px] h-full p-10 flex flex-col justify-between gap-6">
      <div class="w-full flex flex-col justify-start h-full gap-6">
        <!-- Product Name Step -->
        <div class="bg-darkPurple/70 p-4 rounded-3xl flex flex-col">
          <h1 class="text-4xl font-bold text-light mb-7">✦ Product Name</h1>
          <input
            type="text"
            id="productName"
            required
            placeholder="Product name"
            class="rounded-xl text-xs border-2 px-4 py-3 text-light/80 border-purple placeholder:text-xs focus:outline-none focus:ring-0 focus:border-lightPurple bg-transparent"
          />
        </div>
  
        <!-- Steps -->
        <div class="flex flex-col gap-4">
          <p class="text-xl font-bold text-lightPurple">✦ Images</p>
          <p class="text-xl font-bold text-lightPurple">✦ Price</p>
          <p class="text-xl font-bold text-lightPurple">✦ Quantity</p>
          <p class="text-xl font-bold text-lightPurple">✦ Category</p>
          <p class="text-xl font-bold text-lightPurple">✦ Done</p>
        </div>
      </div>
  
      <!-- Bottom -->
      <div class="w-full mt-4">
        <div class="flex gap-2">
          <button class="bg-darkPurple p-4 w-full rounded-xl text-xs text-lightPurple font-semibold">
            Cancel
          </button>
          <button class="bg-light p-4 w-full rounded-xl text-xs text-purple font-semibold">
            Upload
          </button>
        </div>
      </div>
    </div>
  </section>
  